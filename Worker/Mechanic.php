<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 13:07
 */
class Mechanic extends Worker
{

    public function __construct($data, $abilities)
    {
        $this->abilities = ["diagnostyka"];
        $this->position = "Mechanik";
        parent::__construct($data, $abilities);

    }

    public function introduceSelf()
    {
        $txt = "Hej, jestem mechanikiem, nazywam się: " . $this->getData("name") . " ". $this->getData("lastname") . ",zarabiam " . $this->getData("salary");
        $txt .= $this->showAbilities();

        return $txt;

    }


}