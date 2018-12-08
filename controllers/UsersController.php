<?php
namespace App\Controller;
use Core\App;

class UsersController
{
    public function index(){
        $users = App::get('database')->selectAll('users','User');
        view('index',[
            'users'=>$users
        ]);
    }

    public  function  store()
    {
        $result = App::get('database')->insert('users',[
            'name' => $_POST['name'],
            'lastname' => $_POST['username']
        ]);

        redirect('/');
    }
}
