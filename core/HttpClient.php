<?php
namespace Core;

class HttpClient {
    public static function get(string $url): string|false {
        $apikey = getenv('API_KEY');
        $url = 'https://data-api.coindesk.com/spot/v1/latest/tick?market=coinbase&instruments=BTC-USD&apply_mapping=true';

        $ch = curl_init($url);
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => [
                'Content-Type: application/json; charset=UTF-8',
                'authorization: Apikey ' . $apikey,
            ],
        ]);

        $response = curl_exec($ch);

        if ($response === false) {
            echo 'cURL Error: ' . curl_error($ch);
        }

        curl_close($ch);
        return $response;
    }
}
