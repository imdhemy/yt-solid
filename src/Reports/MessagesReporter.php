<?php

namespace Acme\Reports;

use Acme\Repositories\MessageRepository;

class MessagesReporter
{
    private MessageRepository $repository;

    public function __construct(MessageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param string $channel
     * @param HtmlFormatter $formatter
     * @return string
     */
    public function channel(string $channel, FormatterInterface $formatter): string
    {
        $messages = $this->repository->countByChannelId($channel);

        return $formatter->print($messages);
    }
}
