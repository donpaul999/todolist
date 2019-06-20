<?php
$conectare = mysqli_connect("localhost", "root","", "user_todo");

if(!$conectare)
 {
    echo "EROARE!".'</br>';
    die(mysqli_connect_error());
  }

?>
