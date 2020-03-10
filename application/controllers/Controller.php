<?php
	
	class Controller{
		
		protected $modelName;
		protected $model;
		
		protected $view;
		protected $pageData = [];

		public function __construct(){
			if(isset($this->modelName)){
				$this->model = new $this->modelName;
			}
		}

		public  function CreateView(){
			$pageData = $this->pageData;

			if(file_exists("./application/views/$this->view" . ".php")){
				require_once "./application/views/$this->view" . ".php";
			}
		}
	} 

 ?>