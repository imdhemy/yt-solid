<?php

namespace Acme;

class FixDepositSavingAccount implements SavingAccount
{
    private int $milliBalance;

    public function __construct(int $milliBalance)
    {
        $this->milliBalance = $milliBalance;
    }

    public function deposit(int $milliAmount): void
    {
        $this->milliBalance += $milliAmount;
    }

    public function withDraw(int $milliAmount): bool
    {
        throw new \Exception("Not supported by this account type");
    }
}
