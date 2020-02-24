<?php
session_start();
include "users.php";

$email=$_POST["email"];
$password=$_POST["password"];

$cus1=new User(null, null, null,$email,null,null,null,null,null,null,$password,null);
$result= $cus1->login();
$row=$result->fetch();
if($row==null){
      echo "False";
}else{
     // echo "True";

      $_SESSION['username'] = $row['fulName'];
      $_SESSION['user_id'] = $row['users_id'];
      $_SESSION['logged_in'] = true;
      if($row['IsAdmin'] == 1){
            $_SESSION['IsAdmin'] = true;
            header("Location:../../admin.php");
      }
      else{
            $_SESSION['IsAdmin'] = false;  
            header("Location:../../index.php"); 
      }
     
      
}
// header("Location:../index.html");    
?>