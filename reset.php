<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- css file link -->
<link rel="stylesheet" href="style.css">



<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


<section class="form my-4 mx-5">
                <div class="container ">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="https://source.unsplash.com/550x450/?rooms" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="font-weigth-bold py-3">Reset Password</h1>
                            <form action="reset1.php" method="post">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" name="npassword" placeholder="new password" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                
                               
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" name="cpassword" placeholder="confirm password" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <button type="submit" name="reset" class="btn1 mt-3 mb-5" >Submit</button>
                                    </div>
                                </div>

                               
                            </form>
                        </div>
                    </div>
                </div>
            </section>