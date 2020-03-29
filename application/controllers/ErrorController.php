<?php
class ErrorController extends Controller{
		
	//protected $view = "errorPage";
	protected $pageData = array("title" => "ErrorPage");

	public function index(){
		$this->View->render('ErrorPage',$this->PageData);
	}
}	 
?>