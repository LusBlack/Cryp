<?php
 
  $url= "https://api.coindesk.com/v1/bpi/currentprice.json";
//using guzzle to get json data from above link
//we use guzzle to make requests
   $client = new \GuzzleHttp\Client();


 function getApiData($client, $url) {
    $response = $client->request('GET', $url);
   $data = json_decode($response->getBody());
    return $data;
    //var_dump($data);
    //to inspect the response data to ensure I'm handling it correctly.
 }

function getPrice($data) {
    $price= $data->bpi->USD->rate;

    return $price;
}
$data = getApiData($client, $url);
$price = getPrice($data);
echo $price;