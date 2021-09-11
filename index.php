<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
-->
<?php 
include('include/config.php');
 ?>
<!DOCTYPE html>
<html lang="zxx">

<!-- Head -->

<head>

    <title> Sign Up </title>

    <!-- Meta-Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">

    <!-- fontawesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="all">

    <!-- google fonts -->
    <link href="//fonts.googleapis.com/css?family=Mukta:300,400,500" rel="stylesheet">

</head>
<!-- //Head -->

<!-- Body -->

<body>

    <section class="main">
        <div class="bottom-grid">
            <div class="logo">
                <h1> <a href="index.html">  Sign Up </a></h1>
            </div>
        </div>
        <!-- register -->
        <div class="w3lhny-register">
            <div class="iconhny">
               <span class="fa fa-user-plus"></span>
             </div>
            <form action="#" method="post" class="register-form">
                <fieldset>
                    <div class="form">
                        <div class="form-row">
                            <span class="fa fa-user"></span>
                           
                            <input type="text" class="form-text" placeholder="Name"  name="username" required="">
                        </div>
                        <div class="form-row">
                            <span class="fa fa-envelope"></span>
                            
                            <input type="email" class="form-text" placeholder="Email Address" name="email" required="">
                        </div>
                        <div class="form-row">
                            <span class="fa fa-lock"></span>
                            
                            <input type="password" class="form-text" placeholder="Password" name="password" required="">
                        </div>
                        <div class="form-row button-login">
                            <button class="btn btn-login" name="signup" >Sign Up</button>
                        </div>
                    </div>
                </fieldset>
                </form>

                <span class="create-account">Or Continue With!</span>

                <div class="social-media">
                    <a href="#facebook" class="fb"><span class="fa fa-facebook"></span></a>
                    <a href="#twitter" class="tw"><span class="fa fa-twitter"></span></a>
                    <a href="#pinterest" class="pi"><span class="fa fa-pinterest"></span></a>
                </div>
                <p class="already">Already have an account <a href="login.php">Sign In</a></p>
        </div>
        <!-- //register -->
        <div class="w3l-copyright">
            <p>© 2020 Workspace Sign Up Form. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a>
            </p>
        </div>
    </section>

</body>
<!-- //Body -->

</html>
<?php

if (isset($_POST['signup']))
 {
extract($_POST);

$username=$_POST['username'];

$email=$_POST['email'];
$password=$_POST['password'];

 $asd = "INSERT INTO signup(username,email,password) VALUES('$username','$email','$password')";
$add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
if($add)
{
echo "<script>;";
echo "window.alert('data insert succesfully');";
echo 'window.location.href="Home.php";';
echo "</script>";

}

else{
echo "<script>;";
echo "data;";
echo "window.alert('data not insert succesfully');";
echo "</script>";
} }
?>