<?php
	
	class Controller{

		protected $view;
		protected $pageData = [];

		public  function CreateView(){
			$pageData = $this->pageData;

			if(file_exists("./application/views/$this->view" . ".php")){
				require_once "./application/views/$this->view" . ".php";
			}
		}
	} 

 ?>