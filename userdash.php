<link rel="stylesheet" href="userdashboard.css">
<div class="m-container">
    <div class="navbar">
        <div class="logo">
            <img src="img/logo.png" alt="" srcset="" onClick="window.open('/homie1/front1.php','_parent')" style="cursor:pointer;">
        </div>
        <div class="logout">
            <form action="logout.php" method="post">
                <input type="submit" value="logout" name="logout">
            </form>
        </div>
    </div>
    <div class="container">
        <?php
            session_start();
            if(isset($_SESSION['updateuserinfo'])){
                $status=$_SESSION['updateuserinfo'];
                echo "<script>alert('$status');</script>";
                unset($_SESSION['updateuserinfo']);
            }
            if(isset($_SESSION['upload'])){
                $status=$_SESSION['upload'];
                echo "<script>alert('$status');</script>";
                unset($_SESSION['upload']);
            }
            if(isset($_SESSION['remove'])){
                $status=$_SESSION['remove'];
                echo "<script>alert('$status');</script>";
                unset($_SESSION['remove']);
            }
        ?>
        <div class="s-container">
            <div class="upperContainer">
                <div class="user">
                    <form action="removephoto.php" method="post">
                        <div class="userimg">
                            <?php
                                include '_dbconnect.php';
                                if(isset($_SESSION['id']))
                                {
                                    $uid=$_SESSION['id'];
                                    $query="SELECT COUNT('ID') as cnt FROM `profilephoto` WHERE `id` =$uid;";
                                    $exe = mysqli_query($conn,$query);
                                    $output = mysqli_fetch_array($exe);
                                    if($output['cnt']==1)
                                    {
                                        $sql="SELECT `photo` FROM `profilephoto` where `id` =$uid";
                                        $img = mysqli_query($conn,$sql);
                                        $element = mysqli_fetch_array($img);
                                        $photo = $element['photo'];
                                        echo "<img src='upload/".$photo."', onClick=window.open('/homie1/x.php','_parent') style='cursor:pointer;'/>";
                                    }
                                    else
                                    {
                                        echo"<img src='img/usericon.png'>";
                                    }
                                }
                            ?>
                        </div>
                        <div class="addphoto">
                            <input type="submit" value="Remove Profile Photo" name="remove" id="remove">
                        </div>
                    </form>
                </div>  
                <div class="user2">
                    <div class="username">
                        <?php
                            include '_dbconnect.php';
                            $uid = $_SESSION['id'];
                            $name = "select `username` from `signup` where `id` =$uid;";
                            $username1 = mysqli_query($conn,$name);
                            $element = mysqli_fetch_array($username1);
                            $x=$element['username'];
                            echo "<lable>$x</lable>";
                        ?>

                    </div>
                </div>
                <div class="edit">
                    <a href="updateuserinfo.php">Edit profile</a>
                </div>
            </div>
            <div class="lowerContainer">
                <div class="lowerLeftContainer">
                    <ul>
                        <li><a href="#" onClick="upload();">Upload</a></li>
                        <li><a href="#" onClick="list();">List</a></li>
                        <li><a href="#" onClick="book();">Book</a></li>
                    </ul>
                </div>
                <div class="lowerRightContainer1" id="x1">
                    <div class="formContainer1">
                        <iframe src="upload.php"></iframe>
                    </div>
                </div>
                <div class="lowerRightContainer2" id="x2">
                    <div class="formContainer2">
                        <iframe src="list.php"></iframe>
                    </div>
                </div>
                <div class="lowerRightContainer3" id="x3">
                    <div class="formContainer2">
                        <iframe src="book.php"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function upload()
    {
        var e1 = document.getElementById('x1');
        var e2 = document.getElementById('x2');
        var e3 = document.getElementById('x3');
        e1.style.display='block';
        e2.style.display='none';
        e3.style.display='none';
    }
    function list(){
        var e1 = document.getElementById('x1');
        var e2 = document.getElementById('x2');
        var e3 = document.getElementById('x3');
        e1.style.display='none';
        e2.style.display='block';
        e3.style.display='none';
    }
    function book(){
        var e1 = document.getElementById('x1');
        var e2 = document.getElementById('x2');
        var e3 = document.getElementById('x3');
        e1.style.display='none';
        e2.style.display='none';
        e3.style.display='block';
    }
</script>