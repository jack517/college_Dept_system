
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
$email=test_input($_POST['femail']);
$facultypass=test_input(sha1($_POST['fpassword']));

$result="SELECT * from faculty where email='$email'and password='$facultypass'";
$run=$connection->query($result);
 if($run->num_rows==1){
 $row=$run->fetch_assoc();
	$_SESSION['email']=$row['rollnumber'];
	$_SESSION['fid']=$row['id'];
	$_SESSION['name']=$row['name'];
	header("location:facultypage.php?upload");
}
else{
	$msg="Invalid credintials";
	header("location:home.php?$msg");

}
}
?>