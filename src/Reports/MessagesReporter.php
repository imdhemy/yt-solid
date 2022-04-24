<?php

namespace Acme\Reports;

use Acme\Repositories\MessageRepositoryInterface;

class MessagesReporter
{
    private MessageRepositoryInterface $repository;

    public function __construct(MessageRepositoryInterface $repository)
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
