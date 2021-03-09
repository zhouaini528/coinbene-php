<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Coinbene\Api\Account;

use Lin\Coinbene\Request;

class Publics extends Request
{
    /**
     *HTTP GET api/capital/v1/account/currency/list
     * */
    public function getCurrencyList(array $data=[]){
        $this->type='GET';
        $this->path='/api/capital/v1/account/currency/list';
        $this->data=$data;
        return $this->exec();
    }
}
