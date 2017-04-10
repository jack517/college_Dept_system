<?php
include"secure.php";
if(isset($_POST['done'])){
	$aid=$_POST['ed'];
      if(is_array($_FILES)) {
//if(is_uploaded_file($_FILES['userwork']['tmp_name'])) {
$sourcePath = $_FILES['userwork']['tmp_name'];
$targetPath = "studentass/".$_FILES['userwork']['name'];
if($_FILES['userwork']['name']){

if(move_uploaded_file($sourcePath,$targetPath)){ 

 

	$status=1;
	 $upload="INSERT INTO assignmentstudent values"."('','$aid','$targetPath','$status')";
$com=$connection->query($upload);
if($com){
	
header("location:studentpage.php?upload");
?>
	<script>alert("upload successfully");</script>
<?php
	
}
else{
	echo '<script>alert("Failed");</script>';
}




}
}
}
}
?>