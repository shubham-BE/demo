<?php


namespace App;


class Example
{
    protected $fun;
    public function __construct(Test $fun){  // generate instances of Test also with Auto Resolving,and if Test class will havee a container when it will generate instance in loop
            $this->fun = $fun;
    }
}
