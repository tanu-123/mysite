<?php
$name = $_Post['name'];
$email = $_Post['email'];
$password =  $_Post['password'];
$contact = $_Post['contact'];
$city =  $_Post['city'];
$address = $_Post['address'];
$dbconnect = mysqli_connect('localhost','root','','mysite');
if(mysqli_connect_errno($dbconnect)){
  echo "Failed to connect";
}else{
  echo "connection successfull";
}



 ?>
