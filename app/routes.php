<?php

/** @var $router Router */

$router->get('','UsersController@index');
$router->get('about','PagesController@about');
$router->get('contact','PagesController@contact');

$router->get('users','UsersController@index');
$router->post('users','UsersController@store');



//$router->get('ask-name','controllers/ask-name.view.php');
//
//$router->post('save-name','controllers/save-name.php');