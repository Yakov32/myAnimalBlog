<?php

	class LoginController extends Controller{
		protected $modelName = 'UsersModel';
		protected $pageData = array("title" => "RegAuth");

		public function Index(){
			$this->View->render('RegAuthView',$this->PageData);
		}
	} 
 ?>