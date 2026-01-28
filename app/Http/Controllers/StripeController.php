<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;

class StripeController extends Controller
{
    public function checkoutForm()
    {
        return view('frontend.checkout');
    }

    public function createCheckoutSession(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'customer_email' => $request->email,

            'line_items' => [[
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Custom Payment',
                    ],
                    'unit_amount' => $request->price * 100, // cents
                ],
                'quantity' => 1,
            ]],

            'mode' => 'payment',

            'success_url' => url('/success'),
            'cancel_url' => url('/cancel'),

            'metadata' => [
                'name' => $request->name,
                'phone' => $request->phone,
            ],
        ]);

        return redirect($session->url);
    }
}
