<?php
 session_start();

$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database="mea";
$connection = new mysqli($db_hostname,$db_username,$db_password,$db_database);

if($connection->connect_error) die($connection->connect_error);
$usercheck=$_SESSION['name'];
$sql="select * from faculty where name='$usercheck'";
$qury=$connection->query($sql);

$result=$qury->fetch_assoc();
$login_session=$result['id'];

if(!isset($login_session)){
header("location:home.php");
}

?>