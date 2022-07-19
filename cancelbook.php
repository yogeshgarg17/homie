<?php
    include'_dbconnect.php';
    session_start();
    if(isset($_POST['cancel'])){
        $uid = $_SESSION['id'];//logged-in user
        $id = $_POST['hiddenid'];//upload user
        $rentid = $_POST['hiddenrent'];
        $qry="select count(*) as cnt from `book` where `id`=$id and `userid`=$uid and `rentid`=$rentid;";
        $rs=mysqli_query($conn,$qry);
        $rw=mysqli_fetch_array($rs);
        if($rw['cnt']>0)
        {
            $query = "DELETE FROM `book` where `userid`='$uid' and `id`='$id' and `rentid`='$rentid';";
            $res =mysqli_query($conn,$query);
            if($res)
            {
                $_SESSION['cancel']="cancel successfully!!";
                header('location:book.php');
            }
        }
        else{
            $_SESSION['cancel']="BOOK first!";
            header('location:book.php');
        }
       
    }
?>