<?php
include"fsecure.php";
if(isset($_POST['upload'])){
$chapter=$_POST['chapter'];
$title=$_POST['title'];
$sem=$_POST['sem'];
$time=$_POST['startDate'];
$deadline=$_POST['endDate'];
	$file = $_FILES['userwork']['name'];
    $file_loc = $_FILES['userwork']['tmp_name'];
 $file_size = $_FILES['userwork']['size'];
 $file_type = $_FILES['userwork']['type'];
 $folder="ass/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=$new_file_name;
 

if(move_uploaded_file($file_loc,$folder.$final_file)){
	
	 $upload="INSERT INTO assignment values"."('','$usercheck','$final_file','$time','$deadline','$sem','$chapter','$title')";
$com=$connection->query($upload);
if($com){
	
header("location:facultypage.php?upload");
?>
	<script>alert("upload successfully");</script>
<?php
	
}
else{
	echo '<script>alert("Failed");</script>';
}

}
}

?>