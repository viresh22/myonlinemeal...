<?php 
include('include/config.php');
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Form</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div  class="container">
    <form action="" method="post"></form>
    <h1 class="main_heading">Payment Form</h1>
   

    <form action="" method="post">
    <h2>Contact Information</h2>
    <p>Name:  <input type="text" name="name" required></p>
    <fieldset>
        <legend>Gender</legend>
    <p>
        Male <input type="radio" name="gender" id="male" required>
        Female <input type="radio" name="gender" id="female">
    </p>
    </fieldset>
    <p>Address: <textarea name="address" id="address" cols="100" rows="8"></textarea></p>
    <p>Email: <input type="email" name="email" id="email"></p>
    <p>Pincode: <input type="number" name="number"  id="number"></p>

    <h2>Payment Information</h2>
    <p>Card Type:
      <select name="Card_Type" id="Card_Type">
          <option value="">--Select a Card Type--</option>
          <option value="Visa">Visa</option>
          <option value="Rupay">Rupay</option>
          <option value="MasterCard">MasterCard</option>

      </select>

    </p>
    <p>Card Number <input type="number" name="Card_Number" id="Card_Number">
    </p>
    <p>Expiration Date:  <input type="date" name="exp_date" id="exp_date"></p>
    <p>CVV <input type="password" name="cvv" id="cvv"></p>
   <input type="submit"name="submit" value="Pay Now">
  

</form>
</div>

  
</body>
</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);
//$lang = implode(',' ,$_POST['language']);
/// $pname=$_FILES['photo']['name'];
/// $type=$_FILES['photo']['type'];
 //$size=$_FILES['photo']['size'];
 //$temp=$_FILES['photo']['tmp_name'];
 //if($pname){

// $upload= "images/";
 ///$imgExt=strtolower(pathinfo($name,
//PATHINFO_EXTENSION));
 ///$valid_ext= array('jpg','png','jpeg' );
// $photo= rand(1000,1000000).".".$imgExt;
 //move_uploaded_file($temp,$upload.$photo);
// }
$asd = "insert into payment(name,gender,
address,email,number,Card_Type,Card_Number,exp_date,cvv)
values('$name','$gender','$address','$email','$number','$Card_Type','$Card_Number','$exp_date','$cvv')"; 

$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($asd)
{
echo "<script>;";
echo "window.alert('payment successfully done....!');";
echo 'window.location.href = "Home.php";';
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