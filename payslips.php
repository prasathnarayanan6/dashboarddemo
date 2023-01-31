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
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
                                <center>
                                    <div class="icon">
                                        <a href="" class="small-box-footer ms-2 text-danger s" style="text-decoration:none; font-size:29px;" data-bs-toggle="modal" data-bs-target="#exampleModalCenter1"><i class='fa fa-plus'></i></a>
                                    </div>
                                </center>
                                <?php 
         if(isset($_POST['mm'])){
            $ids = $_POST['ids'];
            $month = $_POST['month'];
            $salary = $_POST['salary'];
            $basic = ($salary)/2;
            $da = ($salary)*0.20;
            $hra = ($salary)*0.30;
            $slab = $basic + $da;
            if($slab>15000){
                $pf=15000*0.12;
            }
            else{
                $pf=($slab)*0.12;
            }
            $epfe = $pf;
            $epfr = $pf;
            $esic = $_POST['esic'];
            $tds = $_POST['tds'];
            $hi = $_POST['hi'];
            $sa = $hi + $esic + $epfr;
            $gs = $_POST['gs'];
            $lop = $_POST['lop'];
            $td = $epfe+$esic+$hi;
            $twd = $_POST['twd'];
            $pd = $_POST['pd'];
            $na = $gs-$td;
            $query1 = "insert into deduction(id,month,salary,basic,da,hra,pf,sa,epfe,epfr,esic,tds,hi,gs,lop,td,twd,pd,na) values('$ids', '$month', '$salary', '$basic','$da','$hra','$pf', '$sa', '$epfe', '$epfr', '$esic', '$tds', '$hi', '$gs', '$lop', '$td', '$twd', '$pd', '$na')";
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
                            <?php $id1 = $_GET['id']?>
                            <div class="modal-body">
                              <form method="post">
                                <p><input class="form-control" placeholder="ID" value=<?php echo $id1;?> name="ids"></p>
                                Month:<p><input type="month" class="form-control" placeholder="ID"  name="month"></p>
                                <p><input class="form-control" placeholder="Salary" name="salary"></p>
                                <!-- <p><input class="form-control" placeholder="Basic" name="basic"></p> -->
                                <!-- <p><input class="form-control" placeholder="DA" name="da"></p> -->
                                <!-- <p><input class="form-control" placeholder="Special allowances" name="sa"></p> -->
                                <!-- <p><input class="form-control" placeholder="EPF Employee Con"  name="epfe"></p> 
                                <p><input class="form-control" placeholder="EPF Employer Con"  name="epfr"></p>-->
                                <!-- <p><input class="form-control" placeholder="ESIC" name="esic"></p> -->
                                <p><input class="form-control" placeholder="ESIC" name="esic"></p>
                                <p><input class="form-control" placeholder="TDS" name="tds"></p>
                                <p><input class="form-control" placeholder="health insurance" name="hi"></p>
                                <p><input class="form-control" placeholder="Gross Salary" name="gs"></p>
                                <p><input class="form-control" placeholder="LOP" name="lop"></p>
                                <p><input class="form-control" placeholder="Total working days" name="twd"></p>
                                <p><input class="form-control" placeholder="Paid days" name="pd"></p>
                                <!-- <p><input class="form-control" placeholder="Total Dediction" name="td"></p> -->
                                <!-- <p><input class="form-control" placeholder="Net Amount" name="na"></p>  -->
                                <div style="overflow:auto;">
                                    <div style="float:right;">
                                        <button type="submit" name="mm">Submit</button>
                                    </div>
                                 </div>
                              </form>
                            </div>
                            </div>
                        </div>
                    </div>
         </div>
  <div class="table-responsive">
            <table class="table table-striped table-dark text-white table-hover">
                <thead>
                    <tr>
                        <th colspan="2">ID</th>
                        <th>Month</th>
                        <th>Gross Salary</th>
                        <th>Deduction</th>
                        <th>Net</th>
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
                $id = $_GET['id'];
                $sql = "SELECT * FROM deduction WHERE id='".$id."'";
                $result = mysqli_query($conn, $sql);
                //$result = mysqli_query($db, $sql);
                while($row = mysqli_fetch_array($result))
                {
                ?>
                    <tr>
                        <td colspan="2">
                            <h6><?php echo $row['id']; ?></h6>
                        </td>
                        <td>
                            <h6><?php echo $row['month']; ?></h6>
                        </td>
                        <td>
                            <h6><?php echo $row['gs']; ?></h6></td>
                        <td>
                            <h6><?php echo $row['td']; ?></h6>
                        </td>
                        <td><h6><?php echo $row['na']; ?></h6></td>
                        <td colspan="2"><a href="payslip.php?id=<?php echo $row['id']; ?>&date=<?php echo $row['month']; ?>" class="btn btn-success">Payslip
                        <a href="deletee.php?id=<?php echo $row['id']; ?>&date=<?php echo $row['month']; ?>" class="btn btn-danger"><i class='fa fa-trash'></i>
                    </td>

                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
  </div>
</main>
<!--Main layout-->
</body>
</html>