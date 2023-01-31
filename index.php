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
        <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light mb-2" aria-current="true">
          <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Main dashboard</span>
        </a>
        <!-- <a href="#" class="list-group-item list-group-item-action py-2 ripple active">
          <i class="fas fa-chart-area fa-fw me-3"></i><span>Webiste traffic</span>
        </a> -->
        <a href="#" class="list-group-item list-group-item-action py-2 ripple bg-dark text-light mb-2"><i
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
                                <center>
                                    <div class="icon">
                                        <a href="" class="small-box-footer ms-2 text-success s" style="text-decoration:none; font-size:29px;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class='fa fa-plus'></i></a>
                                    </div>
                                </center>
 
  <div class="row g-6 mb-6">
                     <!-- <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body bg-white" style="border-radius:8px;">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Employee</span>
                                        <span class="h3 font-bold mb-0">75</span> 
                                        <div class=""><img src="./images/<?=$show['photo'];?>" style="border-radius:05px;" class="img-fluid" width="50%" height=""></img></div>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>

                                        </div>
                                        <span class="h6 font-bold mb-0">
                                            <form action="delete.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $show['id']; ?>">
                                                <button type="submit" name="delete" class="badge btn btn-danger"><i class='fa fa-trash'></i></button>
                                            </form>
                                        </span>
                                        <span class="h6 font-bold mb-0">
                                            <a href="payroll.php?id=<?php echo $show['id']; ?>" class="badge btn btn-success"  style="text-decoration:none;"><i class="fas fa-eye"></i></a>

                                        </span>
                                    </div>
                                </div> -->
                                <!-- <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i><?php echo $show['id']; ?>
                                    </span>
                                    <span class="text-nowrap text-xs text-muted"><?php echo $show['name']; ?></span>
                                </div>
                                
                            </div>
                        </div>
                    </div> -->
                    <!---mmm--->
                    <?php
               if($_POST['nextBtn'] || isset($_FILES['my_image'])){
                   $id = $_POST['id']; 
                   $name = $_POST['name']; 
                   $uan = $_POST['uan']; 
                  //  $email = $_POST['email']; 
                  //  $phone = $_POST['phone']; 
                   $desig = $_POST['desig']; 
                   $dep = $_POST['dep']; 
                  //  $add = $_POST['add']; 
                  // //  $bg = $_POST['bg']; 
                   $dj = $_POST['dj']; 
                   $bank = $_POST['bank']; 
                   $acc = $_POST['acc']; 
                   $ifsc = $_POST['ifsc']; 
                   $branch = $_POST['branch']; 
                   

                   
                   $filename = $_FILES["my_image"]["name"];
                   $tempname = $_FILES["my_image"]["tmp_name"];
                   $folder = "images/".$filename;
                    // echo $folder;
                   move_uploaded_file($tempname, $folder);

                   $filename1 = $_FILES["doc"]["name"];
                   $tempname1 = $_FILES["doc"]["tmp_name"];
                   $folder1 = "docss/".$filename1;
                    move_uploaded_file($tempname1, $folder1);

            $query = "insert into employee(id,name,uan,desig,dep,dj,bank,acc,ifsc,branch,photo,docs) values('$id', '$name', '$uan', '$desig','$dep', '$dj', '$bank', '$acc', '$ifsc', '$branch', '$filename', '$filename1')";
            if($conn->query($query)==TRUE){
                 echo "<script>
                 Swal.fire(
                     'Great!',
                     'Data has been inserted!',
                     'success'
                   )
                 </script>";
            }
            else{
                echo "<script>
                       Swal.fire({
                             icon: 'error',
                             title: 'Oops...',
                             text: 'some bug seems'
                    
                      })
                </script>";
            }
            
              }
                        // Insert into Database
            
               ?>
                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Employee Details</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                        <form id="regForm" action="" method="post" enctype="multipart/form-data">
                                        
                                            <div class="tab">
                                                <p><input class="form-control" placeholder="ID" oninput="this.className = ''" name="id"></p>
                                                <p><input class="form-control" placeholder="Name..." oninput="this.className = ''" name="name"></p>
                                                <p><input class="form-control" placeholder="UAN Number..." oninput="this.className = ''" name="uan"></p>
                                                <p><input class="form-control" placeholder="Designation..." oninput="this.className = ''" name="desig"></p>
                                                <p><input class="form-control" placeholder="Department..." oninput="this.className = ''" name="dep"></p>
                                            </div>
                                            <div class="tab">
                                                    Date of Joining<p><input type="date" placeholder="date of joining" oninput="this.className = ''" name="dj"></p>
                                                    <!-- <p><input class="form-control" placeholder="Total Working days" oninput="this.className = ''" name="twd"></p>
                                                    <p><input class="form-control" placeholder="Paid Period " oninput="this.className = ''" name="pp"></p> -->
                                            </div>
                                            <div class="tab">
                                                <p><input placeholder="Bank.." oninput="this.className = ''" name="bank"></p>
                                                <p><input placeholder="Account No" oninput="this.className = ''" name="acc"></p>
                                                <p><input placeholder="IFSC Code..." oninput="this.className = ''" name="ifsc"></p>
                                                <p><input placeholder="Branch..." oninput="this.className = ''" name="branch"></p>
                                             </div>
                                             <div class="tab">
                                                     Photo: <p><input type ="file" placeholder="upload photo" oninput="this.className = ''" name="my_image"></p>
                                                     Documents:<p><input type="file" placeholder="Upload Documents" oninput="this.className = ''" name="doc"></p>
   
                                             </div>
                                             <div style="overflow:auto;">
                                                <div style="float:right;">
                                                     <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                                     <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                                </div>
                                            </div>
                                            <!-- Circles which indicates the steps of the form: -->
                                            <div style="text-align:center;margin-top:40px;">
                                                <span class="step"></span>
                                                <span class="step"></span>
                                                <span class="step"></span>
                                                <span class="step"></span>
                                            </div>
                                        </form>
                            </div>
                        </div>
                    </div>
                </div>


                    <!--mmm>-->
  <?php
                           $query="SELECT * FROM employee";
                           $result=$conn->query($query);
                           $check = mysqli_num_rows($result) > 0;
                           if($check)
                           {
                                while($show=$result->fetch_assoc())
                                {
                        ?>
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body bg-white" style="border-radius:8px;">
                                <div class="row">
                                    <div class="col">
                                         <!-- <span class="h6 font-semibold text-muted text-sm d-block mb-2">Employee</span> -->
                                        <!-- <span class="h3 font-bold mb-0">75</span> -->
                                        <div class=""><img src="./images/<?=$show['photo'];?>" style="border-radius:05px;" class="img-fluid rounded-circle" width="100px" height=""></img></div>

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-tertiary text-white text-lg rounded-circle">
                                            <i class="bi bi-people"></i>

                                        </div>
                                        <span class="h6 font-bold mb-0">
                                            <form action="delete.php" method="post">
                                                <input type="hidden" name="id" value="<?php echo $show['id']; ?>">
                                                <button type="submit" name="delete" class="badge btn btn-danger"><i class='fa fa-trash'></i></button>
                                            </form>
                                        </span>
                                        <span class="h6 font-bold mb-0">
                                            <a href="payslips.php?id=<?php echo $show['id']; ?>" class="badge btn btn-success"  style="text-decoration:none;"><i class="fas fa-eye"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i><?php echo $show['name']; ?>
                                    </span><br>
                                    <span class="text-nowrap text-xs text-muted mr-2"><?php echo $show['desig']; ?></span>
                                </div>
                            </div>
                        </div><br>
                    </div>
                    <?php }} ?>
    </div>

  </div>
</main>
<!--Main layout-->
</body>
<script>
////script
         var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
      </script>
</html>