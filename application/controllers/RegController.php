<?php
	class RegController extends Controller{
		
		protected $modelName = 'UsersModel';
		protected $pageData = array("title" => "RegAuthPage");
	
		public function index(){
			$this->View->render('RegAuthView',['title' => 'RegAuthPage']);
		}
		
		public function Reg(){

            $login  = filter_var(trim($_POST['RegLogin']),  FILTER_SANITIZE_STRING);
			$pass  = filter_var(trim($_POST['RegPass']),  FILTER_SANITIZE_STRING);
			$email  = filter_var(trim($_POST['RegEmail']),  FILTER_SANITIZE_STRING);

			if(empty($login) &&  empty($login) &&  empty($login)){
				$this->pageData['errorMessage'] = "Please fill all fields";
			}
			else {
				$res = $this->model->registNewUser($login,$pass,$email);

				if($res == true){
					$this->pageData['errorMessage'] = "Registration compited. Please Sign IN!";	
				}
				
				else {
					$this->pageData['errorMessage'] = "This login already uses. Try another!";
				}
			}
			$this->View->render('RegAuthView',$this->pageData);	
		}	
	} 
 ?>