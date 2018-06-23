<?php

$users = $app['database']->selectAll('users');

require '../public/views/index.view.php';