<?php

/**
 * Class Person
 *
 * @method setName(string $name)
 * @method setLastName(string $lastName)
 * @method setAbilities(array $abilities)
 */
abstract class Person
{
    /**
     * @return mixed
     */
    abstract public function introduceSelf();

    /**
     * @var array
     */
    protected $_data = [];

    /**
     * Person constructor.
     * @param $data
     */
    public function __construct($data)
    {
        $this->setData($data);

    }

    /**
     * @param $search
     * @return mixed
     */
    public function getData($search)
    {
        foreach ($this->_data as $key => $value) {
            return $this->_data[$search];
        }
    }

    /**
     * @param array $data
     */
    public function setData($data)
    {
        foreach ($data as $key => $value) {
            $this->_data[$key] = $value;
        }
    }
}