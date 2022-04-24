<?php

namespace Acme\Reports;

class HtmlFormatter implements FormatterInterface
{
    public function print(int $messages): string
    {
        return "<strong>Total: $messages</strong>";
    }
}
