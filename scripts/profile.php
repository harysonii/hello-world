<?php

    $con = mysqli_connect("localhost", "root", "", "gothere");
    //check connection...
    if ($con === false) {
        die ("couldn't connect to SQL Server");
    }
    //$dbs = mysqli_select_db($con,"blank") or die("Couldnt connect to database");
    
   $unique = "harysonii@gmail.com";
   $secret = "learning";

    $data = "SELECT * FROM people where people_email='$unique' and people_password='$secret'";
 
    $select = mysqli_query ($con, $data);
    
    $row = mysqli_fetch_array ($select);

    echo json_encode($row);
   
?>