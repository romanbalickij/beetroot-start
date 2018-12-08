<?php
class Request{
    public  static function url(){
        return trim($_SERVER['REQUEST_URI'],'/');
    }
    public   static  function  method(){
        return $_SERVER['REQUEST_METHOD'];
    }

}