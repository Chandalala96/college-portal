
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
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  
 <script src="fullCalender.js"></script>

 <!--- chart.js library ---->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
</head>
<body>
<div id="mySidenav" class="sidenav">
<span class="openBtn" style="font-size:30px;cursor:pointer;color:white" onclick="openNav()">&#9776;</span>
  <div class="link_icon">
  <i class="fas fa-home"></i><a href="#" class="nav-links">Home</a>
  </div>
  <div class="link_icon">
  <i class="fas fa-user"></i><a class="nav-links dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Manage Users
</a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="transition: all 2.1s ease;">
    <li><a class="dropdown-item" href="#">Manage Students</a></li>
    <li><a class="dropdown-item" href="#">Another Lecturers</a></li>
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
                  <li><a href="#" class="active"><i class="fas fa-home"></i> Home</a></li>
                  <li><a class="dropdown-toggle" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fas fa-user"></i> Manage Users
                        </a>
                          <ul class="dropdown-menu">
                            <li><a class="dropdown-item text-black" href="#">Manage Students</a></li>
                            <br>
                            <li><a class="dropdown-item text-black" href="#">Another Lecturers</a></li>
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



<main id="main">
  <div  id="welcome-section"> 
<div class="row">
    <div class="col-sm-6"> 
        <h2>Welcome to your Admin Dashboard <i class="fas fa-cogs"></i></h2>
    </div>
    <div class="col-sm-6"> 
    <a  class="float-end" href="" style="font-size: 30px; color: black"><i class="fas fa-envelope"></i></a>
  <p class="text-black text-end mt-3"><b><?= $_SESSION["name"] ?></b> <img src="../images/admin.jpg" class="float-end" style="width: 70px; height: 70px; border-radius: 50%;"  /> </p>
  <br>
       
    </div>
  
        </div>
  </div>
  <div class="container-fluid mt-3"> 
    <div class="row justify-content-center"> 
        <div class="col-sm-4" >
        <div class="card text-center" id="student-card">
  <div class="card-body">
    <h3 class="card-title">Students</h3>
    <p class="card-text"><b>Total Students:</b></p>
    <p class="card-text"><b>Active Students:</b></p>
    <p class="card-text"><b>Un-active Students:</b></p>
  
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card text-center" id="lecturer-card">
  <div class="card-body">
    <h3 class="card-title">Faculty</h3>
    <p class="card-text"><b>Total Departments:</b></p>
    <p class="card-text"><b>Total Lecturers:</b></p>
    <p class="card-text"><b>Total Classes:</b></p>
    
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card text-center" id="admin-card">
  <div class="card-body">
    <h3 class="card-title">Admins</h3>
    <p class="card-text"><b>Total Admins:</b></p>
    <p class="card-text"><b>Admin On Duty:</b></p>
    <p class="card-text"><b>Online Admins:</b></p>
  </div>
</div>
        </div>
    </div>
  </div>
<br> 
<section> 

<div class="container-fluid mt-5" style="padding: 10px;">
<h2 class="text-center">Announcements & Events <i class="far fa-calendar-alt"></i></h2> 
    <div class="row justify-content-center mt-3"> 
        <div class="col-sm-6" id="calender-col" >
        
        <div id='calendar' style=" border: 1px solid silver;
  border-radius: 10px; padding: 10px;  box-shadow: 3px 3px 3px 3px silver;"></div>

        </div>
        <div class="col-sm-6 p-5">
        <div class="card text-center events-card">
  <div class="card-body">
    <h4 class="card-title">Upcoming Events</h4>
    <p class="card-text"><b>Graduation Day: 12/10/22</b></p>
    <p class="card-text"><b>Annual General Meeting: 12/10/22</b></p>
    <p class="card-text"><b>ICT Presentataions: 12/10/22</p>
    
  </div>
</div>
        </div>
    </div>
  </div>

</section>

<section class="mt-5"> 
<div class="container">
    <h2 class="text-center">Recent Activity <i class="fas fa-users"></i></h2>
    <br>
    <div class="row">
      <div class="col-sm-6 p-5">
      <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
      </div>
      <div class="col-sm-6 p-5">
      <canvas id="myChart" style="width:100%;max-width:600px; height: 500px;"></canvas>
      </div>
    </div>
    
</div>

</section>
</main>
<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
  let closeBtn = document.querySelector(".closebtn");
  let openBtn = document.querySelector(".openBtn");
  closeBtn.classList.toggle("unactive");
  openBtn.classList.toggle("active");
  document.getElementById("main").style.marginLeft = "300px";
  closeBtn.style.display= "block";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "44px";
  let closeBtn = document.querySelector(".closebtn");
  let openBtn = document.querySelector(".openBtn");

  closeBtn.classList.toggle("unactive");
  openBtn.classList.toggle("active");
  document.getElementById("main").style.marginLeft= "60px";
  closeBtn.style.display= "none";
}


const navToggler = document.querySelector(".nav-toggler");
 navToggler.addEventListener("click", navToggle);

 function navToggle() {
    navToggler.classList.toggle("active");
    const nav = document.querySelector(".nav");
    nav.classList.toggle("open");
    if(nav.classList.contains("open")){
    	nav.style.maxHeight = nav.scrollHeight + "px";
    }
    else{
    	nav.removeAttribute("style");
    }
 } 


 var xValues = ["Students", "Lecturers", "Admins"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["rgba(156,252,248,1)", "#d64c7f","rgba(80,131,73,1)","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "ONLINE USERS"
    }
  }
});

</script>
</body>

<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script> -->

<!-- <script src="script.js"></script> -->


<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
