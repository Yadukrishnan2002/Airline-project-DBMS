<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="UTF-8">
        <title>Flight list </title>
        <link rel="stylesheet" href="style4.css">
        
    </head>

    <body>
        
    
        <div class="list">
            <table width="100%">
               
            <tr>
                
            <th>Snumber </th> 
            <th> Flight name</th>
            <th> Time </th>
            </tr>


           
                                                               
            <div class="disp">
                
                    <?php
                    include 'connection.php';
                    $from= $_SESSION['from'];
                    $to=$_SESSION['to'];
                    $query="select * from flight_details a,flight_schedule b where a.Fl_no=b.Fl_no and b.F_rom='$from' and b.T_o='$to'";
                    $result=mysqli_query($conn,$query);
                    $id=1;
                    while($rows=$result->fetch_assoc())
                    {

                    
                    ?>
               <ul> <tr><td><li><center><?php echo $id; ?> </center></td> <td><center> <?php echo $rows['Fname'] ?> </center></td><td> <center><?php echo $rows['T_ime']  ?>   </center>   </td> <td><button class ="button" value= "<?php echo $rows['Fl_no'] ?>" onclick="document.getElementById('Fno').value=this.value">book</button></li></td></tr>  </ul>
                   <script>
                       function getvalue()
                       {

    
                       var data=document.getElementById("Flightno");
                       document.getElementById("Fno").value=(data);
                    }
                       </script>

                   <?php $id=$id+1;

                    }     
                    ?>   
                                                         
             </table>                                                                                                               
                
                
            
            <form action="fourth.php" method="POST">
            <input class="form-control" type="hidden" id="Fno" name="Fno"  required>
                </div>
           
            <div class="button1">
                
                <input type="submit" name="submit" value="Submit">
              
            </div>

           </form>
           <?php
           if(isset($_POST['submit']))
           {
               $flightno=$_POST['Fno'];

               //selecting price from flight details and storing it in cost
               $query2="select price from flight_details where Fl_no=$flightno ";

                $res=mysqli_query($conn,$query2);
                $row=mysqli_fetch_row($res);
               $_SESSION['cost']=$row[0];
               echo $_SESSION['cost'];
               
               //Inserting username and fl no into passenger status table
               $usname=$_SESSION['us_name'];
               $query3="insert into passenger_status(Username,Fl_id) values('$usname','$flightno')";
               $res2=mysqli_query($conn,$query3);
               
               echo "<script> window.location='fifth.php';</script>";
              
            }
           ?>
        </div>
    </body>
</html>

