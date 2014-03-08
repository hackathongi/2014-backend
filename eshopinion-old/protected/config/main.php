<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'eShopinion',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
                'ext.restfullyii.components.*',
                'ext.giix-components.*',
                'application.models.*',
		'application.components.*',
	),
    
        'theme'=>'blackboot',

	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'Z9.arUTM',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
                        'generatorPaths' => array(
                            'ext.giix-core', // giix generators
                        ),
		),
		
	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		// uncomment the following to enable URLs in path-format
		
                'urlManager' => array(
                    'urlFormat' => 'path',
                    'rules' => array(
                        'api/<controller:\w+>' => array('<controller>/restList', 'verb' => 'GET'),
                        'api/<controller:\w+>/<id:\w+>' => array('<controller>/restView', 'verb' => 'GET'),
                        'api/<controller:\w+>/<id:\w+>/<var:\w*>' => array('<controller>/restView', 'verb' => 'GET'),
                        'api/<controller:\w+>/<id:\w+>/<var:\w*>/<var2:\w*>' => array('<controller>/restView', 'verb' => 'GET'),
                        array('<controller>/restUpdate', 'pattern' => 'api/<controller:\w+>/<id:\w+>', 'verb' => 'POST'),
                        array('<controller>/restDelete', 'pattern' => 'api/<controller:\w+>/<id:\d+>', 'verb' => 'DELETE'),
                        array('<controller>/restCreate', 'pattern' => 'api/<controller:\w+>', 'verb' => 'POST'),
                        array('<controller>/restCreate', 'pattern' => 'api/<controller:\w+>/<id:\w+>', 'verb' => 'POST'),
                        '<controller:\w+>/<id:\d+>' => '<controller>/view',
                        '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                        '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                    ),
                ),
            
		'db' => array(
                    'connectionString' => 'mysql:host=localhost;dbname=apidb',
                    'emulatePrepare' => true,
                    'username' => 'api',
                    'password' => 'Z9.arUTM',
                    'charset' => 'utf8',
                    'tablePrefix' => 'tbl_',
                ),
		// uncomment the following to use a MySQL database
		/*
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=testdrive',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
		*/
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
	),
);