<?php
	class Controller{
		
		protected $modelName;
		protected $model;
		
		protected $view;
		protected $pageData = [];

		public function __construct(){
			if(isset($this->modelName)){
				$this->model = new $this->modelName;
				;
			}
			$this->View  = new View();
		}
	} 

 ?>