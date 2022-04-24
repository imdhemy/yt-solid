<?php

namespace Tests;

use Acme\AccountManager;
use Acme\FixDepositSavingAccount;
use Acme\RegularSavingAccount;
use Acme\SalarySavingAccount;
use PHPUnit\Framework\TestCase;

class AccountManagerTest extends TestCase
{
    /**
     * @test
     */
    public function it_should_work_with_all_account_types()
    {
        $accountManager = new AccountManager();

        $accountManager->withDrawFromAccount(new RegularSavingAccount(100), 10);

        $accountManager->withDrawFromAccount(new SalarySavingAccount(100), 10);

        // BREAK !!
        $accountManager->withDrawFromAccount(new FixDepositSavingAccount(100), 10);
    }
}
