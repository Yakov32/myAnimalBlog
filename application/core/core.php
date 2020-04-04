<?php
	class Core{
		public static $components = array();
		
		public static function start()
		{
			self::setComponents();

			$controller = self::defineController();
			$cont_method = self::defineControllerMethod($_GET['cont_method']);
			$controller->$cont_method();
		}

		public static function defineController()
		{
			$routes   = require_once "Routes.php";
			$route    = new Route($routes);
			$controller = $route->callController($_GET['url']);
			return $controller;
		}

		public static function defineControllerMethod($methodName){
		
			$method = 'index';

			if(!empty($methodName)){
				$method = $methodName;
			}

			return $method;
		}
		
		public static function setComponents()
		{
			$services = require_once "./application/config/ServicesList.php";
			$locator = new Locator($services);
			self::$components = $locator->getServices();
		}
	} 
 