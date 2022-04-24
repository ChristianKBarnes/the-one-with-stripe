<?php

namespace App\Services;

use Stripe\StripeClient;

class StripeService
{
    /**
     * @var mixed $stripeClient
     */
    public $stripeClient;

    /**
     * Initialise stripe service.
     */
    public function __construct()
    {
        $stripeClient = new StripeClient(\config('services.stripe.key'));
    }
}
