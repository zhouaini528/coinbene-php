<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Bigone;

use Lin\Bigone\Api\Spot\Privates;
use Lin\Bigone\Api\Spot\Publics;


class BigoneSpot
{
    protected $key;
    protected $secret;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://big.one'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'host'=>$this->host,
            'options'=>$this->options,
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function privates(){
        return new Privates($this->init());
    }

    /**
     *
     * */
    function publics(){
        return new Publics($this->init());
    }
}
