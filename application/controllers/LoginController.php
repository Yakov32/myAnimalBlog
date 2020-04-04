<?php
	class LoginController extends Controller{
		protected $pageData = array("title" => "RegAuth");

		public function Index()
		{
			header("Location: /");
		}

		public function sign_up()
		{
			$login = $_POST['authLogin'];
			$pass  = $_POST['authPassword'];
			
			$model = new UsersModel;
			$user_data = $model->verifyUser($login,$pass);

			if(!empty($user_data)){
				//echo "<pre>";
				//print_r(Core::$components);
				Core::$components['SessionServ']->setUser($user_data);
				header("Location: /");
			}
		}

		public function logout(){
			unset($_SESSION['user']);
			header("Location: /");
		}
	} 