<?php 

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PaystackService {

    private $secretKey;

    private $http;

    public function __construct()
    {
        $this->secretKey = env('PAYSTACK_SECRET_KEY');
        $this->http = Http::baseUrl('https://api.paystack.co/')->withHeaders([
            'Authorization' => "Bearer $this->secretKey",
        ]);
    } 

    protected function handleResponse($response, $type = false)
    {
        if ($response->successful()) {
            return json_decode($response->body(), $type);
        } else {
            Log::alert($response->body());
            $error = json_decode($response->body(), true);
            throw new \Exception($error['message']);
        }

        return $response->body();
    }

    public function initializePayment ($data = []){

        try {

            $response = $this->http->post('transaction/initialize', $data);
            return $this->handleResponse($response,true);
        } catch (\Exception $e) {
            Log::alert($e);
            throw $e;
        }
       
    }
}