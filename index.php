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
   <div class="container portal-title text-center">
    <h1>Welcome to the College Portal <span> <i class="fas fa-graduation-cap"></i></span> </h1>

    
        <a class="btn btn-dark login-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" style="font-size: 25px;">Log in</a>
          <ul class="dropdown-menu">
           <li><a href="student_login.php" class="dropdown-item">Student Login</a></li>
           <li><a  href="lecturer_login.php" class="dropdown-item">Lecturer Login</a></li>
           <li><a href="admin_login.php" class="dropdown-item">Admin Login</a></li>
          </ul>
          
    </div>
</body>
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
