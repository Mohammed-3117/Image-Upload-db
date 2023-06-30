<?php
// error_reporting(0);

// $msg="";

if (isset($_POST['upload'])){
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./image/".$filename;

    $db = mysqli_connect("localhost","root","","upload_image");
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";
   echo $sql;
    mysqli_query($db,$sql);
    if(move_uploaded_file($tempname,$folder)){
        echo "<h3>Image Uploaded Sucessfully!</h3>";
    }else{
        echo"<h2>Failed</h2>";
    }
    header ('location:upload.php); 
}

?>