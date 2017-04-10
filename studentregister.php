<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("mea",$con);
session_start();


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}?>

<?php
$stdnameError=$stdpasswordError=$stdemailError=$rollError=$semError=$dobError=$contactError="";
$stdname=$stdpassword=$stdemail=$roll=$sem=$dob=$contact="";
if(isset($_POST['stdname'])&&empty($_POST['stdname'])||isset($_POST['stdpass'])&&empty($_POST['stdpass'])||isset($_POST['stdemail'])&&empty($_POST['stdemail'])||isset($_POST['rollno'])&&empty($_POST['rollno'])||isset($_POST['date'])&& empty($_POST['date'])||isset($_POST['num'])&& empty($_POST['num'])||isset($_POST['sem'])&&empty($_POST['sem'])){



header("location:home.php?error=1");
}
else{
$stdname=test_input($_POST["stdname"]);
$stdpassword=test_input(sha1($_POST["stdpass"]));
     $stdemail = test_input($_POST["stdemail"]);
$roll=test_input($_POST["rollno"]);
$dob=test_input($_POST["date"]);
$contact=test_input($_POST["num"]);
$sem=$_POST["sem"];


$sql="INSERT into student VALUES('','$contact','$stdname','$stdpassword','$stdemail','$roll','$sem')";
$qury=mysql_query($sql);
if(!$qury){
echo mysql_error();
}
else{
echo header("location:home.php?success=+stduent+registration");
}
}
?>
