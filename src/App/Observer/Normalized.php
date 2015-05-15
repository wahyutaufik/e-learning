<?php

namespace App\Observer;

class Normalized
{
    public function saving($model)
    {
        $model['normalized_username'] = str_replace('.', '', $model['username']);
    }
}
