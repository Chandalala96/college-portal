<?php 

namespace app\admin_classes;

class AdminManager extends Db_connect{
    function getUser($email, $pwd) {
       $getPwdStmt = $this->connect()->prepare('SELECT password FROM admins WHERE email = ?');

       if(!$getPwdStmt->execute(array($email))) {
            $getPwdStmt = null;
            header("location:../admin_login.php?error=sf");
            exit();
       }

       if($getPwdStmt->rowCount() == 0) {
          $getPwdStmt = null;
          header("location:../admin_login.php?error=unf");
          exit();
       }

       $hashed_pwd = $getPwdStmt->fetchAll(\PDO::FETCH_ASSOC);

       if($pwd !== $hashed_pwd[0]["password"]) {
        $getAdminStmt = null;
        header("location:../admin_login.php?error=wp");
        exit();
       }else if($pwd === $hashed_pwd[0]["password"]) {
        $getAdminStmt = $this->connect()->prepare('SELECT * FROM admins WHERE email = ? AND password = ?;');

        if(!$getAdminStmt->execute(array($email, $pwd))) {
            $getAdminStmt = null;
            header("location:../admin_login.php?error=sf");
        }
        if($getAdminStmt->rowCount() == 0) {
            header("location:../admin_login.php?error=unf");
            exit();
        }
        $admin = $getAdminStmt->fetchAll(\PDO::FETCH_ASSOC);

        session_start();
        $_SESSION['name'] = $admin[0]['fullname'];
        $_SESSION['email'] = $admin[0]['email'];
        $_SESSION['pwd'] = $admin[0]['password'];

       }

    }
}