

<!DOCTYPE html>
<html>
    
        <meta charset="utf-8">
        <title>Sign up></title>
        <link rel="stylesheet" href="style signup.css">
        <body>
            <h1>Sign up</h1>
           
            <div class="first_row">
            <form action="signup.php" method="POST">
                
                <div class="first_name">
                <input type="text" placeholder="First name" name="fname" required>
                </div>

                <div class="last_name">
                    <input type="text" placeholder="Last name" name="lname" required>
                </div>
            </div>
            
            <div class="second_row">
                <div class="username">
                    <input type="text" placeholder="Username" name="uname" required>
                </div>
            </div>

            <div class="third_row">
                <div class="email">
                    <input type="text" placeholder="Email" name="email" required>
                </div>

                <div class = "password">
                    <input type="password" placeholder="Password" name="pass" required>
                </div>
            </div>

            <input class="signupbtn" type="submit" name="submit" value="Sign up">
            </form>
        </body>


</html>

<?php

include 'connection.php';



if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];

    

    $insertquery="insert into sign_up(First_name,Last_name,Username,Email_id,Password) values('$fname','$lname','$uname','$email','$pass');";
    $res=mysqli_query($conn,$insertquery);

    if($res)
    {
        ?>
        <script>
            alert ("Data inserted properly");
            window.location="second.php";
            
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