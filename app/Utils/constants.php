<?php

// namespace App\Utilities;

use App\Event\NewDeposit;
use App\Models\Investment;
use App\Models\Deposit;
use App\Models\Invoice;
use App\Models\Order;
use App\Models\Reward;
use App\Models\Topup;
use App\Notifications\ReferralDeposit;
use Illuminate\Support\Facades\Http;

if(!defined('blockonomics_callback_secret')) {

    define("blockonomics_callback_secret", "locks101" );

}

if(!defined('blockonomics_base_url')) {

    define('blockonomics_base_url', 'https://www.blockonomics.co/api');

}

if(!defined('blockonomics_new_address_url')) {

    define('blockonomics_new_address_url', blockonomics_base_url.'/new_address');

}

if (!defined('blockonomics_price_url')) {

    define('blockonomics_price_url', blockonomics_base_url.'/price?currency=');

}

if(!defined('blockonomics_api_key')) {

    define('blockonomics_api_key', 'nhGsx8nkUnRPTp9y60CfKPJv7aZ6CvS9BII3NizcGYg');

}

/*
This page defines a number of functions to make the code on other pages more readable
*/

// include_once "config.php";

if(!function_exists('generateRandomString')) {
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}


if(!function_exists('generateAddress')) {

    function generateAddress(){
        // global blockonomics_api_key;
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . blockonomics_api_key,
        ])->post(blockonomics_new_address_url);

        if (isset($response->json()["address"])) {

            $address = $response->json()["address"];

        } else {
            $address = $response->json();
        }

        return $address;


        // global $url;
        // $options = array(
        //     'http' => array(
        //         'header'  => 'Authorization: Bearer '.blockonomics_api_key,
        //         'method'  => 'POST',
        //         'content' => '',
        //         'ignore_errors' => true
        //     )
        // );

        // $context = stream_context_create($options);
        // $contents = file_get_contents(blockonomics_new_address_url, false, $context);
        // $object = json_decode($contents);

        // // Check if address was generated successfully
        // if (isset($object->address)) {
        //   $address = $object->address;
        // } else {
        //   // Show any possible errors
        //   $address = $http_response_header[0]."\n".$contents;
        // }
        // return $address;
    }

}


if(!function_exists('formatNumber')) {

    function formatNumber($value, $decimals){
        return rtrim(rtrim(number_format($value, $decimals),'0'),'.');
    }

}

if(!function_exists('getProduct')) {

    function getProduct($id){
        global $conn;
        $sql = "SELECT * FROM `products` WHERE `id`='$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            return $row['name'];
        }
    }

}


if(!function_exists('getPrice')) {

    function getPrice($id){
        global $conn;
        $sql = "SELECT * FROM `products` WHERE `id`='$id'";
        $result = mysqli_query($conn, $sql);
        while($row = mysqli_fetch_assoc($result)){
            return $row['price'];
        }
    }

}

if(!function_exists('getAddress')) {

    function getAddress($code){
        global $conn;
        $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
        $result = mysqli_query($conn, $sql);
        $address = "Error, try again";
        while($row = mysqli_fetch_assoc($result)){
            $address = $row['address'];
        }
        return $address;
    }

}



if(!function_exists('getStatus')) {

    function getStatus($code){
        global $conn;
        $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
        $result = mysqli_query($conn, $sql);
        $status = "Error, try again";
        while($row = mysqli_fetch_assoc($result)){
            $status = $row['status'];
        }
        return $status;
    }

}

if(!function_exists('getInvoiceProduct')) {

    function getInvoiceProduct($code){
        global $conn;
        $sql = "SELECT * FROM `invoices` WHERE `code`='$code'";
        $result = mysqli_query($conn, $sql);
        $product = "Error, try again";
        while($row = mysqli_fetch_assoc($result)){
            $product = $row['product'];
        }
        return $product;
    }

}

if(!function_exists('getOrderPrice')) {

    function getOrderPrice($address){
        $order = Order::where("address", $address)->first();
        $amount = $order->amount;
        return $amount;
    }
}

// if(!function_exists('getInvoicePrice')) {

//     function getInvoicePrice($code){
//         $invoice = Invoice::where("code", $code)->first();
//         $amount = $invoice->amount;
//         return $amount;
//     }

// }

// if(!function_exists('getCode')) {

//     function getCode($address){

//         $invoice = Invoice::where("address", $address)->first();
//         $code = $invoice->code;
//         return $code;
//     }

// }


if(!function_exists('getDescription')) {

    function getDescription($product){
        global $conn;
        $sql = "SELECT * FROM `products` WHERE `id`='$product'";
        $result = mysqli_query($conn, $sql);
        $description = "Error, try again";
        while($row = mysqli_fetch_assoc($result)){
            $description = $row['description'];
        }
        return $description;
    }

}

// if(!function_exists('updateInvoiceStatus')) {

//     function updateInvoiceStatus($code, $status){

//         $invoice = Invoice::where("code", $code)->first();
//         $invoice->status = $status;
//         $invoice->save();
//     }

// }

// if(!function_exists('updateInvoiceIncomplete')) {

//     function updateInvoiceIncomplete($code, $amount) {

//         $invoice = Invoice::where("code", $code)->first();
//         $invoice->status = -1;
//         $amount = $amount/100000000;
//         $amount = BTCtoUSD($amount);
//         $invoice->unsettled = round($amount,2);
//         $invoice->save();

//         // partial payment email

//     }

// }

if(!function_exists('getBTCPrice')) {

    function getBTCPrice($currency){

        $response = Http::get(blockonomics_price_url.$currency);
        $price = $response->json()["price"];

        return $price;
    }

}

if(!function_exists('BTCtoUSD')) {

    function BTCtoUSD($amount){
        $price = getBTCPrice("USD");
        return $amount * $price;
    }

}

if(!function_exists('USDtoBTC')) {

    function USDtoBTC($amount){
        $price = getBTCPrice("USD");
        return $amount/$price;
    }

}

// if(!function_exists('getInvoice')) {

//     function getInvoice($addr){

//         $invoiced = Invoice::where("address", $addr)->first();
//         $code = $invoiced->code;
//         return $code;
//     }

// }

if(!function_exists('getIp')) {

    function getIp(){
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //ip pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }

}

if(!function_exists('createOrder')) {

    function createOrder($invoice, $ip){
        global $conn;

        $sql = "INSERT INTO `orders` (`invoice`, `ip`) VALUES ('$invoice', '$ip')";
        mysqli_query($conn, $sql);
    }

}

if(!function_exists('updateOrder')) {

    function updateOrder($id){
        $order = Order::findorFail($id);
        $order->status = 1;
        $order->save();
        
        $user = $order->user;

        $referrer = $user->referrer;

        $investment = $user->investments->where("token_id", $order->token_id)->first();
        if($investment) {
            $investment->amount += $order->amount;
            $investment->save();

            Topup::create([
                'user_id' => $user->id,
                'token_id' => $order->token_id,
                'amount' => $order->amount,
            ]);
        } else {
            $investment = Investment::create([
                'user_id' => $user->id,
                'token_id' => $order->token_id,
                'plan_id' => $order->plan_id,
                'amount' => $order->amount,
                'percentage' => $order->percentage,
                'duration' => $order->duration,
            ]);
        }

        Deposit::create([
            'user_id' => $user->id,
            'amount' => $order->amount,
            'token' => $order->token->name
        ]);

        if($referrer) {
            Reward::create([
                'user_id' => $order->user_id,
                'token_id' => $order->token_id,
                'amount' => $order->amount ,
            ]);

            $referrer->notify(new ReferralDeposit($order));
        }

        // $referrer ? $referrer->notify(new ReferralDeposit($order)) : "";
        event(new NewDeposit($order));
    }
}

// if(!function_exists('updateOrder')) {

//     function updateOrder($invoice, $amount){

//         $invoice = Invoice::where("code", $invoice)->first();
//         $user_id = $invoice->user->id;
//         $dollar_amount = $invoice->amount;

//         $user = User::findorFail($user_id);
//         $user->referrer_reward += ($dollar_amount * env('REFERRAL_PERCENTAGE') * 1000);
//         $user->plans += 1;
//         $user->gross_investments += $dollar_amount;
//         $user->save();

//         $referrer = $user->referrer;
//         // $referrer ? $referrer->notify(new ReferralDeposit($amount1)) : "";

//         $deposit = new Deposit;

//         $deposit->user_id = $user->id;
//         $deposit->plan = $invoice->product;
//         $deposit->deposit_amount = $invoice->entered_amount;
//         $deposit->processed = 1;
//         $deposit->percentage = $invoice->percentage;

//         $deposit->save();

//         event(new NewDeposit($user, $amount));
//         // $user->notify(new NewUserDeposit($user));
//     }

// }

if(!function_exists('getInvoiceIp')) {

    function getInvoiceIp($addr){
        global $conn;
        $sql = "SELECT * FROM `invoices` WHERE `address`='$addr'";
        $result = mysqli_query($conn, $sql);
        $ip = "Error, try again";
        while($row = mysqli_fetch_assoc($result)){
            $ip = $row['ip'];
        }
        return $ip;
    }

}

?>
