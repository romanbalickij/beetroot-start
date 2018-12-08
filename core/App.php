<?php
namespace Core;

class App
{
    protected static $registry = [];

    public static function bind($key,$value){

        self::$registry[$key] = $value;
    }

    public  static function get($key){

        if(!isset(self::$registry[$key])){
            throw  new \Exception('not registry');
        }
        return   self::$registry[$key];
    }
}