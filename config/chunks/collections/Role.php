<?php

use App\Schema\ArrayReference;
use App\Schema\String;

return array(
    'schema' => array(
        'name' => String::create('name')->filter('trim'),
        'privilege'=> ArrayReference::create('privilege')->to('Privilege', null, 'uri')
    )
);
