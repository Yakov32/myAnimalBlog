<?php
	class RegController extends Controller{
		
		protected $modelName = 'UserModel';
		protected $view = 'loginView';
		protected $pageData = array("title" => "RegPage");
	
		public function Reg(){
			
            $login  = filter_var(trim($_POST['RegLogin']),  FILTER_SANITIZE_STRING);
			$pass  = filter_var(trim($_POST['RegPass']),  FILTER_SANITIZE_STRING);
			$email  = filter_var(trim($_POST['RegEmail']),  FILTER_SANITIZE_STRING);

			$res = $this->model->registNewUser($login,$pass,$email);

			if($res == true){
				$this->pageData['errorMessage'] = "Registration compited. Please Sign IN!";
				
			}
			
			else {
				$this->pageData['errorMessage'] = "This login already uses. Try another!";
				print_r($this->pageData);
			}
		}	
	} 
 ?>