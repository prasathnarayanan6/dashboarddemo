<?php
require "conn.php";
?>
<?php 
session_start();
require "conn.php";
if(!isset($_SESSION['EmpID']) && !isset($_SESSION['password'])){
    header('location:home.php');
	  die();
}	//header('location:admin_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/mm.css">
    <script rel="./js/bootstrap.bundle.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.0/dist/boxicons.js" integrity="sha512-Dm5UxqUSgNd93XG7eseoOrScyM1BVs65GrwmavP0D0DujOA8mjiBfyj71wmI2VQZKnnZQsSWWsxDKNiQIqk8sQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <!--Main Navigation-->
<header>
  <!-- Sidebar -->
  <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-dark">
  <center><a class="navbar-brand" href="#">
        <img src="https://xyma.org.in/utmaps/customer/Logo_Xyma.png" width="50%" alt="MDB Logo"
          loading="lazy" />
      </a></center>
    <div class="position-sticky">
      
      <div class="list-group list-group-flush mx-3 mt-4">
        <a href="index.php" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light mb-2" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
        </a> -->
        <a href="index.php" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light mb-2"><i
            class="fas fa-user fa-fw me-3"></i><span>Employee</span></a>
        <a href="payroll.php" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light"><i
            class="fas fa-money fa-fw me-3"></i><span>Payroll</span></a>
        <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple">
          <i class="fas fa-chart-pie fa-fw me-3"></i><span>SEO</span>
        </a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-chart-bar fa-fw me-3"></i><span>Orders</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-globe fa-fw me-3"></i><span>International</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-building fa-fw me-3"></i><span>Partners</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-calendar fa-fw me-3"></i><span>Calendar</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-users fa-fw me-3"></i><span>Users</span></a>
        <a href="#" class="list-group-item list-group-item-action py-2 ripple"><i
            class="fas fa-money-bill fa-fw me-3"></i><span>Sales</span></a> -->
      </div>
    </div>
  </nav>
<!--Main layout-->
<main style="margin-top: 58px;">
  <div class="container pt-4">
  <div class="table-responsive">
            <table class="table table-striped table-white text-dark table-hover">
                <thead>
                    <tr>
                        <th colspan="2">Designation</th>
                        <th>Name</th>
                        <th>Joined Date</th>
                        <th>Status</th>
                        <th colspan="2">Payslip</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                // error_reporting(0);
                // ini_set('display_errors', 0);
                // ini_set('display_errors', false);

                // $s = $_SESSION['start_month'];
                // $e = $_SESSION['end_month'];
                //$sql= "select e.*,s.desig, s.salary from emp e , salary s where e.emp_id=s.emp_id";
                //$sql ="select * from "
                $sql = "SELECT * FROM employee";
                $result = mysqli_query($conn, $sql);
                //$result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                        <td colspan="2">
                            <h6><?php echo $row['desig']; ?></h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><img class="rounded-circle" src="./images/<?=$row['photo']; ?>" width="30"><span class="ml-2 ms-1"><?php echo $row['name']; ?></span></div>
                        </td>
                        <td><?php echo $row['dj']; ?><br></td>
                        <td class="font-weight-bold"><span class="badge bg-success badge-dot"> </span> Active</td>
                        <td><a href="payslips.php?id=<?php echo $row['id']; ?>" class="btn btn-success">View Payslips</td>
                        <td><i class="fa fa-external-link external-link"></i></td>
                    </tr>
                    <!-- <tr>
                        <td colspan="2">
                            <h6>Hypnotherapy for motivation getting the drive back</h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><img class="rounded-circle" src="https://i.imgur.com/0LKZQYM.jpg" width="30"><span class="ml-2">Maria Sam</span></div>
                        </td>
                        <td>17 Mar, 2020<br></td>
                        <td class="font-weight-bold text-danger">Draft</td>
                        <td>Motivation</td>
                        <td><i class="fa fa-external-link external-link"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h6>Use your reset button to change your vibration</h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><img class="rounded-circle" src="https://i.imgur.com/ZSkeqnd.jpg" width="30"><span class="ml-2">Nancy Nicholas</span></div>
                        </td>
                        <td>15 Mar, 2020<br></td>
                        <td class="font-weight-bold text-danger">Draft</td>
                        <td>Travel &amp; Explorer</td>
                        <td><i class="fa fa-external-link external-link"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h6>All Faith needs feet</h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><img class="rounded-circle" src="https://i.imgur.com/Z6dkoKY.jpg" width="30"><span class="ml-2">Christan M.</span></div>
                        </td>
                        <td>14 Mar, 2020<br></td>
                        <td class="font-weight-bold">Published</td>
                        <td>Technology</td>
                        <td><i class="fa fa-external-link external-link"></i></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <h6>Hypnotherapy for motivation getting the drive back</h6>
                        </td>
                        <td>
                            <div class="d-flex align-items-center"><img class="rounded-circle" src="https://i.imgur.com/qddlYmO.jpg" width="30"><span class="ml-2">Tibo Tune</span></div>
                        </td>
                        <td>12 Mar, 2020<br></td>
                        <td class="font-weight-bold text-danger">Draft</td>
                        <td>Business</td>
                        <td><i class="fa fa-external-link external-link"></i></td>
                    </tr> -->
                    <?php } ?>
                </tbody>
            </table>
        </div>
  </div>
</main>
<!--Main layout-->
</body>
<script>
// ////script
//          var currentTab = 0; // Current tab is set to be the first tab (0)
// showTab(currentTab); // Display the current tab

// function showTab(n) {
//   // This function will display the specified tab of the form...
//   var x = document.getElementsByClassName("tab");
//   x[n].style.display = "block";
//   //... and fix the Previous/Next buttons:
//   if (n == 0) {
//     document.getElementById("prevBtn").style.display = "none";
//   } else {
//     document.getElementById("prevBtn").style.display = "inline";
//   }
//   if (n == (x.length - 1)) {
//     document.getElementById("nextBtn").innerHTML = "Submit";
//   } else {
//     document.getElementById("nextBtn").innerHTML = "Next";
//   }
//   //... and run a function that will display the correct step indicator:
//   fixStepIndicator(n)
// }

// function nextPrev(n) {
//   // This function will figure out which tab to display
//   var x = document.getElementsByClassName("tab");
//   // Exit the function if any field in the current tab is invalid:
//   if (n == 1 && !validateForm()) return false;
//   // Hide the current tab:
//   x[currentTab].style.display = "none";
//   // Increase or decrease the current tab by 1:
//   currentTab = currentTab + n;
//   // if you have reached the end of the form...
//   if (currentTab >= x.length) {
//     // ... the form gets submitted:
//     document.getElementById("regForm").submit();
//     return false;
//   }
//   // Otherwise, display the correct tab:
//   showTab(currentTab);
// }

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByTagName("input");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

// function fixStepIndicator(n) {
//   // This function removes the "active" class of all steps...
//   var i, x = document.getElementsByClassName("step");
//   for (i = 0; i < x.length; i++) {
//     x[i].className = x[i].className.replace(" active", "");
//   }
//   //... and adds the "active" class on the current step:
//   x[n].className += " active";
// }
      </script>
</html>