<?php

$users = $app['database']->selectAll('users');

require '../public/views/users.view.php';