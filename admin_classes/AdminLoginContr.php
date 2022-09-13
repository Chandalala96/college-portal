<?php 

namespace app\admin_classes;

class AdminLoginContr extends AdminManager{
    private $email;
    private $pwd;


    public function __construct($email, $pwd) {
        $this->email = $email;
        $this->pwd = $pwd;
    }

    private function emptyInput() {
        $result = 0;
        if(empty($this->email) || empty($this->pwd)) {
            $result = true;
        } else {
            $result = false;
        }
        return $result;
    }

    public function loginUser() {
       if($this->emptyInput() == true) {
        header('location: ../admin_login.php.php?error=emptyInput');
        exit();
       }
       $this->getUser($this->email, $this->pwd);
    }
    
    
	public function logoutUser() {
        $this->getUser($this->email, $this->pwd);
 }
}


