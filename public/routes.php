<?php

$router->get('', '../src/Controller/index.php');
$router->get('users', '../src/Controller/users.php');

$router->post('insert', '../src/Controller/insert.php');