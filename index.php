<?php
$server="localhost";
$usernamer="localhost";
$password="localhost";

$name=$_POST['name'];
$email=$_POST['email'];
$desc=$_POST['desc'];


 $sql= "INSERT INTO `contact` (`name`, 
  `email`, `other`, `dt`) VALUES ( $name, 
  $mail, $desc, current_timestamp())"; 
?>