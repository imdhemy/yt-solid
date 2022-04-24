<?php

namespace Acme\Repositories;

interface MessageRepositoryInterface
{
    public function countByChannelId(string $channel): int;
}
