<?php
    
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      include '_dbconnect.php';
      $email=$_POST["email"];
      session_start();
      $_SESSION['email']=$email;
    
      $sqid=$_POST["sques"];
      $ans=$_POST["sans"];
    
      $query="SELECT `id`FROM `signup` WHERE `email`='$email'";
  
      $res = mysqli_query($conn, $query);
      $row = mysqli_fetch_array($res);
      $uid = $row['id'];
      $sql="select count(*) as cnt from `securityanswers` where `id`= $uid and `quesid`='$sqid' and `answer`='$ans' ;";
      $result = mysqli_query($conn, $sql);
      $rows = mysqli_fetch_array($result);
      if ($rows['cnt']==1)
      {
        header("location:reset.php");
        
      }
      else{
        $_SESSION['x']='details not found please enter valid details';
        header("location:forgot.php");
     
      }
    }
?>