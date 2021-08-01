<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <title>Personal details</title>
    <link rel="stylesheet" href="style3.css">

    </head> 

    <body>
        <div class="container">
            <div class="title">registration</div>
            <form action="third.php" method="POST">
                <div class="user-details">

                    <!--Entering details -->

                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="First name"  name="first" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Last name" name="second"  required>
                    </div>

                     
                    

                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="First name" name="first2" >
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Last name" name="second2">
                    </div>
                    
                   
                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="First name" name="first3" >
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Last name" name="second3" >
                    </div>
                    
                    

                    <div class="input-box">
                        <span class="details">First name</span>
                        <input type="text" placeholder="First name" name="first4" >
                    </div>
                    <div class="input-box">
                        <span class="details">Last name</span>
                        <input type="text" placeholder="Last name" name="second4" >
                    </div>


                </div>
                
                
                
                
                  
           
            <div class="button">
                
                <input type="submit" name="submit" value="Register">
              
            </div>
            
        </form>
        </div>
    </body>
</html>
    
<?php
include 'connection.php';

if(isset($_POST['submit']))
{
    $us_name=$_SESSION['us_name'];
    $first1=$_POST['first'];
    $last1=$_POST['second'];

    $first2=$_POST['first2'];
    $last2=$_POST['second2'];

    $first3=$_POST['first3'];
    $last3=$_POST['second3'];

    $first4=$_POST['first4'];
    $last4=$_POST['second4'];



    $insertquery1="insert into passenger_details(Username,First_name,Last_name) values('$us_name','$first1','$last1');";
    $insertquery2="insert into passenger_details(Username,First_name,Last_name) values('$us_name','$first2','$last2');";
    $insertquery3="insert into passenger_details(Username,First_name,Last_name) values('$us_name','$first3','$last3');";
    $insertquery4="insert into passenger_details(Username,First_name,Last_name) values('$us_name','$first4','$last4');";
    
    $res=mysqli_query($conn,$insertquery1);
    $res=mysqli_query($conn,$insertquery2);
    $res=mysqli_query($conn,$insertquery3);
    $res=mysqli_query($conn,$insertquery4);
   

    if($res)
    {
        ?>
        <script>
           
            window.location="fifth.php";
            
        </script>

        <?php
    }
    else
    {
        ?>
        <script>
            alert ("Data not inserted properly");
        </script>

        <?php
    }
}

?>