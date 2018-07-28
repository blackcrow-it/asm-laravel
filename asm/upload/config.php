<?php
 $hostname = "localhost";
 $user = "root";
 $pass="";
 $db = "demo";

$con = mysqli_connect($hostname,$user,$pass,$db);
  mysqli_query($con,$db);
  mysqli_set_charset($con,"utf8");

  if($con === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 ?>