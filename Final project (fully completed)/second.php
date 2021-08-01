<?php
session_start();
?>

<html>
 <head>
    <meta charset="utf-8">
    <title>Ticket form></title>
    <link rel="stylesheet" href="style2.css">
    
 </head>
 <body>
 <form action = "second.php" method="POST">
  <div class="booking form">
      <label>Flying from</label>
      <input type="text" class="form-control" placeholder="city or Airport" name="fromloc" required>
      <label>Flying to</label>
      <input type="text" class="form-control" placeholder="city or Airport" name="toloc" required>

      <div class="input-grp">
          <label>Departing</label>
          <input type="date" class="form-control select-date" name="dt" required>

      </div>

      <div class="input-grp">
        <label>Adults</label>
        <input type="number" class="form-control" value="1" name="noadult" id="userinput1" required>
      </div>

      <div class="input-grp">
        <label>children</label>
        <input type="number" class="form-control" value="0" name="nochild" id="userinput2">
      </div>
   
      
      <input class="btn" type="submit" onclick="cal()" name="submit" value="Submit">  
   </form>
  </div>
  
<script>
 function cal(){

  var num1=document.getElementById("userinput1").value;
  
  var result=num1 * 5000;
  localStorage.setItem("number",result);

  
  return false;
  
 }
</script>
<?php

if(isset($_POST['submit']))
{
  $_SESSION['noofpass']=$_POST['noadult'];
  $_SESSION['from']=$_POST['fromloc'];
  $_SESSION['to']=$_POST['toloc'];
  $_SESSION['date']=$_POST['dt'];
  echo "<script>window.location='fourth.php'</script>";

}

?>
 </body>
</html>

