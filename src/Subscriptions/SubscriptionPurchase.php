<?php

namespace Acme\Subscriptions;

use Acme\Entities\Subscription;
use Acme\Entities\User;
use Acme\Exceptions\InvalidReceiptException;
use Acme\Receipts\ReceiptInterface;
use DateTime;

class SubscriptionPurchase
{
    private User $user;

    private Subscription $subscription;

    public function __construct(User $user, Subscription $subscription)
    {
        $this->user = $user;
        $this->subscription = $subscription;
    }

    /**
     * @throws InvalidReceiptException
     */
    public function subscribe(ReceiptInterface $receipt)
    {
        if ($receipt->isValid()) {
            $this->extendSubscription();
            return;
        }

        throw new InvalidReceiptException();
    }

    private function extendSubscription()
    {
        $expiryDateTime = (new DateTime())->modify('+1 month');
        $this->subscription->setExpiryDateTime($expiryDateTime);
        $this->subscription->setUser($this->user);
    }
}
