<?php

namespace Acme\Database;

use JetBrains\PhpStorm\Pure;

class DB
{
    #[Pure] public static function table(string $string): self
    {
        return new self();
    }

    #[Pure] public function where(array $criteria): Collection
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
