<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<!-- css file link -->
<link rel="stylesheet" href="style.css">



<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<header class="header">

    <div class="header-1">
       <a href="index.php"><div class="fas fa-arrow-alt-circle-left">
       </div>
    </a>

</header>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo"hey";
        include '_dbconnect.php';
        if(isset($_POST['email']))
        {
            $email=$_POST['email'];
            session_start();
            $password=$_POST['password'];
            $query="SELECT * FROM signup WHERE email = '$email' AND PASSWORD ='$password' limit 1;";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_array($result,MYSQLI_NUM);

            if(mysqli_num_rows($result)==1)
            {
                $_SESSION['id']=$row[0];
                $_SESSION['loginstatus']="successfully logged!!";
                echo $_SESSION['loginstatus'];
                header('location:front1.php');
            }
            else
            {
                echo'<script type="text/javascript">';
                echo 'alert("please enter correct e-mail id or password")';
                echo '</script>';
            }
        }
    }

?>


<section class="form my-4 mx-5">
                <div class="container ">
                    <div class="row g-0">
                        <div class="col-lg-5">
                            <img src="https://source.unsplash.com/550x450/?rooms" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-7 px-5 pt-5">
                            <h1 class="font-weigth-bold py-3">Login</h1>
                            <form action="login.php" method="post">
                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="Email" name="email" placeholder="email" class="form-control my-3 p-4" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <input type="password" name="password" placeholder="********" class="form-control my-3 p-4" autocomplete="off">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="col-lg-7">
                                        <button type="submit" name="loginbtn" class="btn1 mt-3 mb-5" >Login</button>
                                    </div>
                                </div>

                                <p><a href="forgot.php">Forgot Password</a></p>
                                <p>Don't have an account? <a href="sign.php">Register here</a> </p>
                            </form>
                        </div>
                    </div>
                </div>
            </section>