<?php
   session_start();
?>
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

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
 <!----Font awesome icons---->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
  
  
<link rel="stylesheet" href="admin_style.css">

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" /> -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
  
</head>
<body>
<div id="mySidenav" class="sidenav">
<span class="openBtn" style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
  <div class="link_icon">
  <i class="fas fa-home"></i><a href="admin_landingPage.php" class="nav-links">Home</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-user"></i><a class="nav-links dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Manage Users
</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="transition: all 2.1s ease;">
    <li><a class="dropdown-item" href="manage_students.php">Manage Students</a></li>
    <li><a class="dropdown-item" href="manage_lecturers.php">Manage Lecturers</a></li>
  </ul>
  </div>
  <div class="link_icon">
  <i class="fas fa-user-cog"></i><a href="#" class="nav-links">Manage Admins</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-book"></i><a class="nav-links dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Manage Courses
</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="transition: all 2.1s ease;">
    <li><a class="dropdown-item" href="#">Action</a></li>
    <li><a class="dropdown-item" href="#">Another action</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
  </div>
  <div class="link_icon">
  <i class="fas fa-key"></i><a href="#" class="nav-links">Change Password</a>
  </div>
  <div class="link_icon">
  <i class="bi bi-box-arrow-left"></i><a href="#" class="nav-links">Log Out</a>
  </div>
  <div class="link_icon">
  <a style="text-decoration: none; color: white;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>


<header class="header">
    <div class="custom-container">
        <div class="custom-row align-items-center justify-content-between">
            <div class="logo">
               
            </div>
            <button type="button" class="nav-toggler">
               <span></span>
            </button>
            <nav class="nav">
               <ul>
                  <li><a href="admin_landingPage.php" class="active"><i class="fas fa-home"></i> Home</a></li>
                  <li><a class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user"></i> Manage Userss
                        </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-black" href="manage_students.php">Manage Students</a></li>
                            
                            <li><a class="dropdown-item text-black" href="manage_lecturers.php">Manage Lecturers</a></li>
                          </ul></li>
                  <li><a href="#"><i class="fas fa-user-cog"></i> Manage Admins</a></li>
                  <li><a class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-book"></i> Manage Courses
                        </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-black" href="#">Manage Students</a></li>
                            <br>
                            <li><a class="dropdown-item text-black" href="#">Another Lecturers</a></li>
                          </ul></li>
                  <li><a href="#"><i class="fas fa-key"></i> Change password</a></li>
                  <div class="row justify-content-end">
  <img src="../images/admin.jpg" style="width: 100px; height: 100px; border-radius: 50%;"  /> 
  
   <p class="text-white text-end mt-3"><?= $_SESSION["name"] ?></p>
         <button class="btn btn-dark ms-5"  style="width: 100px;"> <i class="bi bi-box-arrow-left"></i> Logout</button></div>
  
               </ul>
            </nav>
        </div>
    </div>
 </header>