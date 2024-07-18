<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $pass = md5($_POST['password']);
   $cpass = md5($_POST['cpassword']);
   $user_type = $_POST['user_type'];

   $select = "SELECT * FROM user_form1 WHERE email = '$email' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['name'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['name'];
         header('location:Cinemaplex 2\index.php');

      }
     
   }else{
      $error[] = 'incorrect email or password!';
   }

};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page | CINEMAPLEX</title>
    <link rel="stylesheet" href="css\style1.css">
</head>
<body>
    <nav>
        <a href="../index.html"><img src="css\logo2.png" alt="logo"></a>
    </nav>
    <div class="form-wrapper">
        <h2>Sign In</h2>
        <form action="" method="post">
            <?php
            if(isset($error)){
               foreach($error as $error){
                  echo '<span class="error-msg">'.$error.'</span>';
               };
            };
            ?>
            <div class="form-control">
                <input type="email" name="email" required placeholder="enter your email">
            </div>
            <div class="form-control">
                <input type="password" name="password" required placeholder="enter your password">
             
            </div>
             <input type="submit" name="submit" value="login now" class="form-btn">
            <div class="form-help"> 
                <div class="remember-me">
                    <input type="checkbox" id="remember-me">
                    <label for="remember-me">Remember me</label>
                </div>
                <a href="https://support.google.com/accounts/troubleshooter/2402620?hl=en" target="_blank">Need help?</a>
            </div>
        </form>
        <p>New to CINEMAPLEX ? <a href="register_form.php">Sign up now</a></p>
        <small>
            This page is protected by Google reCAPTCHA to ensure you're not a bot. 
            <a href="https://support.google.com/recaptcha/?hl=en" target="_blank">Learn more.</a>
        </small>
    </div>
</body>
</html>