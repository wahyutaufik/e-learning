<?php

namespace App\Helper;

use Norm\Norm;

class RoleHelper
{

    public static function getPermitedUri()
    {
        $available = array();
        
        if (self::checkAdmin()) {
            $available = self::getAllUri();
        } else {
            $available = self::getAvailableUri();
        }

        return $available;
    }

    public static function checkAdmin()
    {
        $isAdmin = false;
        $available = array();

        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

        if (!is_null($user)) {
            $available = self::getAvailableUri();
        }

        if (in_array('*', $available)) {
            $isAdmin = true;
        }

        return $isAdmin;
    }

    public function getAvailableUri()
    {
        $allowPrivileges = array();
        $user = isset($_SESSION['user']) ? $_SESSION['user'] : null;

        if (!is_null($user['role'])) {
            $roleModel = Norm::factory('Role');
            $getRoles = $roleModel->findOne($user['role']);
            $roles = $getRoles['privilege']->toArray();
            
            $privilegeModel = Norm::factory('Privilege');

            foreach ($roles as $key => $role) {
                $getPrivilege = $privilegeModel->findOne($role)->toArray();
                $allowPrivileges[] = $getPrivilege['uri'];
            }
        }
        
        $defaultUri = self::getDefaultUri();
        $allowPrivileges = array_merge($allowPrivileges, $defaultUri);

        return $allowPrivileges;
    }

    public static function getDefaultUri()
    {
        $app = \Bono\App::getInstance();
        $defaultUri = $app->config('bono.default.uri');

        return $defaultUri;
    }

    public static function getAllUri()
    {
        $available = array();
        $model = Norm::factory('Privilege')->find();

        foreach ($model as $collection) {
            $available[] = $collection->get('uri');
        }

        return $available;
    }

    public function checkAccess($available, $request)
    {
        if ($available == '*') {
            return true;
        }

        $pattern = "@^" . preg_replace('/(:id)+/', '([a-zA-Z0-9\-\_\.\?\:]+)', $available) . "$@D";

        if (preg_match($pattern, $request)) {
            return true;
        } else {
            return false;
        }
    }
}
