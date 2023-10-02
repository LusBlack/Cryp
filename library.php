<?php
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
$client = new CoinGeckoClient();


function getData($client, $result){
    $data= $client->coins()->getList();
    //$result = $client->coins()->getMarkets('usd');
   $coins = $data;
   $symbolArray = [];
   $price = $client->simple()->getPrice($id, 'usd');
   foreach ($data as $d =>$value) {
    $symbol = $value['symbol'];
    if($symbol == "BTC" || $symbol == "btc"){
    $id = $value['id'];
     //$price = $client->simple()->getPrice($id, 'usd');
    //array_push($symbolArray, $symbol);

   }
   }
  echo ($price['bitcoin']['usd']);
   //var_dump($price);
}
getData($client);