<?php

namespace App\Controller;

use \Norm\Controller\NormController;

/**
 * Base Controller
 */
class BaseController extends NormController
{
    // public function mapRoute()
    // {
        // $this->map('/null/create', 'create')->via('GET', 'POST');
        // $this->map('/:id', 'read')->via('GET');
        // $this->map('/:id/update', 'update')->via('GET', 'POST');
        // $this->map('/:id/delete', 'delete')->via('GET', 'POST');

        // $this->map('/', 'search')->via('GET');
        // $this->map('/', 'create')->via('POST');
        // $this->map('/:id/:entry/delete_customer', 'deleteCustomer')->via('GET', 'POST');
    // }
    /**
     * Get the criteria from the request
     *
     * @return array criteria that will be used to get the record(s)
     */
    public function getCriteria()
    {
        $criteria = parent::getCriteria();
        $criteria = array_merge(array('_status' => 1), $criteria);

        return $criteria;
    }

    // public function create()
    // {
    //     echo "<pre>";
    //     print_r($_POST);
    //     exit();
    // }
}
