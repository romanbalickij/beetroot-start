<?php
namespace App\Models;

Class User{
    public  $id;
    public $name;
    public $username;

    public  function getFullName(){
        return $this->name.' '.$this->username;
    }
    public  function setName($name){
        $this->name = $name;
    }
}


