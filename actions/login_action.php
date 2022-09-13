<?php

require_once realpath('../vendor/autoload.php');



use app\admin_classes\AdminLoginContr;

if(isset($_POST["admin_login"])) {
    
   $email = $_POST["email"];
   $pwd = $_POST["pwd"];


   $login = new AdminLoginContr($email, $pwd);
   $login->loginUser();

   header("location: ../admin_module/admin_landingPage.php?error=none");
}


