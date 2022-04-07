<?php

namespace Acme\Database;

class DB
{
    /**
     * Sets the active table
     * @param string $string
     * @return static
     */
    public static function table(string $string): self
    {
        return new self();
    }

    /**
     * @param array $criteria
     * @return Collection
     */
    public function where(array $criteria): Collection
    {
        return new Collection([
            [
                'id' => '1',
                'content' => 'Hi'
            ],
            [
                'id' => '2',
                'content' => 'How are you?'
            ]
        ]);
    }
}
