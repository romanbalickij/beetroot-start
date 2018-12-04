<?php
$name = $_POST['name'];
$result  = $app['database']->insert('users',[
    'name'=> $name,
    'username' => 'test'
    ]
);

if($result){
    header("Location:/");
}else{
    echo 'Qyery exception';
}

