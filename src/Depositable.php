<?php

namespace Acme;

interface Depositable
{
    public function deposit(int $milliAmount): void;
}
