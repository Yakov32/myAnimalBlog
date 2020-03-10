<?php
    class Model {
        protected $db;
        
        public function __construct(){
            if(empty($this->$db)){
                $this->db = DB::connectToDB();
            }
        }
    }
?>
