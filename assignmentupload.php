<?php
include"fsecure.php";

if(isset($_POST['upload'])){
$chapter=$_POST['chapter'];
$title=$_POST['title'];
$sem=$_POST['sem']
$facuid=$_SESSION['fid'];
$time=date("Y-m-d");
$deadline=$_POST['deadline'];
	 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 // new file size in KB
 $new_size = $file_size/1024;  
 // new file size in KB
 
 // make file name in lower case
 $new_file_name = strtolower($file);
 // make file name in lower case
 
 $final_file=str_replace(' ','-',$new_file_name);
 
 if(move_uploaded_file($file_loc,$folder.$final_file))
 {
$upload="INSERT INTO assignment(fid,task,upload date,enddate,sem,chapter,title) values('$facuid','$file_loc','$time','$deadline','$sem','$chapter','$title')";
$com=$connection->

}