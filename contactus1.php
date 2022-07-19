<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        session_start();
        include '_dbconnect.php';
        $email=$_POST['email'];
        $message=$_POST['message'];
        $btn=$_POST['submit'];
        if($btn)
        {
            $query="INSERT INTO `contactus`( `email`, `message`) VALUES ('$email','$message');";
            $result=mysqli_query($conn,$query);
            if($result)
            {
                $_SESSION['showMsg']="Thank you for contacting us!!";
                header('location:front1.php');
            }
            else
            {
                $_SESSION['showMsg']="Error, please try again!";
                header('location:front1.php');
            }
        }
        
        
    }



?>