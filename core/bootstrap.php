<?php

$app = [];
$app['config'] = require './config.php';
require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connector.php';
require 'core/database/QueryBuilder.php';

$app['database'] = new QueryBuilder(
  Connector::make($app['config']['database'])
);
