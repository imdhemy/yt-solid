<?php

namespace Acme\Reports;

use Acme\Auth\Auth;
use Acme\Database\DB;
use Acme\Exceptions\AuthorizationException;

class MessagesReporter
{
    /**
     * @param string $channel
     * @return string
     * @throws AuthorizationException
     */
    public function channel(string $channel): string
    {
        // Check if user is authenticated
        if (! Auth::check()) {
            throw new AuthorizationException();
        }

        // Find messages count in channel
        $messages = DB::table('messages')->where(['channel_id' => $channel])->count();

        // Return formatted results
        return "<strong>Total: $messages</strong>";
    }
}
