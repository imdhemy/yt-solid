<?php

namespace Acme;

class AccountManager
{
    public function depositIntoAccount(Depositable $account, int $milliAmount): void
    {
        $account->deposit($milliAmount);
    }

    public function withDrawFromAccount(Withdrawable $account, int $milliAmount): bool
    {
        return $account->withDraw($milliAmount);
    }
}
