<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['pwd'];

    $insertquery="insert into login1(username,pawd) values('$name','$pass')";
    $res=mysqli_query($conn,$insertquery);

    if($res)
    {
        ?>
        <script>
            alert ("Data inserted properly")
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            alert ("Data not inserted properly")
        </script>

        <?php
    }
}
?>