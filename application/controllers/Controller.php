<?php
	class Controller{
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