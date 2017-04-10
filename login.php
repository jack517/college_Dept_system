<?php
$conn=mysql_connect("localhost","root","");
$db=mysql_select_db("mea",$conn);
session_start();

?>
<?php
$msg='';

if($_SERVER["REQUEST_METHOD"] == "POST"){
$id=$_POST["email"];
$pass=sha1($_POST["password"]);


$sql="SELECT email,password FROM student WHERE email='$id' and password='$pass' UNION SELECT email,password FROM faculty WHERE email='$id' and password='$pass' UNION SELECT email,password FROM corporate WHERE email='$id' and password='$pass' UNION SELECT  email,password FROM alumni WHERE email='$id' and password='$pass'";
$qury=mysql_query($sql);
$result=mysql_fetch_array($qury);
if($result[0]>0)
{

  $_SESSION['id']=$result['id'];
$_SESSION['email']=$result['email'];
 header("location: gh.php");

}
else
{
$msg="Wrong Email or Password.Please retry";
header("location: home.php?msg=$msg");
}

}
 ?>