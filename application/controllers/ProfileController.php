<?php
class ProfileController extends Controller{

    protected $pageData = array("title" => 'MyProfile');
    
    public function profile_show()
    {
        $this->pageData['user'] = $_SESSION['user'];

        $this->View->render('ProfilePage', $this->pageData);
    }
}