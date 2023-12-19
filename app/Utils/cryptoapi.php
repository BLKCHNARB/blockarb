<?php

use Illuminate\Support\Facades\Http;

if(!defined('cryptoapi_api_key')) {

    define('cryptoapi_api_key', '7f4b2ef14ceb2ea6206679ae7439b50810fc1c3f');

}

if(!defined('api_password')) {

    define('api_password', 'machaladevmachala33');

}

if(!defined('cryptoapi_wallet_id')) {

    define('cryptoapi_wallet_id', '62f9d7c3ceca1e00075bc26a');

}


if(!defined('cryptoapi_new_address_url')) {

    define('cryptoapi_new_address_url', 'https://rest.cryptoapis.io/wallet-as-a-service/wallets/'.cryptoapi_wallet_id.'/bitcoin/testnet/addresses');

}


if(!function_exists('generateCAAddress')) {
    function generateCAAddress() {

        $response = Http::withHeaders([
            'Content-Type' => 'application/json',
            'Authorization' => 'cnbixbs25foksw4s0wcss4ocwsc0osowk88408c0kss0c4gso0kw48swwooso8gg'
        ])->post('https://eu.eth.chaingateway.io/v1/newAddress', [
            'password' => api_password
        ]);
        $resultdecoded = json_decode($response, true);
        // $response = Http::withHeaders([
        //     'Content-Type' => 'application/json',
        //     'X-API-Key' => cryptoapi_api_key,
        // ])->post(cryptoapi_new_address_url, '{
        //     \"data\": {
        //         \"item\": {
        //             \"labl\": \"machala\"
        //         }
        //     }
        // }');

        dd($resultdecoded);
    }
}

// $options = array(
//     'http' => array(
//         'header' => 'Content-type: application/json',
//         'method' => 'POST',
//         'content' => http_build_query()
//     )
//     );

//     $context = stream_context_create($options);
//     $resp = file_get_contents($url, false, $context);

//     var_dump($resp);


?>