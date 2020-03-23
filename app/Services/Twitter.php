<?php


namespace App\Services;


class Twitter
{
    protected $api_key;
    public function __construct($api_key){  // generate instances of Test also with Auto Resolving,and if Test class will havee a container when it will generate instance in loop
        $this->api_key = $api_key;
    }
}
