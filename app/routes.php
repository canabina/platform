<?php 

self::$routes = [

	'defaultModule' => 'frontend',

	'modules' => [
		'frontend' => [
			'url' => '/',
			'routing' => [
				'/' => [
					'controller' => 'main',
				],
				'/street/@id' => [
					'controller' => 'street',
				],
				'/city/@cityName' => [
					'controller' => 'city',
				],
				'/docs' => [
					'controller' => 'page',
					'defaultParams' => [
						'pageName' => 'docs'
					]
				],
				
				'/about' => [
					'controller' => 'page',
					'defaultParams' => [
						'pageName' => 'about'
					]
				],
				
				'/api/v1/streets' => [
					'controlller' => 'api',
				]
			]
		],
		'admin' => [
			'url' => '/admin',
			'routing' => [
				'/' => [
					'controller' => 'main'
				],
				'/login' => [
					'controller' => 'auth',
					'action' => 'login'
				],
				'/remind' => [
					'controller' => 'auth',
					'action' => 'passwordRemind'
				],
				'/logout' => [
					'controller' => 'auth',
					'action' => 'logout'
				],
				'/places/@type' => [
					'controller' => 'places',
					'action' => 'showPlaces',
				],
				'/place/@type/new' => [
					'controller' => 'places',
					'action' => 'createPlace',
				],
				'/place/@type/show/@id' => [
					'controller' => 'places',
					'action' => 'showPlace',
				],
				'/place/@type/update/@id' => [
					'controller' => 'places',
					'action' => 'updatePlace',
				]
			]
		]
	]
	
	
];




