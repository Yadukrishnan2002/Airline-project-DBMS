<?php
session_start();
$total= $_SESSION['cost'] * $_SESSION['noofpass'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style5.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Confirm Your Payment</h1>
        <form action="fifth.php" action="POST">
        <div class="first-row">
            <div class="owner">
                <h3>Owner</h3>
                <div class="input-field">
                    <input type="text" required>
                </div>
            </div>
            <div class="cvv">
                <h3>CVV</h3>
                <div class="input-field">
                    <input type="password" required>
                </div>
            </div>
        </div>
        <div class="second-row">
            <div class="card-number">
                <h3>Card Number</h3>
                <div class="input-field" required>
                    <input type="text">
                </div>
            </div>
        </div>
        <div class="third-row">
            <h3>Card Number</h3>
            <div class="selection">
                <div class="date">
                    <select name="months" id="months">
                        <option value="Jan">Jan</option>
                        <option value="Feb">Feb</option>
                        <option value="Mar">Mar</option>
                        <option value="Apr">Apr</option>
                        <option value="May">May</option>
                        <option value="Jun">Jun</option>
                        <option value="Jul">Jul</option>
                        <option value="Aug">Aug</option>
                        <option value="Sep">Sep</option>
                        <option value="Oct">Oct</option>
                        <option value="Nov">Nov</option>
                        <option value="Dec">Dec</option>
                      </select>
                      <select name="years" id="years">
                        <option value="2020">2027</option>
                        <option value="2019">2026</option>
                        <option value="2018">2025</option>
                        <option value="2017">2024</option>
                        <option value="2016">2023</option>
                        <option value="2015">2022</option>
                      </select>
                </div>
                <div class="cards">
                    <img src="mc.png" alt="">
                    <img src="vi.png" alt="">
                    <img src="pp.png" alt="">
                </div>
            </div>    
        </div>
        <div class="amount">
       Total amount = Rs <span><?php echo $total ?> </span>
       </div>
        
        <a href="sixth.html">Confirm</a>
        </form>
    </div>
</body>
</html>