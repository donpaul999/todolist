<?php
session_start();
if(isset($_SESSION['loggedin']))
{
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>ToDo List App</title>

    <!-- Lato font -->
    <link href = "https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">

    <!--Stylesheets-->
    <link rel="stylesheet" type = "text/css" href= "resources\css\style.css">
  </head>
  <body>

    <header>
         <input type="text" placeholder="What you need to do..." id="thing">
         <button class = "btn">
           <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"   	 viewBox="0 0 16 16" style="enable-background:new 0 0 16 16;" xml:space="preserve">     <g>     	<g>	<path class="fill" d="M16,8c0,0.5-0.5,1-1,1H9v6c0,0.5-0.5,1-1,1s-1-0.5-1-1V9H1C0.5,9,0,8.5,0,8s0.5-1,1-1h6V1c0-0.5,0.5-1,1-1	s1,0.5,1,1v6h6C15.5,7,16,7.5,16,8z"/></g></svg>
         </button>
    </header>

    <div class="container">
      <!--Unfinished tasks-->
      <ul class="todo" id= "todo"></ul>
      <!-- Finished tasks-->
      <ul class="todo" id="completed"></ul>
    </div>
    <a href = "logout.php" class = "logout"><input type = "button" value="Log out"></a>
  </body>

    <!--Javasript-->
    <script src = "resources\js\main.js"></script>

</html>
<?php
}
  else {
    header("location:login.php");
  }

 ?>
