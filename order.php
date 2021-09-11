<?php 
include('include/config.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>order</title>
    <link rel="stylesheet" href="css/style5.css">
    <link rel="stylesheet" href="css/style3.css">

</head>
<body>
<section id="contact">
    <h1 class="h-primary center">Order</h1>
    <div id="contact-box">
        <form  method="post">
            <fieldset>
                <legend>Order</legend>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name"id="name" placeholder="--enter your name--"required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="email"name="email" placeholder="--Enter your Email Id--"required>
            </div>
            <div class="form-group">
                <label for="">Address</label>
                <textarea name="address" id="" cols="70" rows="4" placeholder="--Enter your Address--"required></textarea>
            </div>
            <div class="form-group">
                <label for="">City</label>
                <select name="city" id="stud_city"required>
                    <option value="">--Select Your City--</option>
                    <option value="solapur">solapur</option>
                    <option value="Mumbai">Mumbai</option>
                    <option value="Pune">Pune</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="">Mob no</label>
                <input type="phone" name="mob"id="name" placeholder="--enter your phone  no--"required>
            </div>
            <div class="form-group">
                <label >food item Name:</label>
                <input type="text" name="iname"id="iname" placeholder="--enter your name--"required>
            </div>
            <div class="form-group">
                <label for="name">Qty</label>
                <input type="text" name="Qty"id="name" placeholder="--enter your name--"required>
            </div>
            <div class="form-group">
                <label for="name">Amount</label>
                <input type="text" name="Amount"id="name" placeholder="--enter your name--"required>
            </div>
            <div class="form-group">
                <label for="name">date</label>
                <input type="date" name="date"id="name" placeholder="--enter your name--"required>
            </div>
            <button class="btn" name="submit">Submit</button>
        </fieldset>
        </form>
    </div>
   </section>
</body>
</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);

$asd = "insert into orders(name, email,
address,city,mob,iname,Qty,Amount,date)
values('$name','$email','$address','$city','$mob','$iname','$Qty','$Amount','$date')"; 

$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($asd)
{
echo "<script>;";
echo "window.alert('Data insert successfully....!');";
echo 'window.location.href = "PaymentForm.php";';
echo "</script>";
}
else
{
echo "<script>;";
echo "window.alert('Data error....!');";
echo "</script>";
}
}
?>