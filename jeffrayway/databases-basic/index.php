<?php

require 'functions.php';

require 'tasks.php';

$pdo = connectToDB();

$tasks = fetchAllTasks($pdo);


require 'index.view.php';
