<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

 require "conn.php";
 if(isset($_POST['delete']))
 {
       $id=$_POST['id'];

       $query="DELETE FROM employee WHERE id='$id'";
       $query_run = mysqli_query($conn, $query);

       if($query_run)
       {
        echo "<script>
        Swal.fire(
            'Great!',
            'Data has been deleted!',
            'success'
          ).then(function() {
            window.location = 'index.php';
          });
        </script>";
        // header("location:dashboard.php");
       }
       else{ 
        echo "<script>
                Swal.fire(
                    'oops',
                    'Data ain't deleted',
                    'error'
                )
              </script>";
           }
 }
?>