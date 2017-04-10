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

if(empty($_POST['fname'])|| empty($_POST['fpassword'])|| empty($_POST['femail'])){



header("location:home.php?error=2");
}
else{
$name=test_input($_POST["fname"]);
$password=test_input(sha1($_POST["fpassword"]));
     $email = test_input($_POST["femail"]);
$degree=test_input($_POST["fdegree"]);
$designation=test_input($_POST["fdesgination"]);


$sql="INSERT into faculty VALUES('','$name','$email','$password','$degree','$designation')";
$qury=mysql_query($sql);
if(!$qury){
echo mysql_error();
}
else{
header("location:home.php?success=faculty+registration");
}
}

?>
