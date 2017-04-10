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
if(isset($_POST['cname']) && empty($_POST['cname'])|| isset($_POST['cpassword']) &&empty($_POST['cpassword'])||  isset($_POST['cemail']) &&empty($_POST['cemail'])|| isset($_POST['ccompany'])  &&empty($_POST['ccompany'])||  isset($_POST['cdesignation']) && empty($_POST['cdesignation'])){
 


header("location:home.php?error=3");
}
else{
$name=test_input($_POST["cname"]);
$password=test_input(sha1($_POST["cpassword"]));
     $email = test_input($_POST["cemail"]);
$company=test_input($_POST["ccompany"]);
$designation=test_input($_POST["cdesignation"]);


$sql="INSERT into corporate VALUES('','$name','$email','$password','$company','$designation')";
$qury=mysql_query($sql);
if(!$qury){
echo mysql_error();
}
else{
header("location:home.php?success=3");
}
}

?>
