<?php

namespace Acme;

class AccountManager
{
    public function depositIntoAccount(SavingAccount $account, int $milliAmount): void
    {
        $account->deposit($milliAmount);
    }

    public function withDrawFromAccount(SavingAccount $account, int $milliAmount): bool
    {
        return $account->withDraw($milliAmount);
    }
}
