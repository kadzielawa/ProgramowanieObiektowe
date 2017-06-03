<?php

/**
 * Created by PhpStorm.
 * User: kuba
 * Date: 12.11.16
 * Time: 13:27
 */
class Util
{
    /**
     * @param $message
     * @param string $file
     */
    public static function log($message,$file = "system.log")
    {
        $logFile = fopen($file,"a");
        fwrite($logFile,$message);
    }
}