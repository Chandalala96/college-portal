<?php 

include_once('admin_header.php');

?>

<main id="main">
  <div  id="welcome-section"> 
<div class="row">
    <div class="col-sm-6"> 
        <h2><b>Manage Lecturers <i class="fas fa-cogs"></i></b></h2>
    </div>
    <div class="col-sm-6"> 
    <a  class="float-end" href="" style="font-size: 30px; color: black"><i class="fas fa-envelope"></i></a>
  <p class="text-black text-end mt-3"><b><?= $_SESSION["name"] ?></b> <img src="../images/admin.jpg" class="float-end" style="width: 70px; height: 70px; border-radius: 50%;"  /> </p>
  <br>
       
    </div>
  
        </div>
  </div>
  <h2 class="text-center" id="mobile-heading">Manage Lecturers <i class="fas fa-cogs"></i></h2>
  <section class="dept-section">
    <div class="container">
    <div class="card text-center dept-card  m-auto">
  <div class="card-body">
    <h2 class="card-title"><b>College Departments <i class="fas fa-school"></i></b></h2>
    <div class="mt-3">
    <button class="btn dept-btn1 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <b>Automotive Department</b>
    </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li><a class="dropdown-item" href="#">Heavy Equipment Repair</a></li>
    <li><a class="dropdown-item" href="#">Automotive Engineering</a></li>
    <li><a class="dropdown-item" href="#">Auto-electrical Engineering</a></li>
  </ul>
    </div>
    <br>
  <div>
  <button class="btn dept-btn2 dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    <b>ASBS Department</b>
    </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
    <li><a class="dropdown-item" href="#">Computer Sytsems Engineering</a></li>
    <li><a class="dropdown-item" href="#">Laboratory Technical Engineering</a></li>
    <li><a class="dropdown-item" href="#">Something else here</a></li>
  </ul>
  </div>
  <br>
  <div>
  <button class="btn dept-btn3 dropdown-toggle" type="button" id="dropdownMenuButton3" data-bs-toggle="dropdown" aria-expanded="false">
    <b>Mechanical Department</b>
    </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
    <li><a class="dropdown-item" href="#">Mechanical Enginneering</a></li>
    <li><a class="dropdown-item" href="#">Mechanical Fitting</a></li>
    <li><a class="dropdown-item" href="#">Metal Fabrication</a></li>
  </ul>
  </div>
  <br>
  <div>
  <button class="btn dept-btn4 dropdown-toggle" type="button" id="dropdownMenuButton4" data-bs-toggle="dropdown" aria-expanded="false">
   <b>Electrical Department</b>
    </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton4">
    <li><a class="dropdown-item" href="#">Electrical Engineering</a></li>
    <li><a class="dropdown-item" href="#">Instrumentation</a></li>
    <li><a class="dropdown-item" href="#">Refrigiration & Conditioning</a></li>
  </ul>
  </div>

  
    
  </div>
</div>
    </div>
  </section>

 
</main>
</body>

<script src="navs.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script> -->

<!-- <script src="script.js"></script> -->


<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
