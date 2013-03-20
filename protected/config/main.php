<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'My Web Application',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
        'application.models.*',
        'application.components.*',
    ),
	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		
		'urlManager'=>array(
			'urlFormat'=>'path',
    'showScriptName'=>false,
     'caseSensitive'=>true, 
			'rules'=>array(
                        
                            'veiculos/create' => 'veiculos/create',
                            'veiculos/moto' => 'veiculos/moto',
                            'veiculos/caminhoes' => 'veiculos/caminhoes',
                             'veiculos/onibus' => 'veiculos/onibus',
                             'veiculos/nautica' => 'veiculos/nautica',
                             'veiculos/outros' => 'veiculos/outros',
                          
                            'anuncios' => 'anuncios',
                            'anuncios/carros' => 'anuncios/carros',
                             'anuncios/motos' => 'anuncios/motos',
                             'anuncios/caminhoes' => 'anuncios/caminhoes',
                             'anuncios/onibus' => 'anuncios/onibus',
                             'anuncios/nautica' => 'anuncios/nautica',
                            'anuncios/outros' => 'anuncios/outros',
                         
                            'vendidos' => 'vendidos',
                            'vendidos/carros' => 'vendidos/carros',
                             'vendidos/motos' => 'vendidos/motos',
                             'vendidos/caminhoes' => 'vendidos/caminhoes',
                             'vendidos/onibus' => 'vendidos/onibus',
                             'vendidos/nautica' => 'vendidos/nautica',
                             'vendidos/outros' => 'vendidos/outros',
                         
                            'propostas-recebidas' => 'propostasRecebidas',
                            'propostas-recebidas/carros' => 'propostasRecebidas/carros',
                             'propostas-recebidas/motos' => 'propostasRecebidas/motos',
                             'propostas-recebidas/caminhoes' => 'propostasRecebidas/caminhoes',
                             'propostas-recebidas/onibus' => 'propostasRecebidas/onibus',
                             'propostas-recebidas/nautica' => 'propostasRecebidas/nautica',
                            'propostas-recebidas/outros' => 'propostasRecebidas/outros',
                           'propostas-recebidas/<id:\d+>' => 'propostasRecebidas/view', 
                            'propostas-recebidas/delete' => 'propostasRecebidas/delete', 
                            'lixeira/propostas-recebidas' => 'lixeira/propostasRecebidas',
      
                         'mensagens/lista' => 'mensagens/mensagens',

                            
                            
//                            'clientes' => 'cv2Vendedores',
//                             'clientes/create' => 'cv2Vendedores/create',
//                            'clientes/update' => 'cv2Vendedores/update',
//                            'clientes/delete' => 'cv2Vendedores/delete',
//                            'clientes/lista' => 'cv2Vendedores/mensagens',
//                            'clientes/<id:\d+>' => 'cv2Vendedores/view',

                                              
                //'solucoes/<solution:[a-zA-Z0-9_-]+>' => 'solution/view',
               
                //'vagas/<employ:[a-zA-Z0-9_-]+>' => 'employ/view',
              
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		),

//		'db'=>array(
//			'connectionString' => 'mysql:host=localhost;dbname=centraldoveicu',
//			'emulatePrepare' => true,
//			'username' => 'root',
//			'password' => '',
//			'charset' => 'utf8',
//		),
		
            
            'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=centraldoveicu',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		),
            
            
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
    
    
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => '123',
            'ipFilters'=>array('127.0.0.1','::1'),
        ),
    ),
    
    
);