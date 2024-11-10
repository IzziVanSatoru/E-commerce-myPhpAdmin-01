<?php
namespace Api;

class StripeAPI {
    public function processPayment($amount, $currency) {
        // Simulate Stripe payment processing
        return rand(0, 1) ? 'Payment Successful' : 'Payment Failed';
    }
}
