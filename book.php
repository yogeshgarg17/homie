<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="list1.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            include '_dbconnect.php';
            session_start();
            if(isset($_SESSION['cancel']))
            {
                $x=$_SESSION['cancel'];
                echo "<script>alert('$x');</script>";
                unset($_SESSION['cancel']);
            }
            $uid = $_SESSION['id'];
            $sql="SELECT * FROM `book` LEFT JOIN `upload` on book.rentid=upload.rentid WHERE `userid`=$uid;";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
            {
                echo"
                    <form action='cancelbook.php' method='post'>
                        <div class='m-container'>
                            <input type='hidden' name='hiddenid' value='".$row['id']."'>
                            <input type='hidden' name='hiddenrent' value='".$row['rentid']."'>
                            <div class='upper-container'>
                                <input type='hidden' name='hidden' value=".$row['rentid'].">
                                <div class='img-container'>
                                    <img src='upload/".$row['photo']."' alt='img'>
                                </div>
                                <div class='text-container'>
                                    <textarea name='' id='' cols='30' rows='10'>type:".$row['type']."\naddress:".$row['address']."\narea:".$row['area']."\nbedroom:".$row['bedroom']."\nbathroom:".$row['bathroom']."\nfurnishing:".$row['furnishing']."\nprice:".$row['price']."</textarea>
                                </div>
                            </div>
                            <div class='lower-container'>
                                <input type='submit' value='cancel' name='cancel'>
                            </div>
                        </div>
                    </form>
                ";
            }
            
        ?>
    </div>
    
</body>
</html>