<?php
    include'_dbconnect.php';
    session_start();
    if(isset($_POST['book'])){
        $uid = $_SESSION['id'];//logged-in user
        $id = $_POST['hiddenid'];//upload user
        $rentid=$_POST['hiddenrentid'];
        if($uid==$id)
        {
            $_SESSION['own']="unable to book!";
            header('location:properties.php');
        }
        else
        {
            $qry="select count(*) as cnt from `book` where `id`=$id and `userid`=$uid and `rentid`=$rentid;";
            $rs=mysqli_query($conn,$qry);
            $rw=mysqli_fetch_array($rs);
            if($rw['cnt']>0)
            {
                $_SESSION['book']="Booked already!!";
            }
            else{
                $query="INSERT INTO `book`(`userid`, `id`, `rentid`) VALUES ('$uid','$id','$rentid');";
                echo$query;
                $res =mysqli_query($conn,$query);
                if($res)
                {
                    $_SESSION['book']="Booked successfully!!";
                    header('location:properties.php');
                }
            }
            
        }
        
    }
    if(isset($_POST['cancel'])){
        $uid = $_SESSION['id'];//logged-in user
        $id = $_POST['hiddenid'];//upload user
        $rentid=$_POST['hiddenrentid'];
        $qry="select count(*) as cnt from `book` where `id`=$id and `userid`=$uid and `rentid`=$rentid;";
        $rs=mysqli_query($conn,$qry);
        $rw=mysqli_fetch_array($rs);
        if($rw['cnt']>0)
        {
            $query = "DELETE FROM `book` where `userid`='$uid' and `id`='$id' and `rentid`='$rentid';";
            $res =mysqli_query($conn,$query);
            if($res){
                $_SESSION['cancel']="cancel successfully!!";
                header('location:properties.php');
            }
        }
        else{
            $_SESSION['cancel']="BOOK first!";
            header('location:properties.php');
        }
       
    }
    if(isset($_POST['booked'])){
        header('location:properties.php');
    }
?>