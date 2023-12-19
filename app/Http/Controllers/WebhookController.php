<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class WebhookController extends Controller
{
    public function webhook(Request $request)
    {
        Storage::put('file.txt', $request);

        $secret_local = blockonomics_callback_secret;

        $txid = $request->txid;
        $value = $request->value;
        $status = $request->status;
        $addr = $request->addr;
        $secret = $request->secret;

        // Check all are set
        if (empty($txid) || empty($value) || empty($addr) || empty($secret)) {
            exit();
        }

        if ($secret != $secret_local) {
            exit();
        }

        // Get Order price
        $price = getOrderPrice($addr);
        // Convert price to satoshi for check
        $price = USDtoBTC($price);
        $satoshi_price = $price * 100000000;
        $shift_price = $satoshi_price - 92000;

        // Expired
        if ($status < 0) {
            exit();
        }

        // converting satoshis to bitcoin

        if ($value >= round($shift_price)) {
            updateOrder($addr, $value);
            // Update invoice status
            // updateInvoiceStatus($code, $status);
            // if($status == 2){
            // Correct amount paid and fully confirmed
            // Do whatever you want here once payment is correct
            // $invoice = getInvoice($addr);
            // updateOrder($invoice, $value);
            // createOrder($invoice, getInvoiceIp($addr));
            // }
        } else {
            // Buyer hasnt paid enough
            // updateInvoiceStatus($code, -2);
            // $amount = $satoshi_price - $value;
            // $invoice = getInvoice($addr);
            // updateInvoiceIncomplete($code, $amount);
            // updateOrder($invoice, $value);



            //   if($status == -1){
            //     updateInvoiceIncomplete($code, $amount);
            // }
        }
        //    event(new NewDeposit($user, $this->amount));
    }
}
