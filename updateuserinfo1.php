<?php
    include '_dbconnect.php';
    $statusMsg = '';    
    session_start();
    $uid=$_SESSION['id'];

    $newemail=$_POST['email'];
    $newusername=$_POST['name'];
    
    $targetDir = "c:/xampp/htdocs/homie1/upload/";
    $fileName = basename($_FILES['file']['name']);
    $_SESSION['filename']=$fileName;
    $targetFilePath = $targetDir.$fileName;
    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

    if(isset($_POST["submit"]) && !empty($_FILES['file']['name']))
    {
        $allowTypes = array('jpg','png','jpeg');
        if(in_array($fileType, $allowTypes))
        {
            if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath))
            {
                $qry="select `photo` from `profilephoto` where `id`=$uid;";
                $rs=mysqli_query($conn,$qry);
                $fetch=mysqli_fetch_array($rs);
                if($fetch['photo'])
                {
                    $update="update `profilephoto` set `photo`='$fileName' where `id`=$uid;";
                    mysqli_query($conn,$update);
                    if($update)
                    {
                        $statusMsg="updated successfully";
                    }
                    else
                    {
                        $statusMsg="something went wrong please try again";
                    }
                }
                else{
                    $userquery="select `username` from `signup` where `id`=$uid;";
                    $res=mysqli_query($conn,$userquery);
                    $user1=mysqli_fetch_array($res);
                    $user=$user1['username'];
                    $insert="insert into `profilephoto`(`id`,`username`,`photo`)values($uid,'$user','$fileName')";
                    mysqli_query($conn,$insert);
                    if($insert)
                    {
                        $statusMsg="The file".$fileName." has been uploaded successfully.";
                        $_SESSION['userinfo']=$statusMsg;
                        header('location:userdash.php');
                    }
                    else
                    {
                        $statusMsg="File upload failef,please try again";
                        $_SESSION['userinfo']=$statusMsg;
                        header('location:userdash.php');
                    }
                }
            }
        }
    }
    
    if(isset($_POST["submit"]) && !empty($newemail)){
        $updateemail="update `signup` set `email`='$newemail' where `id`=$uid";
        mysqli_query($conn,$updateemail);
        if($updateemail){
            $statusMsg = "updated successfully";
        }
        else{
            $statusMsg = "something went wrong, please try again.";
        }
    }
    if(isset($_POST["submit"]) && !empty($newusername)){
        $updateusername="update `signup` set `username`='$newusername' where `id`=$uid";
        mysqli_query($conn,$updateusername);
        $updateusername2="update `profilephoto` set `username`='$newusername' where `id`=$uid";
        mysqli_query($conn,$updateusername2);
        if($updateusername){
            if($updateusername2){
                $statusMsg = "updated successfully";
            }
        }
        else{
            $statusMsg = "something went wrong, please try again.";
        }
    }

    $_SESSION['updateuserinfo']=$statusMsg;
    header('location:userdash.php');
?>