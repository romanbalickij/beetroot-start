<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 06.12.2018
 * Time: 20:50
 */

class PagesController
{

    public  function contact(){
        require 'views/contact.view.php';
    }
    public  function about(){
        require 'views/about.view.php';
    }

}