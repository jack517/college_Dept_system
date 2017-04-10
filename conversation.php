<?php
include "session.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="chatcss/style.css">
</head>
  <body>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>


<div id="chatbox">
<div id="topmenu"><a href="search1.php"><span class="friends"></span></a>

 <a href="converstaion.php"><span class="friends></span></a><a href="chat.php"><span class="history"></span></a>

<a href="chat.php"><span class="friends"></span></a>
 </div>
<div id="friendslist">


<?php
if(isset($_GET['hash'])&& !empty($_GET['hash'])){
echo "show message";
}
else{
$get_con=mysql_query("SELECT 'hash' 'userone','usertwo' FROM messagegroup WHERE userone='$usercheck' OR usertwo='$usercheck'");
while($run_con=mysql_fetch_array($get_con)){
$hash=$run_con['hash'];
$userone=$run_con['userone'];
$usertwo=$run_con['usertwo'];
if($userone==$usercheck){
$select_id=$userone;
}
else{
$select_id=$usertwo;
}
$userget=mysql_query("SELECT UserName FROM register where UserId='$select_id'");
$run_user=mysql_fetch_array($userget);
$displayusername=$run_user['UserName'];
?>
<div id="friends">


<div class="friend ">

<?php
if(!empty($photo)){
?>
<p><img src="<?php echo $photo; ?>"width="40px"/>
<?php }
else
{
?>
<p><img src="default.jpg"width="40px"/>
<?php
}

?>

&nbsp;&nbsp;
<a href="conversation.php?hash=<?php echo $hash;?>" id="sd"/><strong><?php echo $displayusername;?></strong></a></p>



                <div class="status available"></div>
</div>
<?php
 }}?>
</div>
</div>
</div>
</body>
</html>