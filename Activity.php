<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 12:26
 */
abstract class Activity
{
    private $name;
    private $status;

    public function __construct()
    {
        $date = new DateTime("now");
        $current = $date->format("d.m.y /r/.");
        Util::log($current . ": Rozpoczela sie nowa aktywności: " . $this->name);
    }

}