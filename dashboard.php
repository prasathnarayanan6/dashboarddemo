<?php 

require "conn.php"

?>
<?php 
session_start();
require "conn.php";
if(!isset($_SESSION['EmpID']) && !isset($_SESSION['password'])){
    header('location:home.php');
	  die();
}	//header('location:admin_login.php');
?>
<!--  -->

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>dashboard</title>
      <script src="js/bootstrap.bundle.min.js"></script>
      <!-- JavaScript -->
      <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
      <!-- CSS -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
      <!-- Default theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
      <!-- Semantic UI theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
      <!-- Bootstrap theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
      <!-- 
         RTL version
         -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.rtl.min.css"/>
      <!-- Default theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.rtl.min.css"/>
      <!-- Semantic UI theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.rtl.min.css"/>
      <!-- Bootstrap theme -->
      <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.rtl.min.css"/>
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- Boxicons CSS -->
      <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet"/>
      <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
      <style>
         /* Google Fonts - Poppins */
         @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");
         * {
         margin: 0;
         padding: 0;
         box-sizing: border-box;
         font-family: "Poppins", sans-serif;
         }
         body {
         min-height: 100%;
         background: white;
         }
         nav {
         position: fixed;
         top: 0;
         left: 0;
         height: 50px;
         width: 100%;
         display: flex;
         align-items: center;
         background: #fff;
         box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
         }
         nav .logo {
         display: flex;
         align-items: center;
         margin: 0 24px;
         }
         .logo .menu-icon {
         color: #333;
         font-size: 24px;
         margin-right: 14px;
         cursor: pointer;
         }
         .logo .logo-name {
         color: #333;
         font-size: 22px;
         font-weight: 500;
         }
         nav .sidebar {
         position: fixed;
         top: 0;
         left: -100%;
         height: 100%;
         width: 260px;
         padding: 20px 0;
         background-color: #fff;
         box-shadow: 0 5px 1px rgba(0, 0, 0, 0.1);
         transition: all 0.4s ease;
         }
         nav.open .sidebar {
         left: 0;
         }
         .sidebar .sidebar-content {
         display: flex;
         height: 100%;
         flex-direction: column;
         justify-content: space-between;
         padding: 30px 16px;
         }
         .sidebar-content .list {
         list-style: none;
         }
         .list .nav-link {
         display: flex;
         align-items: center;
         margin: 8px 0;
         padding: 14px 12px;
         border-radius: 8px;
         text-decoration: none;
         }
         .lists .nav-link:hover {
         background-color: #4070f4;
         }
         .nav-link .icon {
         margin-right: 14px;
         font-size: 20px;
         color: #707070;
         }
         .nav-link .link {
         font-size: 16px;
         color: #707070;
         font-weight: 400;
         }
         .lists .nav-link:hover .icon,
         .lists .nav-link:hover .link {
         color: #fff;
         }
         .overlay {
         position: fixed;
         top: 0;
         left: -100%;
         height: 1000vh;
         width: 200%;
         opacity: 0;
         pointer-events: none;
         transition: all 0.4s ease;
         background: rgba(0, 0, 0, 0.3);
         }
         nav.open ~ .overlay {
         opacity: 1;
         left: 260px;
         pointer-events: auto;
         }
         input {
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        } 
        textarea{
            padding: 10px;
            width: 100%;
            font-size: 17px;
            font-family: Raleway;
            border: 1px solid #aaaaaa;
        } 


/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #04AA6D;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: lightblue;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}
      </style>
   </head>
   <body>
      <nav class="bg-light">
         <div class="logo">
            <i class="bx bx-menu menu-icon"></i>
            <span class="logo-name">WELCOME ADMIN</span>
         </div>
         <div class="ms-auto">
            <a href="" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1" class="btn btn-success btn-sm">+Deduction</a>
         </div>
         <div class="sidebar">
            <div class="logo">
               <i class="bx bx-menu menu-icon"></i>
               <span class="logo-name">ADMIN</span>
            </div>
            <div class="sidebar-content">
               <ul class="lists">
                  <li class="list">
                     <a href="#" class="nav-link">
                     <i class='bx bxs-dashboard icon'></i>
                     <span class="link">Dashboard</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="attendance.php" class="nav-link">
                     <i class='bx bxs-user-pin icon' ></i>
                     <span class="link">Attendance</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="payroll.php" class="nav-link">
                     <i class='bx bx-money-withdraw icon'></i>
                     <span class="link">Payroll</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="bank.php" class="nav-link">
                     <i class="bx bxs-bank icon"></i>
                     <span class="link">bank</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="salary.php" class="nav-link">
                     <i class="bx bx-message-rounded icon"></i>
                     <span class="link">Salary</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="#" class="nav-link">
                     <i class="bx bx-pie-chart-alt-2 icon"></i>
                     <span class="link">Analytics</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="#" class="nav-link">
                     <i class="bx bx-heart icon"></i>
                     <span class="link">Likes</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="#" class="nav-link">
                     <i class="bx bx-folder-open icon"></i>
                     <span class="link">Files</span>
                     </a>
                  </li>
               </ul>
               <div class="bottom-cotent">
                  <li class="list">
                     <a href="#" class="nav-link">
                     <i class="bx bx-cog icon"></i>
                     <span class="link">Settings</span>
                     </a>
                  </li>
                  <li class="list">
                     <a href="logout.php" class="nav-link">
                     <i class="bx bx-log-out icon"></i>
                     <span class="link">Logout</span>
                     </a>
                  </li>
               </div>
            </div>
         </div>
      </nav>
      <br>
      <section class="overlay"></section>
      <section class="content mt-5">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 col-6">
                  <div class="small-box text-dark mt-2" style="border-radius: 8px; font-weight:500; box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px; background: lightgray;">
                     <div class="inner">
                        <?php
                           // $sql1 = "SELECT count(emp_id) As 'staff' FROM emp";
                           // $result1 = mysqli_query($conn, $sql1);
                           // $row1 = mysqli_fetch_array($result1);
                           // $num1 = $row1['staff'];
                           ?>
                        <h5 class="ms-2"></h5>
                        <p class="ms-2">ADD EMPLOYEE</p>
                        <!-- <span class="bg-danger border border-light rounded-circle"><span class="visually-hidden">New alerts</span></span> -->
                     </div>
                     <center>
                        <div class="icon">
                           <a href="" class="small-box-footer ms-2 text-success s" style="text-decoration:none; font-size:29px;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter"><i class='bx bxs-plus-circle icon'></i></a>
                        </div>
                     </center>
                     <br><br>
                  </div>
               </div>
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
  <!-- <h1>Register:</h1> -->
  <!-- One "tab" for each step in the form: -->
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
                            <!-- <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">submit</button>
                            </div> -->
                        </div>
                    </div>
                </div>
                <?php
                           $query="SELECT * FROM employee";
                           $result=$conn->query($query);
                           $check = mysqli_num_rows($result) > 0;
                           if($check)
                           {
                                while($show=$result->fetch_assoc())
                                {
                        ?>
               <div class="col-lg-3 col-6">
                  <div class="small-box text-dark mt-2" style="border-radius: 8px; font-weight:500; box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px; background: lightgray;">
                    <span class="badge bg-success rounded-pill p-1"><i class='bx bx-check'></i></span>
                    <!-- <input type="submit" class="bg-danger"> -->
                     
                    <!-- <form action="update.php" method="post">
                        <button type="submit" class="badge bg-primary rounded-pill p-1"><i class='bx bxs-edit-alt' ></i>Edit</span>
                    </form> -->
                     <div class="inner">
                        <center>
                            <div class=""><img src="./images/<?=$show['photo'];?>" style="border-radius:05px;" class="img-fluid" width="250" height="250"></img></div>
                            <p class=""><?php echo $show['name'];?> - <?php echo $show['id']; ?></p>
                        </center>
                     </div>
                        <a href="payroll.php?id=<?php echo $show['id']; ?>" class="text-success ms-2"  style="text-decoration:none;">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
               </div>
               <?php
                                    // echo $show['bg'];
                                }
                           }
                           ?>
            </div>
         </div>
         <?php 
         if(isset($_POST['mm'])){
            $ids = $_POST['ids'];
            $month = $_POST['month'];
            $salary = $_POST['salary'];
            $basic = ($salary)/2;
            $da = ($salary)*0.20;
            $hra = ($salary)*0.30;
            $pf =($basic)*0.12;
            $sa = $_POST['sa'];
            $epfe = $pf;
            $epfr = $pf;
            $esic = ($salary)*0.0075;
            $tds = $_POST['tds'];
            $hi = $_POST['hi'];
            $gs = $_POST['gs'];
            $td = $epfe+$esic+$hi;
            $na = $_POST['na'];
            $query1 = "insert into deduction(id,month,salary,basic,da,hra,pf,sa,epfe,epfr,esic,tds,hi,gs,td,na) values('$ids', '$month', '$salary', '$basic','$da','$hra','$pf', '$sa', '$epfe', '$epfr', '$esic', '$tds', '$hi', '$gs', '$td', '$na')";
            if($conn->query($query1)==TRUE){
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
         
         
         
         ?>
         <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Deduction</h5>
                                <button type="button" class="close" data-bs-dismiss="modal" aria-bs-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                              <form method="post">
                                <p><input class="form-control" placeholder="ID" name="ids"></p>
                                Month:<p><input type="month" class="form-control" placeholder="ID"  name="month"></p>
                                <p><input class="form-control" placeholder="Salary" name="salary"></p>
                                <!-- <p><input class="form-control" placeholder="Basic" name="basic"></p> -->
                                <!-- <p><input class="form-control" placeholder="DA" name="da"></p> -->
                                <p><input class="form-control" placeholder="Special allowances" name="sa"></p>
                                <!-- <p><input class="form-control" placeholder="EPF Employee Con"  name="epfe"></p> 
                                <p><input class="form-control" placeholder="EPF Employer Con"  name="epfr"></p>-->
                                <p><input class="form-control" placeholder="ESIC" name="esic"></p>
                                <p><input class="form-control" placeholder="TDS" name="tds"></p>
                                <p><input class="form-control" placeholder="health insurance" name="hi"></p>
                                <p><input class="form-control" placeholder="Gross Salary" name="gs"></p>
                                <!-- <p><input class="form-control" placeholder="Total Dediction" name="td"></p> -->
                                <p><input class="form-control" placeholder="Net Amount" name="na"></p> 
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="submit" name="mm">Previous</button>
                                    </div>
                                 </div>
                              </form>
                            </div>
                            </div>
                        </div>
                    </div>
         </div>
      </section>
      <script>
         const navBar = document.querySelector("nav"),
           menuBtns = document.querySelectorAll(".menu-icon"),
           overlay = document.querySelector(".overlay");
         
         menuBtns.forEach((menuBtn) => {
           menuBtn.addEventListener("click", () => {
             navBar.classList.toggle("open");
           });
         });
         
         overlay.addEventListener("click", () => {
           navBar.classList.remove("open");
         });




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
   </body>
</html> 