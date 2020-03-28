<?php

    class View{
        protected $viewsPath = "./application/views/";
        
        public function render($tpl,$pageData = null){
            
            $ViewFullPath = $this->viewsPath . $tpl . ".php";
            
           
                require_once $ViewFullPath;
            
        }
    }
?>