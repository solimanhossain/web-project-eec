<?php
   $host="localhost";
   $user="root";
   $password="";
   $db="demo";
   $con = mysqli_connect(host,user,password,db);
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($con,"select email from login where email = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>