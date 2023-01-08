<?php

namespace App\Http;

use Illuminate\Support\Facades\Http;

class HttpRequest
{
    private $apiKey;
    private $url;

    public function __construct($apiKey, $url){
        $this->apiKey = $apiKey;
        $this->url = $url;
    }

    public function getHeros(){
        $response = Http::get($this->url);
        return $response->object();
    }
}