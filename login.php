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

    <title>Admin login </title>

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
                            <button class="btn btn-login" name="login" >Login</button>
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
                <p class="already">Already have an account <a href="#">Sign In</a></p>
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
if (isset($_POST['login']))
 {
extract($_POST);
// code...
$username=mysqli_real_escape_string($connect,$_POST['username']);
$email=mysqli_real_escape_string($connect,$_POST['email']);
$password=mysqli_real_escape_string($connect,$_POST['password']);

$log=mysqli_query($connect,"select * from signup where username='$username' and  email='$email' and password='$password'")
or die(mysqli_error($connect));
if (mysqli_num_rows($log)>0)
 {
  $fetch=mysqli_fetch_array($log);
  $_SESSION['id']=$fetch['id'];
  $_SESSION['email']=$fetch['email'];
$_SESSION['password']=$fetch['password']; // code...

echo "<script>";
 echo "alert('login Successful');";
 echo 'window.location.href="web/dashboard.html";';
echo "</script>";

}else
{ echo  "<script>";
echo "alert('login UNSuccessful');";
echo "</script>";


}
}
?>