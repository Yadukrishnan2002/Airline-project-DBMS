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
        
    <form action="fourth.php" method="POST">
        <div class="list">
            <table width="100%">
               
            <tr>
                
            <th>Snumber </th> 
            <th> Flight name</th>
            <th> Departure </th>
            <th>Arrival</th>
            <th> Price </th>
            <th>Non stop/Direct</th>
            
            </tr>


           
                                                               
            <div class="disp">
                
                    <?php
                    include 'connection.php';
                    $from= $_SESSION['from'];
                    $to=$_SESSION['to'];
                    $date=$_SESSION['date'];
                    $query="select * from flight_details a,flight_schedule b where a.Fl_no=b.Fl_no and b.F_rom='$from' and b.T_o='$to' and b.D_ate='$date'";
                    $result=mysqli_query($conn,$query);
                    $id=1;
                    while($rows=$result->fetch_assoc())
                    {

                    
                    ?>
               <ul> <tr><td><li><center><?php echo $id; ?> </center></td> <td><center> <?php echo $rows['Fname'] ?> </center></td> <td> <center><?php echo $rows['T_ime']  ?>   </center>   </td> <td> <center><?php echo $rows['Arrival']  ?>   </center>   </td> <td><center> <?php echo $rows['price'] ?> </center></td> <td> <center><?php echo $rows['Non stop/ Direct']  ?>   </center>   </td><td><button class ="button" name="btn2" value= "<?php echo $rows['Fl_no'] ?>" onclick="document.getElementById('Fno').value=this.value">Book</button></li><br><br><br></td></tr>  </ul>
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
                
                
            
            
            <input class="form-control" type="hidden" id="Fno" name="Fno"  required>
                </div>
           
            

           </form>
           <?php
           if(isset($_POST['btn2']))
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
               
               echo "<script> window.location='third.php';</script>";
              
            }
           ?>
        </div>
    </body>
</html>

