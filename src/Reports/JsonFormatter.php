<?php

namespace Acme\Reports;

class JsonFormatter implements FormatterInterface
{

    public function print(int $messages): string
    {
        return json_encode(["messages" => $messages]);
    }
}
