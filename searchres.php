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
            <div class="logo">
                <img src="img/logo.png" alt="" onClick="window.open('/homie1/front1.php','_parent')" style="cursor:pointer;">
            </div>
            
            
        </div>
        <div class="m-container">
            <form action='propertiesphp.php' method='post'>
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
                                        <input type='hidden' name='hiddenid' value='".$row['id']."'>
                                        <input type='hidden' name='hiddenrent' value='".$row['rentid']."'>
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
                                        <div class='lower-container'>
                                            <input type='submit' value='Book' name='book'>
                                            <input type='submit' value='cancel' name='cancel'>
                                        </div>
                                    </div>";
                            }
                            
                        }
                    
                ?>
            </form>
        </div>
    </div>
</body>
</html>
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
    }
</script>
