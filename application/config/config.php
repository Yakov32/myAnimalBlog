<?php
require_once "DB.php";
require_once "Route.php";

function __autoload($class_name){
		
		if(file_exists('./application/controllers/'.$class_name.'.php')) {
		require_once './application/controllers/'.$class_name.'.php';
		}

	} 


 ?>