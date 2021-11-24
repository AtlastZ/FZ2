<?php
    // Connect to server and select database.
    include("../config/config.php");//login
    // $datetime=date("y-m-d h:i:s"); //date time

    $sql="INSERT INTO reservation(Friends,Name,Date,Time,Request)VALUES('".$_POST["FRIEND"]."','".$_POST["NAME"]."' ,'".$_POST["DATE"]."','".$_POST["TIME"]."','".$_POST["REQUEST"]."')";
    $objQuery = mysqli_query($objCon,$sql);

    //check if query successful
    if($objQuery){
        echo "Successful";
        echo "<BR>";
    // link to view guestbook page
    }
    else {
    echo "ERROR";
    }