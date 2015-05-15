<?php

namespace App\Schema;

use Norm\Type\Secret as Secret;
use App\Schema\Field;

class Password extends Field
{
    public function toJSON($value)
    {
        return '';
    }

    public function formatPlain($value, $entry = null)
    {
        return '';
    }

    public function formatInput($value, $entry = null)
    {
        return '
            <div class="col-sm-9">
                <input class="span-6" type="password" name="'.$this['name'].
                '" value="" placeholder="Password" autocomplete="off" /><input class="span-6" type="password" name="'.
                $this['name'].'_confirmation" value="" placeholder="Password confirmation" autocomplete="off" />
            </div>
        ';
    }

    public function formatReadonly($value, $entry = null)
    {
        return '
            <div class="col-sm-9">
                <input class="span-6" type="text" value="*hidden*" readonly/>
            </div>
        ';
    }

    public function prepare($value)
    {
        if ($value instanceof Secret) {
            return $value;
        } elseif (empty($value)) {
            return null;
        } else {
            return new Secret($value);
        }
    }

    // public function cell($value, $entry = null)
    // {
    //     if ($this->has('cellFormat')) {
    //         return parent::cell($value, $entry);
    //     }
    //     return '*hidden*';
    // }
}
