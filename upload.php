<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
        if(isset($_SESSION['flat']))
        {
            $x= $_SESSION['flat'];
            echo"<script>alert('$x');</script>";
            unset($_SESSION['flat']);
        }
        if(isset($_SESSION['room'])){
            $x= $_SESSION['room'];
            echo"<script>alert('$x');</script>";
            unset($_SESSION['room']);
        }
        if(isset($_SESSION['uploaderror']))
        {
            $x=$_SESSION['uploaderror'];
            echo"<script>alert('$x');</script>";
            unset($_SESSION['uploaderror']);
        }
    ?>
    <div class="container">
        <div class="m-container">
            <form action="uploadphp.php" method="post" enctype="multipart/form-data">
                <center>
                    <label>Type</label>
                    <select name="type" id="types">
                        <option value="Room" onClick="room();">Room</option>
                        <option value="Flat/House" onClick="house();">Flat/House</option>
                    </select>
                </center>
                <div class="room-container" id="xx1" style='display:block'>
                <br>
                <hr>
                <br>
                <table>
                        <tr>
                            <td>
                                Furnishing :
                            </td>   
                            <td>
                                <select name="roomfurnishing" id="roomfurnishing">
                                    <option value="furnished">furnished</option>
                                    <option value="non furnished">non furnished</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                House no. :
                            </td>
                            <td>
                                <input type="text" placeholder="Flat/house No."  name="roomaddress">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Area :
                            </td>
                            <td>
                                <input type="text" name="roomarea">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Price :
                            </td>
                            <td>
                                <input type="text" name="roomprice">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Add Photo :
                            </td>
                            <td>
                                <input type="file" name="roomfile">
                            </td>
                        </tr>            
                    </table>
                    <br>
                    <input type="submit" value="submit" name="submit1" id="submit1">
                </div>
                <div class="house-container" id="xx2" style='display:none'>
                <br>
                <hr>
                <br>
                <table>
                        <tr>
                            <td>
                                Bedroom :
                            </td>
                            <td>
                                <input type="text" name="flatbedroom">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Bathroom:
                            </td>
                            <td>
                                <input type="text" name="flatbathroom">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Furnishing:
                            </td>
                            <td>
                                <select name="flatfurnishing">
                                    <option value="furnished">furnished</option>
                                    <option value="non furnished">non furnished</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                House no.:
                            </td>
                            <td>
                                <input type="text" placeholder="Flat/house No." name="flataddress">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Area:
                            </td>
                            <td>
                                <input type="text" name="flatarea">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Price:
                            </td>
                            <td>
                                <input type="text" name="flatprice">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Add Photo:
                            </td>
                            <td>
                                <br>
                                <input type="file" name="flatfile1">
                                
                                <input type="file" name="flatfile2">
                                <input type="file" name="flatfile3">
                            </td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="submit" name="submit2" id="submit2" >
                </div>
            </form>
        </div>
    </div>
</body>
</html>
<script type="text/JavaScript">
    function room(){
        var e1 = document.getElementById('xx1');
        var e2 = document.getElementById('xx2');
        if(e1.style.display === 'none')
        {
            e2.style.display = 'none';
            e1.style.display = 'block';
        }
    }
    function house(){
        var e1 = document.getElementById('xx1');
        var e2 = document.getElementById('xx2');
        if(e2.style.display === 'none')
        {
            e1.style.display = 'none';
            e2.style.display = 'block';
        }
    }
</script>