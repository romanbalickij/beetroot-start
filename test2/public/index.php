<?php


  echo $query = $_SERVER['QUERY_STRING'];


require '../vender/core/Router.php';
require '../vender/libs/functions.php';

Router::add('posts/add',['controller'=>'posts','action'=>'add']);
Router::add('posts/',['controller'=>'posts','action'=>'index']);
Router::add('',['controller'=>'main','action'=>'index']);
dd(Router::getRoutes());


if(Router::matchRoute($query)){
    dd(Router::getRoute());
}else{
    echo '404';
}