<?php
include'_dbconnect.php';
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $hidden = $_POST['hidden'];
    if($_POST['delete'])
    {
        $query1="DELETE FROM `book` WHERE `rentid`=$hidden;";
        $rs1=mysqli_query($conn,$query1);
        if($rs1){
            $query = "DELETE from `upload` where `rentid` = $hidden;";
            $result = mysqli_query($conn,$query);
            if($result){
                echo"<script>alert('deleted successfully!!');</script>";
            }
            else{
                echo"<script>alert('error, please try again later!!');</script>";
            }
        }
        else{
            echo"<script>alert(' please try again later!!');</script>";
        }
        
    }
}

?>
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
            $uid = $_SESSION['id'];
            $sql="SELECT * FROM `upload` LEFT JOIN `signup` on upload.id=signup.id where upload.id=$uid;";
            $result = mysqli_query($conn,$sql);
            while($row=mysqli_fetch_array($result))
            {
                echo"
                    <div class='m-container'>
                        <form action='list.php' method='post'>
                            <div class='upper-container'>
                                <input type='hidden' name='hidden' value=".$row['rentid'].">
                                <div class='img-container'>
                                        <div class='".$row['rentid']." fade'>
                                            <div class='numbertext'>1 / 3</div>
                                            <img src='upload/".$row['photo']."' style='width:100%'>
                                           
                                        </div>
                                        <div class='".$row['rentid']." fade' style='display:none'>
                                            <div class='numbertext'>2 / 3</div>
                                            <img src='upload/".$row['photo2']."' style='width:100%'  >
                                            
                                        </div>
                                    
                                        <div class='".$row['rentid']." fade'  style='display:none'>
                                            <div class='numbertext'>3 / 3</div>
                                            <img src='upload/".$row['photo3']."' style='width:100%' >
                                            
                                        </div>
                                    
                                        <a class='prev' onclick='plusSlides(-1,".$row['rentid'].")'>❮</a>
                                        <a class='next' onclick='plusSlides(1,".$row['rentid'].")'>❯</a>
                                </div>
                                <div class='text-container'>
                                    <textarea name='' id='' cols='30' rows='10'>type:".$row['type']."\naddress:".$row['address']."\narea:".$row['area']."\nbedroom:".$row['bedroom']."\nbathroom:".$row['bathroom']."\nfurnishing:".$row['furnishing']."\nprice:".$row['price']."</textarea>
                                </div>
                            </div>
                            <div class='lower-container'>
                                <input type='submit' value='delete' name='delete'>
                            </div>
                        </form>
                    </div>
                ";
            }
            
        ?>
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
