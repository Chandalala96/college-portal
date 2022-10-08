
<?php include_once('admin_header.php'); ?>


<main id="main">
  <div  id="welcome-section"> 
<div class="row">
    <div class="col-sm-6"> 
        <h2><b>Welcome to your Admin Dashboard <i class="fas fa-cogs"></i></b></h2>
    </div>
    <div class="col-sm-6"> 
    <a  class="float-end" href="" style="font-size: 30px; color: black"><i class="fas fa-envelope"></i></a>
  <p class="text-black text-end mt-3"><b><?= $_SESSION["name"] ?></b> <img src="../images/admin.jpg" class="float-end" style="width: 70px; height: 70px; border-radius: 50%;"  /> </p>
  <br>
       
    </div>
  
        </div>
  </div>
  <h2 class="text-center" id="mobile-heading">Welcome to your Admin Dashboard <i class="fas fa-cogs"></i></h2>
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
</body>



<script src="navs.js"></script>

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

  
 <script src="fullCalender.js"></script>

 <!--- chart.js library ---->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

<script type="text/javascript">
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

<!-- <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.3/main.min.js"></script> -->

<!-- <script src="script.js"></script> -->


<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</html>
