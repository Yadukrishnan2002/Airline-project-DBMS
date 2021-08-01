<?php
error_reporting(0);
$username=$_POST['username'];
$password=$_POST['pwd'];

if(isset($username) || isset($password))
{
    $host="localhost";
    $dbUsername="root";
    $dbPassword="";
    $dbname="airline";

    //creating connection
    $conn= new mysqli($host,$dbUsername,$dbPassword,$dbname);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());

    }else{
        $SELECT="SELECT username FROM login1 where username=? limit=1";
        $INSERT="INSERT into login1 (username,pawd) values(?,?)";

        //prepare statement
        $stmt=$conn->prepare($SELECT);
        $stmt->bind_param("s",$username);
        $stmt->execute();
        $stmt->bind_result($username);
        $stmt->store_result();
        $rnum=$stmt->num_rows;

        if($rnum=0)
        {
            $stmt->close();
            $stmt=$conn->prepare($INSERT);
            $stmt->bind_param("ss",$username,$password);
            $stmt->execute();
            echo "new record inserted successfully";
        }
        else{
            echo " Someone already registered with this username";
        }
        $stmt->close();
        $conn->close();



    }
}
else{
    echo "All fields are required";
    die();
}

?>