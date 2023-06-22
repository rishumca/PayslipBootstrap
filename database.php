<?php
 $server = "localhost";
 $username  = "root";
 $password = "";
 $database = "users";


 $conn = mysqli_connect($server, $username, $password, $database);

 echo "connection succesfuly ";


 if(!$conn){
     die("sorry unable to connect to server: ". mysqli_connect_error());
 }else{
     echo "connection was succesfully";
 }




//  $sql = "INSERT INTO `users` (`id`, `Name`, `Emp_code`, `Designation`, `Email address`, `password`) VALUES ( '$Name', '$eEmp_code', '$Designation', '$Email', '$password')";
// $result = mysqli_query($conn, $sql);
//  if ($result){
//     $showalert = true;
//  }



?>