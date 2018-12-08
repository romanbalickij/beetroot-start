<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 07.12.2018
 * Time: 21:01
 */

class UsersController
{
    public function index(){
        $users = App::get('database')->selectAll('users','User');


        view('index',[
            'users'=>$users
        ]);

       // require 'views/index.view.php';
    }
}