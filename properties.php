<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="propertiescss.css">

    
</head>
<body>
    <div class="container">
        <div class="nav-container">
            <div class="sub-container">
                <div class="logo">
                    <img src="img/logo.png" alt="" onClick="window.open('/homie1/front1.php','_parent')" style="cursor:pointer;">
                </div>
                <form action="searchres.php" method="post">
                    <div class="search">
                        <input type="search" name="searcharea" id="" placeholder="search area" autocomplete="off">
                    </div>
                    <div class="searchbtn">
                        <input type="submit" name="search" id="" value="search">
                    </div>
                </form>
            </div>
        </div>
        <?php
            session_start();
            if(isset($_SESSION['book']))
            {
                $book=$_SESSION['book'];
                echo "<script>alert('$book');</script>";
                unset($_SESSION['book']);
            }
            if(isset($_SESSION['cancel']))
            {
                $cancel=$_SESSION['cancel'];
                echo "<script>alert('$cancel');</script>";
                unset($_SESSION['cancel']);
            }
            if(isset($_SESSION['own']))
            {
                $own=$_SESSION['own'];
                echo "<script>alert('$own');</script>";
                unset($_SESSION['own']);
            }
            include'_dbconnect.php';
            $uid=$_SESSION['id'];
            $sql="SELECT * FROM upload where `id`!=$uid;";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
            {
            echo"  
                <div class='m-container'>
                    <form action='propertiesphp.php' method='post'>  
                        <div class='s-container' id='".$row['rentid']."'>
                            <input type='hidden' name='hiddenid' value='".$row['id']."'>
                            <input type='hidden' name='hiddenrentid' value='".$row['rentid']."'>
                            <div class='upper-container'>
                                <div class='img-container'>
                                        <div class='".$row['rentid']." fades' id='myslides'>
                                            <div class='numbertext'>1 / 3</div>
                                            <img src='upload/".$row['photo']."' style='width:100%'>
                                           
                                        </div>
                                    
                                        <div class='".$row['rentid']." fades'  id='myslides'  style='display:none'>
                                            <div class='numbertext'>2 / 3</div>
                                            <img src='upload/".$row['photo2']."' style='width:100%'>
                                            
                                        </div>
                                    
                                        <div class='".$row['rentid']." fades' id='myslides' style='display:none'>
                                            <div class='numbertext'>3 / 3</div>
                                            <img src='upload/".$row['photo3']."' style='width:100%'>
                                            
                                        </div>
                                    
                                        <a class='prev' onclick='plusSlides(-1,".$row['rentid'].")'>❮</a>
                                        <a class='next' onclick='plusSlides(1,".$row['rentid'].")'>❯</a>
                        
                                </div>
                                <div class='text-container'>
                                    <textarea name='' id='' cols='30' rows='10'>type:".$row['type']."\naddress:".$row['address']."\narea:".$row['area']."\nbedroom:".$row['bedroom']."\nbathroom:".$row['bathroom']."\nfurnishing:".$row['furnishing']."\nprice:".$row['price']."</textarea>
                                </div>
                            </div>
                            <div class='lower-container'>";
                            $qry="select count(*) as cnt  from `book` where `userid`='$uid' and `id`='".$row['id']."' and `rentid`='".$row['rentid']."';";
                            $rs=mysqli_query($conn,$qry);
                            $count=mysqli_fetch_array($rs);
                            if($count['cnt']>0){
                                echo"<input type='submit' value='Booked' name='booked' id='book'>";
                            }
                            else{
                                echo"<input type='submit' value='Book' name='book' id='book'>";
                            }
                                echo"<input type='submit' value='cancel' name='cancel'>
                            </div>
                        </div>
                    </div>
                </form>";
            }
        ?>
            
    </div>
</body>
</html>

</head>
<body>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n,kk) {
        showSlides(slideIndex += n,kk);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n,kk) {
    let i;
    let slides = document.getElementsByClassName(kk);
    let dots = document.getElementsByClassName("dot");
    if (n > slides.length) 
    {
        slideIndex = 1;
    }    
    if (n < 1)
     {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) 
    {
        slides[i].style.display = "none";  
    }
    slides[slideIndex-1].style.display = "block";  
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    dots[slideIndex-1].className += " active";
    }
</script>
