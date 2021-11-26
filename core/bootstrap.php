<?php

use App\Core\App;

App::bind('config', require 'config.php');

$config = App::get('config');

App::bind('database', new QueryBuilder(
  Connector::make(App::get('config')['database'])
));

function redirect($path)
{
  header("Location: {$path}");
}

function view($viewName, $data = [])
{
  extract($data);
  return require "app/views/{$viewName}.view.php";
}
