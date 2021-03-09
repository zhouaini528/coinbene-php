<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbene\CoinbeneSpot;

require __DIR__ .'../../../vendor/autoload.php';

$coinbene=new CoinbeneSpot();

//You can set special needs
$coinbene->setOptions([
    //Set the request timeout to 60 seconds by default
    'timeout'=>10,

    //If you are developing locally and need an agent, you can set this
    //'proxy'=>true,
    //More flexible Settings
    /* 'proxy'=>[
     'http'  => 'http://127.0.0.1:12333',
     'https' => 'http://127.0.0.1:12333',
     'no'    =>  ['.cn']
     ], */
    //Close the certificate
    //'verify'=>false,
]);

//Instruments
try {
    $result=$coinbene->publics()->getTradePairList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$coinbene->publics()->getTradePairOne([
        'instrument_id'=>'BTC/USDT'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->publics()->getDepth([
        'instrument_id'=>'BTC/USDT',
        'depth'=>5
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$coinbene->publics()->getTickerList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->publics()->getTickerOne([
        'instrument_id'=>'BTC/USDT',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
