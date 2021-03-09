<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbene\Api\SwapV3;

use Lin\Coinbene\Request;

class Privates extends Request
{
    protected $instrument;

    public function __construct(array $data)
    {
        parent::__construct($data);
        $this->instrument=$data['instrument'] ?? 'usdt';// usdt btc
    }

    /**
     *HTTP GET /api/v3/usdt/account
     * */
    public function getAccount(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/account';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/position_list?instrument_id=BTC
     * */
    public function getPositionList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/position_list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP POST /api/v3/usdt/order
     * */
    public function postOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/'.$this->instrument.'/order';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP POST /api/v3/usdt/cancel_order
     * */
    public function postCancelOrder(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/'.$this->instrument.'/cancel_order';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/open_order_list?instrument_id=BTC
     * */
    public function getOpenOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/open_order_list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/order_info?order_id=580721369818955776
     * */
    public function getOrderInfo(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/order_info';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/v3/usdt/closed_order_list?instrument_id=BTC&begin_time=
     * */
    public function getClosedOrderList(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/closed_order_list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *    HTTP GET /api/v3/usdt/fills?instrument_id=BTC&order_id=784068575416762368
     * */
    public function getFills(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/fills';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *    HTTP GET /api/v3/usdt/historical_funding_rate?instrument_id=ETH&page_num=1&page_size=10
     * */
    public function getHistoricalFundingRate(array $data=[]){
        $this->type='GET';
        $this->path='/api/v3/'.$this->instrument.'/historical_funding_rate';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *
     * */
    /*public function post(array $data=[]){
        $this->type='POST';
        $this->path='/api/v3/'.$this->instrument.'';
        $this->data=$data;
        return $this->exec();
    }*/
}
