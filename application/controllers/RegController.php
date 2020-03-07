<?php

	class RegController extends Controller{

		protected $view = 'loginView';
		protected $pageData = array("title" => "Login");
		protected $model = 'UserModel';


		public function Reg(){

            $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
            $pass  = filter_var(trim($_POST['pass']),  FILTER_SANITIZE_STRING);
			
		}
		
	} 


 ?>