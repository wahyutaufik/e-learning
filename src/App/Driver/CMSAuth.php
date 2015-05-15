<?php

namespace App\Driver;

use ROH\BonoAuth\Driver\NormAuth;

class CMSAuth extends NormAuth
{
    public function authenticate(array $options = array())
    {
        $parent = parent::authenticate($options);
        return $parent;
    }

    public function redirectBack()
    {
        \App::getInstance()->redirect(\Bono\Helper\URL::site('/'));
    }
}
