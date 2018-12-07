<?php
/**
 * Created by PhpStorm.
 * User: roman
 * Date: 07.12.2018
 * Time: 21:01
 */

class UsersController
{

    public function Index(){
        $users = App::get('database')->selectAll('users','User');

        require 'views/index.view.php';
    }

}