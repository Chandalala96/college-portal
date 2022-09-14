
<?php
  
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
  
 <!----Font awesome icons---->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

 <link rel="stylesheet" href="admin_style.css">

</head>
<body>
<div id="mySidenav" class="sidenav">
<span class="openBtn" style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
  <div class="link_icon">
  <i class="fas fa-home"></i><a href="#" class="nav-links"> Home</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-user"></i><a href="#" class="nav-links">Manage Students</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-home"></i><a href="#" class="nav-links">Manage Lecturers</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-user"></i><a href="#" class="nav-links">Change Password</a>
  </div>
  <div class="link_icon">
  <a style="text-decoration: none; color: white;" href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  </div>
</div>

<div id="main">
  <div class="container-fluid">
      <div class="row justify-content-between">
         <div class="col-sm-6">
         <h2>Welcome to your Admin Dashboard</h2>
  <p.</p>
         </div>
         <div class="col-sm-6 text-end">
          Log out
          <img src="../images/admin.jpg" style="width: 50px; height: 50px;" class="float-end" />
         </div>
      </div>
  </div>
  <hr>
  

</div>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  let closeBtn = document.querySelector(".closebtn");
  let openBtn = document.querySelector(".openBtn");
  closeBtn.classList.toggle("unactive");
  openBtn.classList.toggle("active");
  document.getElementById("main").style.marginLeft = "300px";
 
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "44px";
  let closeBtn = document.querySelector(".closebtn");
  let openBtn = document.querySelector(".openBtn");

  closeBtn.classList.toggle("unactive");
  openBtn.classList.toggle("active");
  document.getElementById("main").style.marginLeft= "60px";
}


</script>
</body>
<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
