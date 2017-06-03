<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 14:26
 */
abstract class ObjectCreator implements Creator
{
   abstract public function create($type, $data);

}