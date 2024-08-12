<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class CurrencyController extends Controller
{
    public function convertToMAD($amountUSD)
    {
        $apiKey = env('API_KEY'); // Access the API key
        $client = new Client();

        try {
            // Example API request to get the exchange rate
            $response = $client->request('GET', 'https://api.example.com/convert', [
                'query' => [
                    'from' => 'USD',
                    'to' => 'MAD',
                    'amount' => $amountUSD,
                    'apikey' => $apiKey, // Include the API key in the request
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            return $data['result']; // Adjust based on the actual response structure
        } catch (\Exception $e) {
            return 0; // Handle error appropriately
        }
    }

    public function convertToUSD($amountMAD)
    {
        $apiKey = env('API_KEY'); // Access the API key
        $client = new Client();

        try {
            // Example API request to get the exchange rate
            $response = $client->request('GET', 'https://api.example.com/convert', [
                'query' => [
                    'from' => 'MAD',
                    'to' => 'USD',
                    'amount' => $amountMAD,
                    'apikey' => $apiKey, // Include the API key in the request
                ],
            ]);

            $data = json_decode($response->getBody(), true);
            return $data['result']; // Adjust based on the actual response structure
        } catch (\Exception $e) {
            return 0; // Handle error appropriately
        }
    }
}