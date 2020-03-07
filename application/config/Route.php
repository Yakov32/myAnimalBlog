<?php
	
	class Route {
		
		private $routes = [];

		public  function __construct(array $routes_array){
			$this->routes = $routes_array;		
		}
		
		public function callController($url){
			if(isset($this->routes[$url])){
				return new $this->routes[$url];
			}
				return new ErrorController();
		}
	}	 
 ?>