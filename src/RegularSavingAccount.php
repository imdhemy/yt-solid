<?php

namespace Acme;

class RegularSavingAccount implements SavingAccount
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
        $balanceAfterWithDraw = $this->milliBalance - $milliAmount;

        if ($balanceAfterWithDraw >= 1000000) {
            $this->milliBalance = $balanceAfterWithDraw;
            return true;
        }

        return false;
    }
}
