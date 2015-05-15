<?php

namespace App\Schema;

use App\Schema\Field;

class String extends Field
{
    public function prepare($value)
    {
        return utf8_encode(filter_var($value, FILTER_SANITIZE_STRING));
    }
}
