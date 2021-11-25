<?php

$query = require 'bootstrap.php';
require 'Task.php';


$tasks = $query->selectAll('todos', 'Task');

// dd($results[0]->description);

require 'index.view.php';
