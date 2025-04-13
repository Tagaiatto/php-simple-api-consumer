<?php
namespace App\Controllers;
use Core\HttpClient;

class BitcoinController {
    public function index() {
        $price = null;

        if(isset($_GET['fetch'])){
            $response = HttpClient::get('https://api.coindesk.com/v1/bpi/currentprice.json');
            
            $data = json_decode($response, true);
            // print_r($data);
            $price = '$' . $data['Data']['BTC-USD']['PRICE'] ?? 'Unavailable';
        }

        include __DIR__ . '/../Views/bitcoin.php';
    }
}