<?php

namespace Acme\Subscriptions;

use Acme\Entities\Subscription;
use Acme\Entities\User;
use Acme\Exceptions\InvalidReceiptException;
use Acme\Receipts\AppStoreReceipt;
use Acme\Receipts\GooglePlayReceipt;
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
    public function subscribe($receipt)
    {
        if ($receipt instanceof AppStoreReceipt) {
            $this->validateAppstore($receipt);
            $this->extendSubscription();
        }

        if ($receipt instanceof GooglePlayReceipt) {
            $this->validateGooglePlay($receipt);
            $this->extendSubscription();
        }

        throw new InvalidReceiptException();
    }

    private function extendSubscription()
    {
        $expiryDateTime = (new DateTime())->modify('+1 month');
        $this->subscription->setExpiryDateTime($expiryDateTime);
        $this->subscription->setUser($this->user);
    }


    private function validateAppstore(AppStoreReceipt $receipt)
    {
        //
    }


    private function validateGooglePlay(GooglePlayReceipt $receipt)
    {
        //
    }
}
