<?php
    $servername = "localhost";
    $username = "root";
    $dbpassword = "";
    $dbname = "contactus";

    $conn = mysqli_connect($servername,$username,$dbpassword,$dbname);

    if($conn)
    {
        // echo "Connected";
    }
    else
    {
        echo "Connection failed".mysqli_connect_error() ;
    }









?>