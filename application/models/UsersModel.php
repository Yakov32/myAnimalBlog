<?php

class UsersModel extends Model{

    public function registNewUser($login,$password,$email,$auth_key){
            
        $user = $this->getUser($login);
        if($user == false){
            $sql = "INSERT INTO users VALUES
            (NULL,:login,:password,:email,:auth_key)";
            $stmt = $this->db->prepare($sql);
            $res = $stmt->execute(["login"    => "$login",
                                   "password" => "$password",
                                   "email"    => "$email",
                                   "auth_key" => "$auth_key"]);
            return true;   
        } 
         return false;
    }

    public function getUser($login)
    {
        $sql = "SELECT login FROM users WHERE login = ?";
        $stmt = $this->db->prepare($sql);
        $res = $stmt->execute([$login]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
        return $user;
    }

    public function verifyUser($login,$pass)
    {
        $sql = "SELECT * FROM users WHERE login = :login AND password = :pass";
        $stmt = $this->db->prepare($sql);
        $res = $stmt->execute(['login' => $login, 'pass' => $pass]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
      
        return $user;
    }
}