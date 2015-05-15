<?php

return array(
    'norm.datasources' => array(
        'mysql' => array(
			'driver'   => '\\Norm\\Connection\\PDOConnection',
			'prefix'   => 'mysql',
			'dbname'   => 'e-learning',
			'host'     => 'localhost',
			'username' => 'root',
			'password' => 'password',
        ),
    )
);
