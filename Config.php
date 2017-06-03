<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 13.11.16
 * Time: 09:58
 */
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

function __autoload($className)
{
    if (file_exists($className . '.php')) {
        require_once $className . '.php';
        return true;
    }
    return false;
}
