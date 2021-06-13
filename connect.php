<?php

$username=$_POST['username'];
$password=$_POST['password'];

//Database connection

$conn= new mysqli('localhost','root','','airline');
if($conn->connect_error){
    die('connection failed: '.$conn->connect_error);

}
else
{
    $stmt=$conn->prepare("insert into login(Username,Password) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo " Registration successfull";
    $stmt->close();
    $conn->close();
}

?>