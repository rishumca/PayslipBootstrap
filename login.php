<?php
   $server = "localhost";
   $username  = "root";
   $password = "";
   $database = "login";
  
  
   $conn = mysqli_connect($server, $username, $password, $database);
  
   echo "connection succesfuly ";
  
  
   if(!$conn){
       die("sorry unable to connect to server: ". mysqli_connect_error());
   }else{
       echo "connection was succesfully";
   }
   $email = $_POST["email"];
   $password = $_POST["password"];


   $sql = "INSERT INTO `logo` ( `email`, `passsword`, `reg_date`) VALUES ( '$email', '$password', current_timestamp())";  

?>



