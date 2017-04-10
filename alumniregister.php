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
$name=$password=$email=$degree=$designation="";
if(empty($_POST['aname'])|| empty($_POST['apassword'])|| empty($_POST['aemail'])|| empty($_POST['ajobtitle'])|| empty($_POST['aorganization'])|| empty($_POST['aworkexp'])|| empty($_POST['alocation'])){



header("location:home.php?error=4");
}
else{
$name=test_input($_POST["aname"]);
$password=test_input(sha1($_POST["apassword"]));
     $email = test_input($_POST["aemail"]);
$location=test_input($_POST["alocation"]);
$jobtitle=test_input($_POST["ajobtitle"]);
$organization=test_input($_POST["aorganization"]);
$workexp=test_input($_POST["aworkexp"]);


$sql="INSERT into alumni VALUES('','$name','$email','$password','$jobtitle','$organization','$location','$workexp')";
$qury=mysql_query($sql);
if(!$qury){
echo mysql_error();
}
else{
header("location:home.php?success=4");
}
}

?>
