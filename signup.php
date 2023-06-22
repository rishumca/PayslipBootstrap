<?php
$showalert = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$err = "show ";
include 'database.php';
$Name = $_POST["Name"];
$Emp_code = $_POST["Emp_code"];
$Designation = $_POST["Designation"];
$Emailaddress = $_POST["Emailaddress"];
$password = $_POST["password"];

 $sql = "INSERT INTO `users` ( `Name`, `Emp_code`, `Designation`, `Emailaddress`, `password`) VALUES ( '$Name', '$Emp_code', '$Designation', '$Emailaddress', '$password')";
$result = mysqli_query($conn, $sql);
 if ($result){
    $showalert = true;
 }




}


?>







<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>

  <body>


    <?php
    if ($showalert){
        echo '<div class="alert alert-warning" role="alert"><h1>Sign_up<h1>
        </div>
            
        ';
    }
    ?>
 
  

      
   


      

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>


