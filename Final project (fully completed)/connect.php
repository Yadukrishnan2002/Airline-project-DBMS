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
    $stmt=$conn->prepare("INSERT INTO login1(username,pawd) values(?,?)");
    $stmt->bind_param("ss",$username,$password);
    $stmt->execute();
    echo " Registration successfull";
    $stmt->close();
    $conn->close();
}

?>