<?php

namespace Acme\Reports;

interface FormatterInterface
{
    public function print(int $messages): string;
}
