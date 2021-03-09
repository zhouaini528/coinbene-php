<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbene\Api\SwapV3;

use Lin\Coinbene\Request;

class Publics extends Request
{
    protected $instrument;

    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->instrument=$data['instrument'] ?? 'usdt';// usdt btc
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/depth?instrument_id=BTC&size=5
     * */
    public function getDepth(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/depth';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/ticker_list
     * */
    public function getTickerList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/ticker_list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/ticker_one?instrument_id=BTC
     * */
    public function getTickerOne(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/ticker_one';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/candles?instrument_id=BTC&resolution=1&start_time=&end_time=
     * */
    public function getCandles(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/candles';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/trade_list?instrument_id=BTC&limit=5
     * */
    public function getTradeList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/trade_list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/list
     * */
    public function getList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/instruments/funding_rate?instrument_id=ETH
     * */
    public function getFundingRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/instruments/funding_rate';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *
     * */
    /*public function get(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'';
        $this->data=$data;
        return $this->exec();
    }*/
}
