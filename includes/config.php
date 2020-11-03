<?php
    //turns on output buffering , when pages load ususally sends in parts.  This waits till all data loaded
    //then sends.
    ob_start();
    // creates session variables keep there value across different pages
    session_start();

    $timezone = date_default_timezone_set("America/Chicago");
    //                     server,  username  pw  name of DB.
    $con = mysqli_connect("localhost", "root", "", "musify");

    if(mysqli_connect_errno()) { // dot appends
        echo "Failed to connect: " . mysqli_connect_errno();
    }
?>