<?php

namespace Acme;

interface SavingAccount
{
    public function deposit(int $milliAmount): void;

    public function withDraw(int $milliAmount): bool;
}
