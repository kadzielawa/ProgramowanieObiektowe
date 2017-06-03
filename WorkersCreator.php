<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 14:20
 */
class WorkersCreator extends ObjectCreator
{
    protected $dir = "Worker";

    public function create($type, $data)
    {
        require_once($this->dir . DS . $type . ".php");
        $worker = new $type($data,$data["abilities"]);
        return $worker;

    }
}