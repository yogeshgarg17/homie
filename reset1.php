<?php
  if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    session_start();
    echo $_SESSION['email'];
    $email=$_SESSION['email'];
    $password=$_POST["npassword"];
    $repassword=$_POST["cpassword"];
    $query="SELECT `id`FROM `signup` WHERE `email`='$email'";
    $res = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($res);
    $uid = $row['id'];
    echo$uid;
    $sql="UPDATE `signup` SET `password`='$password' WHERE `id`='$uid'";
    $output=mysqli_query($conn,$sql);
    if($output){
      $_SESSION['status']="<script>alert('password updated successfully');</script>";
      header('location:login.php');
    }
  }
?>