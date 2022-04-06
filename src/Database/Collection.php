<?php

namespace Acme\Database;

class Collection
{
    private array $data;

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->data = $data;
    }
    
    public function count(): int
    {
        return count($this->data);
    }
}
