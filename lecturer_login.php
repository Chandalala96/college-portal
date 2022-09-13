<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Portal</title>

    <!---Custom CSS-->


    <!--- Bootstrap CSS only--> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
 <!----Font awesome icons---->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

 <link rel="stylesheet" href="style.css">

</head>
<body>
   <div class="student-portal-title text-center">
    <h1>Lecturer Login <span> <i class="fas fa-chalkboard-teacher"></i></span> </h1>
    </div>
    <section> 
        <div class="container text-center" id="login-form">
            <form class="login-form" method="post" action='./includes/login_includes.php'>
                <div class="mb-3 mt-3">
                <label class="login-label" for="u_id"><b>Email</b></label>
                <input type="text" class="form-control mx-auto" id="u_id" placeholder="Enter email" name="email" style="width: 100%;" required="">
              </div>
              <div class="mb-3">
                <label class="login-label" for="pass"><b>Password</b></label>
                <input type="password" class="form-control mx-auto" id="pass" placeholder="Enter password" name="pwd" style="width: 100%;" required="">
              </div>
              <div class="d-flex justify-content-between">
                <button class="btn btn-dark" name="student_login" role="button">Log in</button>
                 
                <a href="index.html" class="btn btn-dark" style="margin-left: 100px;">Back</a>
              </div>             
            </form>
            <div class="forgot-pwd">
                <a href="" ><b>Forgot password?</b></a>
            </div>
    
        </div>
    </section>  
</body>
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
