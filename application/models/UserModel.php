<?php

    class UserModel extends Model{

        public function registNewUser($login,$password,$email){
            
            $user = $this->getUser($login);
            if($user == false){
                $sql = "INSERT INTO users VALUES
                (NULL,:login,:password,:email)";
                $stmt = $this->db->prepare($sql);
                $res = $stmt->execute(["login"    => "$login",
                                       "password" => "$password",
                                       "email"    => "$email"]);
                return true;   
            } 
            return false;
        }

        public function getUser($login){
            $sql = "SELECT login FROM users WHERE login = ?";
            $stmt = $this->db->prepare($sql);
            $res = $stmt->execute([$login]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $user;
        }
    }
 ?>