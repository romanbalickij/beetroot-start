<?php
require 'vendor/autoload.php';
require 'core/Bootstrap.php';



 Router::load('routes.php')->direct(
    Request::url(),
    Request::method()
);



// заставити   вивести в ындех  список ёзерыв




