<?php
class SessionServ{
    
    public $alerts = [];

    public function setFlash($alert){
        $_SESSION['alert'] = $alert;
        $this->alerts[] = $alert;
        return 1;
    }

    public function setUser(array $user)
    {
        $_SESSION['user'] = $user;
    }

    public function removeUser()
    {
        unset($_SESSION['user']);
    }
}