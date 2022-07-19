<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- css file link -->
<link rel="stylesheet" href="style.css">



<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">




<section class="form my-4 mx-5">
                <div class="addContainer ">
                    <div class="row g-0">
                        
                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="font-weigth-bold py-3">Update Profile</h1>
                            <form action="updateuserinfo1.php" method="post" enctype="multipart/form-data">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                    <input type="file" name="file">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="text" name="name" placeholder="username" class="form-control my-3 p-4">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="email" name="email" placeholder="email" class="form-control my-3 p-4">
                                    </div>
                                </div>


                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="submit" name="submit" value="submit" class="btn1 mt-3 mb-5" >
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>