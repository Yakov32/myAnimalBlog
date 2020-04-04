<?php
class UserServ{

    public $user= array();
    
    public function getUser()
    {
        return $this->user;
    }

    public function authUser($user_data)
    {
        $this->user['login']  = $user_data['login'];
        $this->user['pass']   = $user_data['pass'];
    }

    public function logout(){

    }
}
