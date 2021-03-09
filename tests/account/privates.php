<?php
/**
 * @author lin <465382251@qq.com>
 * */

use Lin\Coinbene\CoinbeneAccount;

require __DIR__ .'../../../vendor/autoload.php';

include 'key_secret.php';

$coinbene=new CoinbeneAccount($key,$secret);

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

try {
    $result=$coinbene->privates()->postWithdrawApply([
        'asset'=>'BTC',
        'amount'=>'1',
        'address'=>'xxxxxxxxxxxx',
        //'addressTag'=>'',
        //'chain'=>'',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}



try {
    $result=$coinbene->privates()->getDepositAddressList([
        'asset'=>'BTC',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->privates()->getAssetTransferHistoryList([
        'asset'=>'BTC',
        'from'=>'spot',
        //'to'=>'spot',
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
