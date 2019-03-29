<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use GuzzleHttp\Client;
use App\Mail\CheckoutEmail; 
use Mail; 

class PaymentController extends Controller {

    function subscription() {
        $data['title'] = 'Payment';
        return view('details', $data);
    }

    function open_thank_you_page(){
        return view('second_thank_page');
    }
    function addSubscription(Request $request) {


       

        $plan_name = "gloriousenlargement_monthly";
        $add_user = User::where('email', $request->email)->first();
        if (!$add_user) {
            $add_user = new User;
            $add_user->name = $request->full_name;
            $add_user->post_code = $request->post_code;
            $add_user->country = $request->country;
            $add_user->email = $request->email;
            $add_user->save();
        }
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        $cus = \Stripe\Customer::create([
            "email"=>$add_user->email,
            "description" => "Customer for $add_user->email",
            "source" => $request['stripeToken'] // obtained with Stripe.js
        ]);
        try {
            \Stripe\Charge::create([
                "amount" => 700,
                "currency" => "usd",
                "customer" => $cus->id,
                "description" => "Charge for $add_user->email"
            ]);

            try {
                \Stripe\Subscription::create([
                    "customer" => $cus->id,
                    "items" => [
                        [
                            "plan" => $plan_name,
                        ],
                    ],
                    'trial_end'=>time()+259200,
                ]);
                $add_user->stripe_id = $cus->id;
                $add_user->save();

                 Mail::to($request->email)->send(new CheckoutEmail());


                Session::flash('success', 'Charged successfully');
                return Redirect('https://gloriousenlargement.com/specialgift');
            } catch (\Stripe\Error\Card $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (\Stripe\Error\RateLimit $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (\Stripe\Error\InvalidRequest $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (\Stripe\Error\Authentication $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (\Stripe\Error\ApiConnection $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (\Stripe\Error\Base $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            } catch (Exception $e) {
                Session::flash('error', $e->getMessage());
                return Redirect::to(URL::previous());
            }
        } catch (\Stripe\Error\Card $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (\Stripe\Error\RateLimit $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (\Stripe\Error\InvalidRequest $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (\Stripe\Error\Authentication $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (\Stripe\Error\ApiConnection $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (\Stripe\Error\Base $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        } catch (Exception $e) {
            Session::flash('error', $e->getMessage());
            return Redirect::to(URL::previous());
        }
//        if (!$add_user->subscribed($plan_name)) {
//            $stripeToken = $request['stripeToken'];
//            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
//            try {
//                $add_user->newSubscription($plan_name, $plan_name)
//                    ->trialDays(5)
//                    ->create($stripeToken);
//            } catch (\Stripe\Error\Card $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (\Stripe\Error\RateLimit $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (\Stripe\Error\InvalidRequest $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (\Stripe\Error\Authentication $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (\Stripe\Error\ApiConnection $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (\Stripe\Error\Base $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            } catch (Exception $e) {
//                Session::flash('error', $e->getMessage());
//                return Redirect::to(URL::previous());
//            }
//        }
//        try {
//            $add_user->charge(495);
//            Session::flash('success', 'Charged successfully');
//            return Redirect::to('https://www.lifepartnerbook.com/thank-you-downloadyourbook');
//        } catch (\Stripe\Error\Card $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (\Stripe\Error\RateLimit $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (\Stripe\Error\InvalidRequest $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (\Stripe\Error\Authentication $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (\Stripe\Error\ApiConnection $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (\Stripe\Error\Base $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::to(URL::previous());
//        } catch (Exception $e) {
//            Session::flash('error', $e->getMessage());
//            return Redirect::route("thank-you-downloadyourbook");
//        }
    }

    public function do_die() {
        die();
    }

    public function front_page() {
        return view("front_page");
    }

    public function thankyou() {
        return view("thankyou");

        /* if (Session::has('success')) {
             return view("thankyou");
         } else {
             return view("error");
         }*/
    }

    public function special(){
        return view('special-offer');
    }

    public function contact(){
        return view('contact-form');
    }
    public function privacy(){
        return view('privacy');

    }
    public function terms(){
        return view('terms');
    }



    public function get_api_data($url){

        $headers = array();
        $headers[] = "X-Auth-Token: api-key c74b6576fd766e48b908cd1b3d705ddd";
        $state_ch = curl_init();
        curl_setopt($state_ch, CURLOPT_URL, $url);
        curl_setopt($state_ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($state_ch, CURLOPT_HTTPHEADER, $headers);
        $state_result = curl_exec ($state_ch);
        $state_result = json_decode($state_result);
        $debug = 1;
        return $state_result;
    }
}
