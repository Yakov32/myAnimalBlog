<?php
	class Core{

		public static function start()
		{
			require_once("Routes.php");

			$route = new Route($routes);
			$controller = $route->callController($_GET['url']);

			$cont_method = 'index';
			if($_GET["cont_method"]){
				$cont_method = $_GET['cont_method'];
			}
			$controller->$cont_method();
		}
	} 
 ?>