<?php

namespace Acme\Database;

class Collection
{
    /**
     * @var array
     */
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    /**
     * @return int
     */
    public function count(): int
    {
        return count($this->data);
    }
}
