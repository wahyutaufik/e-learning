<?php

namespace App\Observer;

class Status
{
    public function saving($model)
    {
        $model['$status'] = 1;
    }
}
