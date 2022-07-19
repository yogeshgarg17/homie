<?php
    include '_dbconnect.php';
    session_start();
    $uid=$_SESSION['id'];
    $query1="SELECT `username` FROM `signup` WHERE `id`=$uid;";
    $query2=mysqli_query($conn,$query1);
    $query3=mysqli_fetch_array($query2);
    $username=$query3['username'];
    if(isset($_POST['submit1']))
    {
        $type=$_POST['type'];
        $roomfurnishing=$_POST['roomfurnishing'];
        $roomaddress=$_POST['roomaddress'];
        $roomarea=$_POST['roomarea'];
        $roomprice=$_POST['roomprice'];
        $targetDir = "c:/xampp/htdocs/homie1/upload/";
        $roomfileName = basename($_FILES['roomfile']['name']);  
        $targetfilepath=$targetDir.$roomfileName; 
        $filetype=pathinfo($targetfilepath,PATHINFO_EXTENSION);
        $allowtypes = array('jpg','png','jpeg');
        if(!empty($type) and !empty($roomfurnishing) and !empty($roomaddress) and !empty($roomarea) and !empty($roomprice) and !empty($roomfileName))
        {
            if(in_array($filetype,$allowtypes))
            {
                if(move_uploaded_file($_FILES['roomfile']['tmp_name'],$targetfilepath))
                {
                    $query4="INSERT INTO `upload`(`id`, `username`, `type`, `furnishing`, `address`, `area`, `price`, `photo`,`photo2`,`photo3`, `bedroom`, `bathroom`) VALUES ($uid,'$username','$type','$roomfurnishing','$roomaddress','$roomarea',$roomprice,'$roomfileName',NULL,NULL,NULL,NULL);";
                    mysqli_query($conn,$query4);
                    $_SESSION['room']='Room details successfully uploaded !!';
                    header('location:upload.php');
                }
            }
        }
        else
        {
            $_SESSION['uploaderror']="please enter all fields!";
            header('location:upload.php');
        }
    }
    if(isset($_POST['submit2']))
    {
        echo$type=$_POST['type'];
        echo$flatfurnishing=$_POST['flatfurnishing'];
        echo$flataddress=$_POST['flataddress'];
        echo$flatarea=$_POST['flatarea'];
        echo$flatprice=$_POST['flatprice'];
        echo$flatbedroom=$_POST['flatbedroom'];
        echo$flatbathroom=$_POST['flatbathroom'];
        $targetDir = "c:/xampp/htdocs/homie1/upload/";
        echo$flatfileName1 = basename($_FILES['flatfile1']['name']); 
        echo$flatfileName2 = basename($_FILES['flatfile2']['name']);
        echo$flatfileName3 = basename($_FILES['flatfile3']['name']);
        $targetfilepath1=$targetDir.$flatfileName1; 
        $targetfilepath2=$targetDir.$flatfileName2; 
        $targetfilepath3=$targetDir.$flatfileName3; 

        $filetype1=pathinfo($targetfilepath1,PATHINFO_EXTENSION);
        $targetfilepath1=$targetDir.$flatfileName1; 

        $filetype2=pathinfo($targetfilepath2,PATHINFO_EXTENSION);
        $targetfilepath2=$targetDir.$flatfileName2; 

        $filetype3=pathinfo($targetfilepath3,PATHINFO_EXTENSION);
        $targetfilepath3=$targetDir.$flatfileName3; 
        $allowtypes = array('jpg','png','jpeg');
        if(!empty($type) and !empty($flatfurnishing) and !empty($flataddress) and !empty($flatarea) and !empty($flatprice) and !empty($flatbedroom) and !empty($flatbathroom) and !empty($flatfileName1) and !empty($flatfileName2) and !empty($flatfileName3) )
        {
            if(in_array($filetype1,$allowtypes) and in_array($filetype2,$allowtypes) and in_array($filetype3,$allowtypes))
            {
                if(move_uploaded_file($_FILES['flatfile1']['tmp_name'],$targetfilepath1) and move_uploaded_file($_FILES['flatfile2']['tmp_name'],$targetfilepath2) and move_uploaded_file($_FILES['flatfile3']['tmp_name'],$targetfilepath3))
                {
                    $query5="INSERT INTO `upload`(`id`, `username`, `type`, `furnishing`, `address`, `area`, `price`, `photo`,`photo2`,`photo3`, `bedroom`, `bathroom`) VALUES ($uid,'$username','$type','$flatfurnishing','$flataddress','$flatarea',$flatprice,'$flatfileName1','$flatfileName2','$flatfileName3',$flatbedroom,$flatbathroom)";
                    echo $query5;
                    mysqli_query($conn,$query5);
                    $_SESSION['flat']='Flat/House details successfully uploaded !!';
                    header('location:upload.php');
                }
            }
        }
        else{
            $_SESSION['uploaderror']="please enter all fields!";
            header('location:upload.php');
        }

    }

?>