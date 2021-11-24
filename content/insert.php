<?php
    // Connect to server and select database.
    include("../config/config.php");//login
    // $datetime=date("y-m-d h:i:s"); //date time

    $sql="INSERT INTO reservation(Friends,Name,Date,Time,Request)VALUES('".$_POST["FRIEND"]."','".$_POST["NAME"]."' ,'".$_POST["DATE"]."','".$_POST["TIME"]."','".$_POST["REQUEST"]."')";
    $objQuery = mysqli_query($objCon,$sql);

    //check if query successful
    if($objQuery){
        header( "location: complete.php" );
        exit(0);
        // echo "Successful";
        // echo "<BR>";
    // link to view guestbook page
    }
    else {
        header("HTTP/1.0 404 Not Found");
        echo "<h1>404 Not Found</h1>";
        echo "The page that you have requested could not be found.";
        exit();
    }
    ?>