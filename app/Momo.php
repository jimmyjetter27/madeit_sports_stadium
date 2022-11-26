<?php

namespace App;

use Illuminate\Support\Facades\Http;

class Momo
{
    public static function numberGHFormat($int_number) {
        if (preg_match('/^\+233/', $int_number)) {
            return preg_replace("/^\+233/", "0", $int_number);
        }
        return preg_replace('/^233/', '0', $int_number);
    }


    public static function generate_id()
    {
        return mt_rand(1000, 9999) . mt_rand(1000, 9999) . mt_rand(1000, 9999);
    }

    public static function getHmac($data)
    {
        $client_id = env('EXCHANGE_DEFAULT_CLIENT_ID');
        $secret_key = env('EXCHANGE_DEFAULT_SECRET_KEY');
        $client_key = env('EXCHANGE_DEFAULT_CLIENT_KEY');
        $data = (gettype($data) == 'string') ? json_decode($data, true) : $data;
        $data = array_merge($data, ['client_id' => $client_id]);
        $message = '';
        $i = 0;
        ksort($data);
        foreach ($data as $key => $value) {
            $message .= ($i == 0) ? "{$key}={$value}" : "&{$key}={$value}";
            $i++;
        }
        $hmac_signature = hash_hmac('sha256', $message, $secret_key);
//        return ["Authorization: HMAC {$client_key}:{$hmac_signature}"];
        return "{$client_key}:{$hmac_signature}";
    }


    // Sends a prompt to user's phone
    public static function momoPay(
        $customer_number, $amount, $transaction_id, $network_code, $callback_url
    )
    {
        $data = [
            'customer_number' => self::numberGHFormat($customer_number),
            'amount' => $amount,
            'transaction_id' => $transaction_id,
            'network_code' => $network_code,
            'callback_url' => $callback_url,
        ];

        return self::momoEngine(
            'collect/', $data, 'post', self::getHmac($data));
    }




    public static function momoEngine($endpoint, $payload, $request_type, $authentication_code, $timeout = 0, $connection_timeout = 300)
    {
        if (empty(env('EXCHANGE_URL'))) {
            return ['success' => false, 'message' => 'Exchange URL is not set'];
        }

        $url = env('EXCHANGE_URL') . '/' . $endpoint;
        $proxy_url = env('EXCHANGE_PROXY_URL');
        $payload = array_merge($payload, ['client_id' => env('EXCHANGE_DEFAULT_CLIENT_ID')]);

        $res = Http::withHeaders([
            'Authorization' => 'HMAC ' . $authentication_code,
            'Content-Type' => 'application/json'
        ])
            ->withOptions([
                // add proxy if proxy url is set
                'proxy' => $proxy_url ?: null
            ])
            ->timeout($timeout)
            ->connectTimeout($connection_timeout)
            ->$request_type($url, $payload);
        return json_decode($res, true);
    }
}
