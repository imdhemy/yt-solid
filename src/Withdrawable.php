<?php

namespace Acme;

interface Withdrawable
{
    public function withDraw(int $milliAmount): bool;
}
