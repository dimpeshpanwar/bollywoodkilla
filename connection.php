<?php 
  
$server="localhost";
$user="root";
$pass="";
$mydb="bollywoodkilla";
$conn;


	$conn=new PDO("mysql:host=$server;dbname=$mydb",$user,$pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
?>