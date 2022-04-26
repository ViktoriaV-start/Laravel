<?php

abstract class Check implements INum
{

    public $obj = null;
    public $status = false;

    public function __construct(INum $obj) {
        $this->obj = $obj;
    }
}