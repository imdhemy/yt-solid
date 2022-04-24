<?php

namespace Acme\Receipts;

interface ReceiptInterface
{
    public function isValid(): bool;
}
