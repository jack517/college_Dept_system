
*/$("#submit").click(function(){
$.post($("#std").attr("action"),$("#std:input").serializeArray(),function(info){$("#result").html(info);});
clearInput();
});
$("#std").submit(function(){
return false;
});
function clearInput(){
$("#std:input").each(function(){
$(this).val('');
});

}
});
<?php
$con=mysql_connect("localhost","root","");
$db=mysql_select_db("mea",$con);
session_start();

?>
<?php
$stdnameError=$stdpasswordError=$stdemailError=$rollError=$semError=$dobError=$contactError="";
$stdname=$stdpassword=$stdemail=$roll=$sem=$dob=$contact="";
if(empty($_POST["stdname"])){
$stdnameError="name is required";
}
else
{
$stdname=test_input($_POST["stdname"]);
   }
   if(empty($_POST["stdpass"])){
$stdpasswordError="Paasword field is required";
}
else

{
$stdpassword=test_input(sha1($_POST["stdpass"]));
 if(strlen($stdpassword)<6){
$stdpasswordError="Password length must be atleast six";
}
}
if (empty($_POST["stdemail"])) {
     $stdemailError = "Email is required";
   } else {
     $stdemail = test_input($_POST["stdemail"]);
     // check if e-mail address syntax is valid or not
     if  (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$stdemail)) {
       $emailError = "Invalid email format";
     }
 }
if(empty($_POST["rollno"])) {
$rollError= "Rollnumber is required";
}
else {
$roll=test_input($_POST["rollno"]);
}

if(empty($_POST['date'])) {
$dobError= "DOB is required";
}
else {
$dob=test_input($_POST["date"]);
}

if(empty($_POST['num'])) {
$contactError= "DOB is required";
}
else {
$contact=test_input($_POST["num"]);
}
if(empty($_POST['sem'])) {
$semError= "Semester field is required";
}
else {
$sem=$_POST["sem"];
}




function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

$sql="INSERT into student VALUES('','$contact','$stdname','$stdpassword','$stdemail','$roll','$sem')";
$qury=mysql_query($sql);
if(!$qury){
echo mysql_error();
}
else{
echo header("location:home.php?des=1");
}
?>