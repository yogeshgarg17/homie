<?php
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        include "_dbconnect.php";
         $username=$_POST["username"];
         $email=$_POST["email"];
         $createpassword=$_POST["createpassword"];
         $confirmpassword=$_POST["confirmpassword"];
         $sans=$_POST["sans"];
         $sq=$_POST['sques'];
        if(empty($username and $email and $createpassword and $confirmpassword and $sans))
        {
            echo"<script>alert('enter all fields');</script>";
            header('location:sign.php');
            exit();
        }
        else
        {
            $qry="select count(id) as cnt from `signup` where email='$email'";
            $res= mysqli_query($conn,$qry);
            $row= mysqli_fetch_array($res);
            if($row['cnt']>0)
            {

                echo"<script>";
                echo"alert('please enter different email id')";
                echo"</script>";
                header('location:sign.php');
                exit();
            }
            else
           {
                $qry2="select count(id) as cnt from `signup` where username='$username'";
                $res2= mysqli_query($conn,$qry2);
                $row2= mysqli_fetch_array($res2);
                    if($row2['cnt']>0)
                    {
                        echo"<script>";
                        echo"alert('please enter different username')";
                        echo"</script>";
                        header('location:sign.php');
                        exit();
                    }
                    else
                    {
                        $query="INSERT INTO `signup`(`username`, `email`, `password`) VALUES ('$username','$email','$createpassword')";
                        echo$query;
                        $output=mysqli_query($conn,$query);

                        $qry3="select `id` from `signup` where `email`='$email'";
                        $res3=mysqli_query($conn,$qry3);
                        $row3=mysqli_fetch_array($res3);

                        echo$uid=$row3['id'];
                    
                        $sql1="INSERT INTO `securityanswers`(`quesid`, `id`, `answer`) VALUES ('$sq',$uid,'$sans')";
                        $output2=mysqli_query($conn,$sql1);
                        if($output)
                        {
                            if($output2)
                            {
                                echo"hey";
                                session_start();
                                $_SESSION['signup']="<script>alert('signup successfully');</script>";
                                header('location:login.php');
                            }
                        }  
                    }
            }
        }
        
    }
    
?>