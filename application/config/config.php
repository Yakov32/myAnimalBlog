<?php
require_once "DB.php";
require_once "Route.php";

function __autoload($class_name){
		
		if(file_exists('./application/controllers/'.$class_name.'.php')) {
			require_once './application/controllers/'.$class_name.'.php';
			return 1;
		}

		if(file_exists('./application/models/'.$class_name.'.php')) {
			require_once './application/models/'.$class_name.'.php';
			return 1;
		}

		if(file_exists('./application/views/'.$class_name.'.php')) {
			require_once './application/views/'.$class_name.'.php';
			return 1;
		}
		
		if(file_exists('./application/locator-services/'. $class_name. '.php')){
			require_once './application/locator-services/'.$class_name. '.php';
			return 1;
		}
	} 