<?php

require 'functions.php';

$app = [];
$app['config'] = require 'config.php';

require 'Router.php';
require 'Request.php';
require 'database/connections.php';
require 'database/QueryBuilder.php';

$app['database'] = new QueryBuilder(Connection::make($app['config']['database']));

