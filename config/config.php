<?php

return [

    'database' => [

        'dbname' => 'test',
        'dbusername' => 'root',
        'dbpassword' => '',
        'dbconnection_str' => 'mysql:hostname=127.0.0.1',
        'dboptions' => [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ]

    ]

];