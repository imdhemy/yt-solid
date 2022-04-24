<?php

namespace Acme;

class FixDepositSavingAccount implements Depositable
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
}
