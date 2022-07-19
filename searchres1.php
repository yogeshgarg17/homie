<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propertiescss.php">    
</head>
<body>
    <div class="container">
        <div class="nav-container">
            <div class="logo">
                <img src="img/logo.png" alt="">
            </div>
            <form action="propertiesphp.php" method="post">
                <div class="search">
                    <input type="search" name="searcharea" id="" placeholder="search area">
                </div>
                <div class="searchbtn">
                    <input type="submit" name="search" id="" value="search">
                </div>
            </form>
            
        </div>
        <div class="m-container">
                <?php 
                    include'_dbconnect.php';
                    if(isset($_POST['search']))
                    {
                        $searchresult=$_POST['searcharea'];
                        $sql="SELECT * FROM upload WHERE `area`='$searchresult';";
                        $result = mysqli_query($conn,$sql);
                        while($row=mysqli_fetch_array($result))
                        {
                                echo"    
                                    <div class='s-container'>
                                        <div class='upper-container'>
                                            <div class='img-container'>
                                                <img src='upload/".$row['photo']."' alt='img'>
                                            </div>
                                            <div class='text-container'>
                                                <textarea name='' id='' cols='30' rows='10'>type:".$row['type']."\naddress:".$row['address']."\narea:".$row['area']."\nbedroom:".$row['bedroom']."\nbathroom:".$row['bathroom']."\nfurnishing:".$row['furnishing']."\nprice:".$row['price']."</textarea>
                                            </div>
                                        </div>
                                        <div class='lower-container'>
                                            
                                            <input type='submit' value='Book' name='book' onClick='login();'>
                                            <input type='submit' value='cancel' name='cancel' onClick='login();'>
                                        </div>
                                    </div>";
                            }
                            
                        }
                    
                ?>
        </div>
    </div>
</body>
</html>
<script>
    function login()
    {
        alert('please login first');
        window.open('/homie1/login.php','_parent');
    }
</script>