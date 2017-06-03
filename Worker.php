<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 12:25
 */
abstract class Worker extends Person
{
    protected $position = "";
    protected $abilities = [];

    /**
     * Worker constructor.
     * @param $data
     * @param $abilities
     */
    public function __construct($data,$abilities)
    {
        $this->setAbilities($abilities);

        parent::__construct($data);
    }

    /**
     * @param $abilities
     * @return mixed
     */
    public function setAbilities($abilities)
    {
        foreach ($abilities as $ability) {
            if (!array_key_exists($ability, $this->abilities))
                array_push($this->abilities, $ability);
        }
    }

    public function showAbilities()
    {

        echo "Oferuję szeroki zakres umiejętności tj. przede wszystkim: </br></br>";

        foreach ($this->abilities as $ability) {
            echo "* " . $ability . "<br/>";
        }
    }

}