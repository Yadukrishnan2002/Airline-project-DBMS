<?php

    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="airline";

    $conn= mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
    
    if($conn)
    {
        //echo "Connection successful";
        ?>
        
        <?php
    }
    else{
        //echo "NOt connected";
        die("No connection".mysqli_connect_error() );
    }
?>