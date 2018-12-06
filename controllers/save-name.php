<?php
$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
$result  = $app['database']->insert('users',[
    'name'=> $name,
    'lastname' => $username

    ]
);

if($result){
    header("Location:/");
}else{
    echo 'Qyery exception';
}



