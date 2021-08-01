<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login form></title>
        <link rel="stylesheet" href="style.css">
        <body>
       
            <div class =" login-box">
                <form action="index.php" method="POST">
                
                <h1>login</h1>
                <div class = "textbox">
                    <input type="text" placeholder="Username" name="username" id="user"  value="" required>
                </div>

            <div class = "textbox">
                <input type="password" placeholder="Password" name="pwd" value="" required>
            </div>
            <input class="btn" type="submit" onclick="user()" name="submit" value="Sign in">
           
          
            <a href="signup.php">Sign up</a>
          
            </div>
           
            
            
       

        <script>
            function user(){

            var us_name=document.getElementById("user").value;
            localStorage.setItem("char",us_name);
            return false;
            }
            
          
        </script>
    </form>

        </body>
</html>

<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $name=$_POST['username'];
    $pass=$_POST['pwd'];
    $_SESSION["us_name"]=$name;

   $insertquery="select * from sign_up where Username='$name' and Password='$pass';";

    /*$insertquery="insert into login1(username,pawd) values('$name','$pass');";*/
    
    $res=mysqli_query($conn,$insertquery);
    $count=mysqli_num_rows($res);

    if($count)
    {
        ?>
        <script>
            
            window.location="second.php";
            
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            
            window.location="index_invalidpass.php";
        </script>

        <?php
    }
}

?>