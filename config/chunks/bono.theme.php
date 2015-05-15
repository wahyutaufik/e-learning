<?php

return array(
    'bono.theme' => array(
        'class'     => '\\ROH\\Theme\\BootstrapTheme',
        'overwrite' => true,
        'options'   => array(
            'title' => 'E-Learning',
            'menu'  => array(
                array(
                    'label' => 'Home',
                    'url'   => '/',
                    'icon'  => 'fa-home'
                ),
                array(
                    'label'    => 'Master Data',
                    'url'      => '',
                    'icon'     => 'fa-list',
                    'children' => array(
                        array(
                            'label' => 'User',
                            'url'   => '/user',
                        )
                    )
                ),
                array(
                    'label'    => 'System',
                    'url'      => '',
                    'icon'     => 'fa-cogs',
                    'children' => array(
                        array(
                            'label' => 'Application',
                            'url'   => '/application',
                        ),
                        array(
                            'label' => 'Role',
                            'url'   => '/role',
                        ),
                        array(
                            'label' => 'Privilege',
                            'url'   => '/privilege',
                        ),
                    )
                ),
            )
        )
    )
);
