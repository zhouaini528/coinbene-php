<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbene\CoinbeneSpot;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$coinbene=new CoinbeneSpot($key,$secret);

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
    $result=$coinbene->privates()->getAccountList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getAccountOne(['asset'=>'USDT']);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

//Order
try {
    $result=$coinbene->privates()->postOrder([
        'instrument_id'=>'BTC/USDT',
        'direction'=>'1',
        'price'=>'10000',
        'quantity'=>'0.1',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->postBatchOrder([
        [
            'instrument_id'=>'BTC/USDT',
            'direction'=>'1',
            'price'=>'10000',
            'quantity'=>'0.1',
        ],
        [
            'instrument_id'=>'BTC/USDT',
            'direction'=>'1',
            'price'=>'20000',
            'quantity'=>'0.2',
        ]
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getOpenOrders([
        'instrument_id'=>'BTC/USDT',
        //'latestOrderId'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getClosedOrders([
        'instrument_id'=>'BTC/USDT',
        //'latestOrderId'=>'xxxxxxxxxxx'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getOrderInfo([
        'order_id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}


try {
    $result=$coinbene->privates()->postCancelOrder([
        'order_id'=>'xxxxxxxxxxx',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->postBatchCancelOrder([
        'orderIds'=>['xxxxxx','xxxxxxx'],
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

?>
