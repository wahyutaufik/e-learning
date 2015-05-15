<?php

namespace App\Provider;

class AppProvider extends \Bono\Provider\Provider
{
    public function initialize()
    {
        $app = $this->app;

        $app->get('/application', function () use ($app) {

        	// var_dump($app);
        	// exit;
            // /********** About Us **********/
            // $aboutModel = Norm::factory('Group_about');
            // $aboutData = $aboutModel->find();

            // $dataAbout = array();
            // foreach ($aboutData as $key => $about) {
            //     $dataAbout[] = $about->toArray();
            // }
            // /********** About Us **********/
            // $app->name = 'Application';

            $app->response->set('controller', $app->name);
            $app->response->template('system/Application');
        });
    }
}
