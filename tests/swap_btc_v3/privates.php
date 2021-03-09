<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbene\CoinbeneSwapBtc;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$coinbene=new CoinbeneSwapBtc($key,$secret);

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

//Account
try {
    $result=$coinbene->privates()->getAccount();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getPositionList([
        'instrument_id'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->postOrder([
        'instrument_id'=>'BTC',
        'direction'=>'openLong',
        'leverage'=>'20',
        'order_type'=>'limit',
        'order_price'=>'10000',
        'quantity'=>'10',
        //'margin_mode'=>'crossed',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->postCancelOrder([
        'order_id'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getOpenOrderList([
        'instrument_id'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getOrderInfo([
        'order_id'=>'xxxxxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getClosedOrderList([
        'instrument_id'=>'BTC',
        //'begin_time'=>''
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getFills([
        'instrument_id'=>'BTC',
        'order_id'=>'xxxxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$coinbene->privates()->getHistoricalFundingRate([
        'instrument_id'=>'BTC',
        'page_num'=>'1',
        'page_size'=>'10',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


