<!-- custom css file link  -->
<link rel="stylesheet" href="style.css">


<!-- header section starts  -->

<header class="header">

    <div class="header-1">
        <div class="logo-img">
          <img src="img/logo.png" alt="" class="logo1">
        </div>
        <div class="search-box">
          <form action="searchres1.php" method="post" class="search-form">
              <input type="search" name="searcharea" placeholder="search here..." id="search-box">
              <input type="submit" value="search" name="search">
              <!-- <label for="search-box" class="fas fa-search"></label> -->
          </form>
        </div>
        <div class="user">
            <img src="img/usericon.png" alt="" onClick="window.open('login.php','_parent')">
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
  <img src="img/banner4.png" alt="" srcset="">
</section> 

<!-- Properties -->
<section class="about1 container" id="properties">
<div class="about-text1">
    <span>Our Properties</span>
</div>
</section>

<div class="card-container">

  <div class="card-box">
    <img src="img/gallery1.jpg" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="login.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="img/gallery1.jpg" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="login.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="img/gallery1.jpg" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="login.php" class="btn">More</a>
      </div>
    </div>
  </div>

  <div class="card-box">
    <img src="img/gallery1.jpg" alt="" srcset="">
    <div class="info-card">
      <h3 class="card-title">The Room</h3>
      <span class="card-place">jodhpur rajasthan</span>
      <div class="card-book">
        <a href="login.php" class="btn">More</a>
      </div>
    </div>
  </div>
  <!-- <a href="#" class="btn">more</a> -->

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
      <form action="" class="contact-form">

        <!-- <div class="contact-form-item">
          <label for="">Name</label>
          <input type="text" placeholder="full name" name="" id="">
        </div> -->

        <div class="contact-form-item">
          <label for="">Email</label>
          <input type="email" placeholder="email" name="" id="">
        </div>

        <div class="contact-form-item">
          <label for="">Message</label>
          <textarea name="" placeholder="message" id="" rows="5"></textarea>
        </div>
        
        <button class=contact-form-submit onClick="login();">Submit</button>

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
    <h3>quick links</h3>
      <a href="#home"> <i class="fas fa-angle-right"></i> home</a>
      <a href="#properties"> <i class="fas fa-angle-right"></i> Properties</a>
      <a href="#about us"> <i class="fas fa-angle-right"></i> about us</a>
      <a href="#contact us"><i class="fas fa-angle-right"></i> contact us</a>
      <a href="#blogs"><i class="fas fa-angle-right"></i> home</a>
  </div>

  <div class="foot-box">
    <h3>contact info</h3>
    <a href="#"><i class="fas fa-phone"></i>+91-111 222 3333</a>
    <a href="#"><i class="fas fa-phone"></i>+91-111 222 3333</a>
    <a href="#"><i class="fas fa-envelope-open"></i>homie123@gmail.com</a>
    <a href="#"><i class="fas fa-envelope-open"></i>homie456@gmail.com</a>
    <a href="#"><i class="fas fa-map"></i>jodhpur, rajastham-342001</a>
  </div>

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
<script>
function login()
{
  alert('Please login first!');
}
</script>