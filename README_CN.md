### It is recommended that you read the official document first

Coinbene 文档 [https://github.com/Coinbene](https://github.com/Coinbene)

所有接口方法的初始化都与coinbene提供的方法相同。更多细节 [src/api](https://github.com/zhouaini528/coinbene-php/tree/master/src/Api)

大部分的接口已经完成，使用者可以根据我的设计方案继续扩展，欢迎与我一起迭代它。

[English Document](https://github.com/zhouaini528/coinbene-php/blob/master/README_CN.md)

QQ交流群：668421169

### 其他交易所API

[Exchanges](https://github.com/zhouaini528/exchanges-php) 它包含以下所有交易所，强烈推荐使用该SDK。

[Bitmex](https://github.com/zhouaini528/bitmex-php) 支持[Websocket](https://github.com/zhouaini528/bitmex-php/blob/master/README_CN.md#Websocket)

[Okex](https://github.com/zhouaini528/okex-php) 支持[Websocket](https://github.com/zhouaini528/okex-php/blob/master/README_CN.md#Websocket)

[Huobi](https://github.com/zhouaini528/huobi-php) 支持[Websocket](https://github.com/zhouaini528/huobi-php/blob/master/README_CN.md#Websocket)

[Binance](https://github.com/zhouaini528/binance-php) 支持[Websocket](https://github.com/zhouaini528/binance-php/blob/master/README_CN.md#Websocket)

[Kucoin](https://github.com/zhouaini528/kucoin-php)

[Mxc](https://github.com/zhouaini528/mxc-php)

[Coinbase](https://github.com/zhouaini528/coinbase-php)

[ZB](https://github.com/zhouaini528/zb-php)

[Bitfinex](https://github.com/zhouaini528/zb-php)

[Bittrex](https://github.com/zhouaini528/bittrex-php)

[Kraken](https://github.com/zhouaini528/kraken-php)

[Gate](https://github.com/zhouaini528/gate-php)   

[Bigone](https://github.com/zhouaini528/bigone-php)   

[Crex24](https://github.com/zhouaini528/crex24-php)   

[Bybit](https://github.com/zhouaini528/bybit-php)  

[Coinbene](https://github.com/zhouaini528/coinbene-php)   

[Bitget](https://github.com/zhouaini528/bitget-php)   

[Poloniex](https://github.com/zhouaini528/poloniex-php)

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

**如果没有找到你想要的交易所SDK你可以告诉我，我来加入它们。**

#### Installation
```
composer require linwj/coinbene
```

Support for more request Settings
```php
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
```

### Coinbene Spot API

Publics API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/spot_v3/publics.php)
```php
$coinbene=new CoinbeneSpot();

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
```

Private API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/spot_v3/privates.php)
```php
$coinbene=new CoinbeneSpot($key,$secret);

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
```

### Coinbene Swap USDT API
Publics API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/swap_usdt_v3/publics.php)
```php
$coinbene=new CoinbeneSwapUsdt();
try {
    $result=$coinbene->publics()->getDepth([
        'instrument_id'=>'BTC'
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
        'instrument_id'=>'BTC'
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}

try {
    $result=$coinbene->publics()->getCandles([
        'instrument_id'=>'BTC',
        'resolution'=>5,
        //'start_time'=>'',
        //'end_time'=>''
    ]);
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Private API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/swap_usdt_v3/privates.php)
```php
$coinbene=new CoinbeneSwapUsdt($key,$secret);
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
```


### Coinbene Swap BTC API
Publics API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/swap_btc_v3/publics.php)
```php
```

Private API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/swap_btc_v3/privates.php)
```php
```

### Coinbene Account API
Publics API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/account/publics.php)
```php
$coinbene=new CoinbeneAccount();

try {
    $result=$coinbene->publics()->getCurrencyList();
    print_r($result);
}catch (\Exception $e){
    print_r(json_decode($e->getMessage(),true));
}
```

Private API [More](https://github.com/zhouaini528/coinbene-php/blob/master/tests/account/privates.php)
```php
$coinbene=new CoinbeneAccount($key,$secret);
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
```


[More Test](https://github.com/zhouaini528/coinbene-php/tree/master/tests)

[More Api](https://github.com/zhouaini528/coinbene-php/tree/master/src/Api)
