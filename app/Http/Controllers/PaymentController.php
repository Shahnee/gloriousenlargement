<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller {

    function subscription() {
        $data['title'] = 'Payment';
        return view('details', $data);
    }

    function addSubscription(Request $request) {
        $add_user = User::where('email', $request->email)->first();
        if (!$add_user) {
            $add_user = new User;
            $add_user->name = $request->full_name;
            $add_user->post_code = $request->post_code;
            $add_user->country = $request->country;
            $add_user->email = $request->email;
            $add_user->save();
        }
        if (!$add_user->subscribed('monthly_plan')) {
            $stripeToken = $request['stripeToken'];
            \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
            try {
                $add_user->newSubscription('monthly_plan', 'monthly_plan')->create($stripeToken);
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
        }
        try {
            $add_user->charge(700);
            Session::flash('success', 'Charged successfully');
            return Redirect::to(URL::previous());
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
    }

}
