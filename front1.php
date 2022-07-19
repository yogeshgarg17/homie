<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">


<!-- header section starts  -->

<header class="header">
<?php
    session_start();
    if(isset($_SESSION['showMsg']))
    {
      $sts=$_SESSION['showMsg'];
      echo "<script>alert('$sts');</script>";
      unset($_SESSION['showMsg']);
    }
    if(isset($_SESSION['loginstatus']))
    {
      $login=$_SESSION['loginstatus'];
      echo "<script>alert('$login');</script>";
      unset($_SESSION['loginstatus']);
    }
?>
    <div class="header-1">
        <div class="logo-img">
          <img src="img/logo.png" alt="" class="logo1">
        </div>
        <div class="search-box">
          <form action="searchres.php" method="post" class="search-form">
            <input type="search" name="searcharea" placeholder="search area" id="search-box" autocomplete="off">
            <input type="submit" value="search" name="search">
            <!-- <label for="search-box" class="fas fa-search"></label> -->
          </form>
        </div>
        <div class="user">
          <?php
            include '_dbconnect.php';
            if(isset($_SESSION['id']))
            {
              $uid=$_SESSION['id'];
              $query="SELECT COUNT(`id`) as cnt FROM `profilephoto` WHERE `id`=$uid;";
              $exe=mysqli_query($conn,$query);
              $output=mysqli_fetch_array($exe);
              if($output['cnt']==1)
              {
                  $sql="SELECT `photo` FROM `profilephoto` where `id`=$uid";
                  $img=mysqli_query($conn,$sql);
                  $element=mysqli_fetch_array($img);
                  $photo=$element['photo'];
                  echo"<img src='upload/".$photo."' onClick=window.open('userdash.php','_parent')>";
              }
              else
              {
                echo"<img src='img/usericon.png' onClick=window.open('userdash.php','_parent')>";
              }
            }
            
          ?>
        </div>
    </div>

    <div class="header-2">
        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#properties">Properties</a>
            <a href="#about us">about us</a>
            <a href="#contact us">contact us</a>
            <!-- <a href="#blogs">home</a> -->
        </nav>
    </div>

</header>





<!-- banner -->

<section class="home" id="home">
  <img src="img/x.png" alt="" srcset="">
</section> 

<!-- Properties -->
<section class="about1 container" id="properties">
<div class="about-text1">
    <span>Our Properties</span>
</div>
</section>

<div class="card-container">

  <div class="card-box">
    <img src="https://source.unsplash.com/550x550/?rooms/house" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="properties.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="https://source.unsplash.com/550x550/?houses/rooms" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="properties.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="https://source.unsplash.com/550x550/?flat/rooms" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="properties.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="https://source.unsplash.com/550x550/?room" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="properties.php" class="btn">More</a>
      </div>
    </div>
  </div>
  <a href="properties.php" class="btn">more</a>

</div>



<!-- about -->

<section class="about container" id="about us">
  <div class="about-img">
    <img src="img/gallery1.jpg" alt="" srcset="">
  </div>
  <div class="about-text">
    <span>About Us</span>
    <h2>We Provide The Best <br>Property For You !</h2>
    <p>An online room rental system will provide the information about Rooms/Flats/Houses which is available for rent.Rooms rental system application will make easy to find the location of rooms/flats/houses.
    It will make easy to upload the location, expected rent, No. of rooms, facilities and other information by landlord.
</p>
  </div>
</section>


<!-- contact -->
<!-- <div class="contact-text">
  <span>Contact Us</span>
</div> -->

<section class="contact-full" id="contact us">

<div class="contact">
  <div class="contact-container">
    <div class="contact-container-col">
      <div class="contact-title">
        <h3>Contact Us</h3>
        <p>we are here to help you! how we can help</p>
      </div>
      <form action="contactus1.php" class="contact-form" method="post">
        <div class="contact-form-item">
          <label for="">Email</label>
          <input type="email" placeholder="email" name="email" id="" autocomplete="off">
        </div>

        <div class="contact-form-item">
          <label for="">Message</label>
          <textarea name="message" placeholder="message" id="" rows="5" autocomplete="off"></textarea>
        </div>
        <input type="submit" name="submit" class="contact-form-submit" value="submit">
      </form>
    </div>

    <div class="contact-container-col">
      <img src="img/logo.png" alt="" srcset="">

      <div class="contact-info-list">
        
        <div class="contact-info-list-item">
          <i class="fas fa-map"></i>
          <p>Jodhpur, Rajasthan-342001</p>
        </div>

        <div class="contact-info-list-item">
          <i class="fas fa-phone"></i>
          <p><a href="#">+91-111 222 3333</a></p>
        </div>

        <div class="contact-info-list-item">
          <i class="far fa-envelope-open"></i>
          <p><a href="#">homie123@gmail.com</a></p>
        </div>

      </div>

    </div>
  </div>
</div>

</section>

<section class="footer">
  <div class="foot-container">
    <div class="foot-box">
      <h3>follow us</h3>
      <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
      <a href="#"><i class="fab fa-twitter"></i>twitter</a>
      <a href="#"><i class="fab fa-instagram"></i>instagram</a>
      <a href="#"><i class="fab fa-linkedin"></i>linkedin</a>
    </div>

  </div>

  <p class="right"> | all <span> rights </span> reserved |</p>

</section>




  