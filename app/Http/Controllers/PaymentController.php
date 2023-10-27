<?php

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Session;

use Stripe;

class PaymentController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }



    public function stripePost(Request $request)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
                "amount" => 100 * 100,
                "currency" => "LKR",
                "source" => $request->stripeToken,
                "description" => "This payment is tested purpose"
        ]);
   
        Session::flash('success', 'Payment successful!');
           
        return back();
        
    }
}*/

/*namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Model\product;


class PaymentController extends Controller{

    public function payment(Request $request){
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey(config('stripe.stripe_sk'));

        $totalAmount = $request->price * 100;

       
        

    // Set the Stripe Checkout Session unit amount.
        

        $response=\Stripe\checkout\Session::create([
        'line_items' => [
            [
            'price_data' => [
                'currency' => 'lkr',
                'product_data' => ['name' => 'Total'],
                //'unit_amount' =>$request->price*100,
                'unit_amount' =>$totalAmount,
                
                
            ],
            
            'quantity' => 1,
            ],
        ],
        
        'mode' => 'payment',
        'success_url' => route('stripe_success'),
        'cancel_url' => route('stripe_cancel'),
        ]);

        return redirect()->away($response->url);
    }

    public function success(){

    }

    public function cancel(){

    }
}*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Stripe\Exception\InvalidRequestException;  // Import the InvalidRequestException class
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function payment(Request $request)
    {
        try {
            // Set your secret key. Remember to switch to your live secret key in production.
            // See your keys here: https://dashboard.stripe.com/apikeys
            Stripe::setApiKey(config('stripe.stripe_sk'));

            // Convert the amount to cents for LKR
            $totalAmountCents = $request->price * 100;

            // Ensure the total amount is at least 50 cents
            $minimumAmountCents = 50;

            // Log the total amount for debugging
            Log::info("Total Amount (Cents): $totalAmountCents");

            if ($totalAmountCents < $minimumAmountCents) {
                // Log an error message for debugging
                Log::error("Total amount is less than $minimumAmountCents cents.");

                // Throw a custom exception for amounts less than 50 cents
                throw new \Exception('The total amount must be at least 50 cents.');
            }

            // Set the Stripe Checkout Session unit amount.
            $response = \Stripe\checkout\Session::create([
                'line_items' => [
                    [
                        'price_data' => [
                            'currency' => 'lkr',
                            'product_data' => ['name' => 'Total'],
                            'unit_amount' => $totalAmountCents,
                        ],
                        'quantity' => 1,
                    ],
                ],
                'mode' => 'payment',
                'success_url' => route('stripe_success'),
                'cancel_url' => route('stripe_cancel'),
                
            ]);

            

            return redirect()->away($response->url);
        } catch (InvalidRequestException $e) {
            // Catch Stripe-specific exceptions
            Log::error("Stripe Error: " . $e->getMessage());
            return redirect()->route('cart')->with('error', 'There was an error processing your payment.');
        } catch (\Exception $e) {
            // Catch other exceptions
            Log::error("Error: " . $e->getMessage());
            return redirect()->route('cart')->with('error', $e->getMessage());
        }
    }

    public function success()
    {
        // Handle success
    }

    public function cancel()
    {
        // Handle cancellation
    }
}


    



    








