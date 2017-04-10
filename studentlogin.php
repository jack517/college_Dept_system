
<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database="mea";
$connection = new mysqli($db_hostname,$db_username,$db_password,$db_database);

if($connection->connect_error) die($connection->connect_error);
session_start();


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

?>
<?php
if(isset($_POST['submit'])){
$rollNo=test_input($_POST['rollnumber']);
$studentpass=test_input(sha1($_POST['password']));

$result="SELECT * from student where rollnumber='$rollNo'and password='$studentpass'";
$run=$connection->query($result);
 if($run->num_rows==1){
 $row=$run->fetch_assoc();
	 $_SESSION['rollnumber']=$row['rollnumber'];
	 $_SESSION['id']=$row['id'];
	 $_SESSION['email']=$row['email'];
	 $_SESSION['semester']=$row['semester'];
	  $_SESSION['fullname']=$row['fullname'];
	 $_SESSION['password']=$row['password'];
	header("location:studentpage.php?page");
}
else{
	$msg="Invalid credintials";
	header("location:home.php?$msg");

}
}
?>
