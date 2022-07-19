<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- css file link -->
<link rel="stylesheet" href="style.css">



<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<section class="form my-4 mx-5">
<?php
    session_start();
    if(isset($_SESSION['x']))
    {
      $sts=$_SESSION['x'];
      echo "<script>alert('$sts');</script>";
      unset($_SESSION['x']);
    }
?>
                <div class="container ">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="https://source.unsplash.com/550x450/?rooms" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="font-weigth-bold py-3">Forget Password</h1>
                            <form action="forgotphp.php" method="post">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="Email" name="email" placeholder="email" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <select name="sques" id="sq">
                                            <option value="sq1">enter your birth place</option>
                                            <option value="sq2">enter your fav sub</option>
                                            <option value="sq3">enter your fav place</option>
                                        </select>
                                    </div>

                                    <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" name="sans" placeholder="enter your answer" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <button type="submit" name="next" class="btn1 mt-3 mb-5" >Next</button>
                                    </div>
                                </div>

                               
                            </form>
                        </div>
                    </div>
                </div>
            </section>