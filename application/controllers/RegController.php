<?php
	class RegController extends Controller{
		
		public $a = 5;
		protected $pageData = array();
	
		public function index()
		{
			$model = new ArticlesModel;
			$articles = $model->selectSomeArticles(5);

			$this->pageData['articles'] = $articles;

			$this->View->render('IndexView',$this->pageData);
		}
		
		public function Reg()
		{
			$model = new UsersModel;
			
			$login  = filter_var(trim($_POST['regLogin']),  FILTER_SANITIZE_STRING);
			$pass  = filter_var(trim($_POST['regPassword']),  FILTER_SANITIZE_STRING);
			$email  = filter_var(trim($_POST['regEmail']),  FILTER_SANITIZE_STRING);

			$auth_key = bin2hex(random_bytes(22));
			
			if(empty($login) &&  empty($login) &&  empty($login)){
				$this->pageData['alertMessage'] = "Please fill all fields";
			}
			else {
				$res = $model->registNewUser($login,$pass,$email,$auth_key);

				if($res == true){
					$this->pageData['alertMessage'] = "Registration compited. Please Sign IN!";	
				}
				
				else {
					$this->pageData['alertMessage'] = "This login already uses. Try another!";
				}
			}
			
			$this->View->render('RegPage',$this->pageData);
		}	
	} 
 ?>