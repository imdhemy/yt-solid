<?php

namespace Acme\Repositories;

use Acme\Database\DB;

class MessageRepository
{
    public function countByChannelId(string $channel): int
    {
        return DB::table('messages')->where(['channel_id' => $channel])->count();
    }
}
