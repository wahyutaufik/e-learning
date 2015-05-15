<?php

use App\Schema\String;

return array(
    'schema' => array(
        'uri' => String::create('uri')->filter('trim|required')
    )
);
