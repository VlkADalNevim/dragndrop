<?php

    $dbservername = 'sql305.epizy.com';
    $dbusername = 'epiz_33102010';
    $dbpassword = 'u7Yv29aaRoi';
    $dbname = "epiz_33102010_dragndrop";
    $connection = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbname);
    $connection->set_charset("utf8");
    

    // Check connection
    if(!$connection){
        die('Database connection error : ' .mysql_error());
    }
    
?>