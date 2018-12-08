<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 06.12.2018
 * Time: 20:50
 */
namespace App\Controller;
class PagesController
{
    public  function contact(){
        view('contact');
    }
    public  function about(){
        view('about');
    }
}