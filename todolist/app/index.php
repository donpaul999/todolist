<?php
  require 'conectare.php';
?>

 <!DOCTYPE html>
 <html>
   <head>
     <style>
     img[alt="www.000webhost.com"] {
         display: none !important;
     }
     </style>
       <title> To Do List </title>
       <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="shortcut icon" type="image/x-icon" href="icons\logo.png" />
       <link rel="stylesheet" type="text/css" href="resources\css\style.css">
       <script src = "resources\js\password.js"></script>
       <link href = "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
   </head>
   <body>
     <div class="form-wrap">
       <form method="POST" action="signup.php">
           <h1 class="heading">Register</h1>
           <input type="text" name="username" placeholder="Your username" required>
           <input type="text" name="FullName" placeholder="Your Full Name" required>
           <input type="date" name="birthdate" placeholder="Your Birth Date" required>
           <input type="email" name="email" placeholder="Email" required>
           <input type="password" name="password" value="" pattern=".{8,}" title="Must contain at least 8 or more characters" id="password" placeholder="Password" required>
           <input type="checkbox" onclick="showpass()"> <h5 class="heading">Show Password</h5>
           <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" oninput="check(this)" required >
           <span id='message'></span>
           <a href = "signup.php" class= "btn"><input type="submit" id="submit"  value="Sign Up"></a>
           <a href = "login.php" class= "btn"><input type = "button"  value="Log In"></a>
       </form>
     </div>
   </body>
 </html>
