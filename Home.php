<?php 
include('include/config.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Best Online Food Delivery Services In India | MyOnlineMeal.com</title>
    <link rel="stylesheet" href="css/style2.css">
    <link rel="stylesheet" href="css/style3.css">
   
</head>
<body>
   <nav id="navbar">
       <div id="logo">
           <img src="images/logo.png" alt="MyOnlineMeal.com">
       </div>

       <ul>
          <li class="item"><a href="#home">Home</a></li>
          <li class="item"><a href="menu.php">Food-Menu</a></li>
          <li class="item"><a href="#">About Us</a></li>
          <li class="item"><a href="#contact">Content Us</a></li>
          <!-- <li  class="item"><a href="web/dashboard.html">Admin</a></li>--->
          <li  class="item"><a href="login.php">Admin</a></li>
         


       </ul>
   </nav>
   <section id="home">
       <h1 class="h-primary">Welcome to MyOnlineMeal</h1>
       
       <button class="btn"> <a href="menu.php">Order Now</button>
   </section>
   <!--<section id="ser">
       <h1 class="h-primary center">Explore Foods</h1>
       <div id="services">
           <div class="box">
               <img src="images/1.jpg" alt="">
               <h2 class="h-secodary">Food Ordering</h2>
               <p  class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod odio, amet aut rerum obcaecati velit alias sit officia facere voluptates hic temporibus enim perferendis perspiciatis, mollitia quae explicabo eius assumenda. Doloremque sit tempore neque nulla nisi at error, aperiam explicabo.</p>
           </div>
       

      
        <div class="box">
            <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
        </div>
   

   
        <div class="box">
            <img src="images/3.jpg" alt="">
            <h2 class="h-secodary">Bulk Ordering</h2>
            <p  class="center">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod odio, amet aut rerum obcaecati velit alias sit officia facere voluptates hic temporibus enim perferendis perspiciatis, mollitia quae explicabo eius assumenda. Doloremque sit tempore neque nulla nisi at error, aperiam explicabo.</p>
        </div>
    </div>--->
      <!-- CAtegories Section Starts Here -->
      <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Foods</h2>

            <a href="category-foods.html">
            <div class="box-3 float-container">
                <img src="images/Pizza.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Pizza</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/burger.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Burger</h3>
            </div>
            </a>

            <a href="#">
            <div class="box-3 float-container">
                <img src="images/momo.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Momo</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->


   </section>
   <section id="contact">
    <h1 class="h-primary center">Contact Us</h1>
    <div id="contact-box">
        <form  method="post">
            <fieldset>
                <legend>Contact Us</legend>
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
                <label for="">message</label>
                <textarea name="message" id="message" cols="90" rows="6" placeholder="--Enter your message--"required></textarea>
            </div>
            <button class="btn" name="submit">Submit</button>
        </fieldset>
        </form>
    </div>
   </section>

   <!-- footer Section Starts Here -->
   <section class="footer">
    <div class="container text-center">
        <p>All rights reserved. Designed By <a href="#">Shraddha Hiremath</a></p>
    </div>
</section>
<!-- footer Section Ends Here -->
</body>
</html>
<?php
if(isset($_POST['submit']))
{
extract($_POST);
//$lang = implode(',' ,$_POST['language']);
 //$pname=$_FILES['photo']['name'];
 //$type=$_FILES['photo']['type'];
 //$size=$_FILES['photo']['size'];
 //$temp=$_FILES['photo']['tmp_name'];
 //if($pname){

 //$upload= "images/";
 //$imgExt=strtolower(pathinfo($name,
//PATHINFO_EXTENSION));
 //$valid_ext= array('jpg','png','jpeg' );
 //$photo= rand(1000,1000000).".".$imgExt;
// move_uploaded_file($temp,$upload.$photo);
// }
$asd = "insert into contacts(name, email,
address,city,mob,message)
values('$name','$email','$address','$city','$mob','$message')"; 

$add = mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($asd)
{
echo "<script>;";
echo "window.alert('Data insert successfully....!');";

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