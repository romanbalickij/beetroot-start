<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 06.12.2018
 * Time: 20:03
 */

class App
{

    protected static $registry = [];

    public static function bind($key,$value){

        self::$registry[$key] = $value;
    }

    public  static function get($key){

        if(!isset(self::$registry[$key])){
            throw  new Exception('not registry');
        }
        return   self::$registry[$key];
    }

}