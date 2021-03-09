<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbene\Api\Account;

use Lin\Coinbene\Request;

class Privates extends Request
{
    /**
     *HTTP POST /api/capital/v1/withdraw/apply
     * */
    public function postWithdrawApply(array $data=[]){
        $this->type='POST';
        $this->path='/api/capital/v1/withdraw/apply';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/capital/v1/deposit/address/list
     * */
    public function getDepositAddressList(array $data=[]){
        $this->type='GET';
        $this->path='/api/capital/v1/deposit/address/list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP POST /api/capital/v1/asset/transfer
     * */
    public function postAssetTransfer(array $data=[]){
        $this->type='POST';
        $this->path='/api/capital/v1/asset/transfer';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/capital/v1/asset/transfer/history/list
     * */
    public function getAssetTransferHistoryList(array $data=[]){
        $this->type='GET';
        $this->path='/api/capital/v1/asset/transfer/history/list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/capital/v1/withdraw/history/single
     * */
    public function getWithdrawHistorySingle(array $data=[]){
        $this->type='GET';
        $this->path='/api/capital/v1/withdraw/history/single';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/capital/v1/withdraw/history/list
     * */
    public function getWithdrawHistoryList(array $data=[]){
        $this->type='GET';
        $this->path='/api/capital/v1/withdraw/history/list';
        $this->data=$data;
        return $this->exec();
    }

    /**
     *HTTP GET /api/capital/v1/deposit/history/list
     * */
    public function postDepositHistoryList(array $data=[]){
        $this->type='POST';
        $this->path='/api/capital/v1/deposit/history/list';
        $this->data=$data;
        return $this->exec();
    }
}
