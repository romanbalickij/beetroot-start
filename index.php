<?php
 require 'core/Bootstrap.php';




require $router = Router::load('routes.php')->direct(
    Request::url()
);



// заставити   вивести в ындех  список ёзерыв




