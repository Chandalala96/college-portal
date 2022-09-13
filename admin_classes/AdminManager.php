<?php 

namespace app\admin_classes;

class AdminManager extends Db_connect{

    //This function gets the admin according to the email & password that have been entered
    //in order to log them in
    function getUser($email, $pwd) {

//Patterns to match for SQL Injection.
$pattern1 = '/(ALTER|CREATE|DELETE|DROP|EXEC(UTE){0,1}|INSERT( +INTO){0,1}|MERGE|SELECT|UPDATE|UNION( +ALL){0,1})/';
$pattern2 = '/[#$%^&*()+=\-\[\]\';,\/{}|":<>?~\\\\]/';
     
if(preg_match($pattern1, $email) || preg_match($pattern2, $email) || preg_match($pattern1, $pwd) || preg_match($pattern2, $pwd)) {
    // Get sql injection related info 
   $injectionTime =  date("h:i:sa");
   $injectionDate =  date("d/m/Y");
  $injection_agent = $_SERVER['HTTP_USER_AGENT']; 
  $injection_agentt = explode(")", $injection_agent);
  $injection_agenttt = explode(";", $injection_agentt[0]);
  $device = $injection_agenttt[1] ." ". $injection_agenttt[2];
  $ip_address = $_SERVER['REMOTE_ADDR']; 
  $decription = "Attempted SQL Injection on Admin login form";

    $sql = "INSERT INTO admin_sqlinjections (injection_time, injection_date, device, ip_address, description) VALUES (?, ?, ?, ?, ?);";
          $stmt = $this->connect()->prepare($sql);
          $stmt->execute(array($injectionTime, $injectionDate, $device, $ip_address, $decription));
        header("location: ../admin_login.php?error1=SI");
 exit();
} else {
    $getPwdStmt = $this->connect()->prepare('SELECT password FROM admins WHERE email = ?');
       
    //Executes the query. If the query fails this redirects to the login page with an error
    if(!$getPwdStmt->execute(array($email))) {
         $getPwdStmt = null;
         header("location:../admin_login.php?error=sf");
         exit();
    }
    
    //This checks if the entered admin credentials are in the database if not it redirects
    //to the login page with an error.
    if($getPwdStmt->rowCount() == 0) {
       $getPwdStmt = null;
       header("location:../admin_login.php?error=unf");
       exit();
    }

    $hashed_pwd = $getPwdStmt->fetchAll(\PDO::FETCH_ASSOC);
    

    //This compares  the entered password with the admin password in the database
    //If the passwords match admin is logged in.
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
  

      
}
