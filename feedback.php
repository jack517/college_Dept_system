<?php
session_start();
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database="mea";
$connection = new mysqli($db_hostname,$db_username,$db_password,$db_database);

if($connection->connect_error) die($connection->connect_error);


include"headsame.php";
if(isset($_POST['send']) && !empty($_POST['title'])){
   
 
    $job=$_POST['title'];
$profile=$_POST['profile'];
$exp=$_POST['exp'];
$userid=$_SESSION['id'];
 $time=date("Y-m-d");
 $upload="INSERT INTO feedback values"."('','$userid','$job','$profile','$exp','$time')";
$com=$connection->query($upload);
if($com){
	?>
	<script>alert("Succefully Submitted");</script>
	
	<?php
}
}

?>
<div class="conatinerlab" style="width:300px;height:693px;box-shadow:3px 3px 3px 3px black;top:0;">

 <div class="list-group">
  <a href="feedback.php" rel="task1" class="list-group-item">Share Your Review/Experineces</a>
  <a href="#" rel="task2" class="list-group-item">View Experiences/Review
</a>

 
 <a href="logout.php" rel="task3" class="list-group-item">LogOut
</a>



</div>
</div>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
        <link href='custom.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

        <div class="container" id="task1" style="margin-top:-500px; margin-left:120px;"display:none;>

            <div class="row">

                <div class="col-lg-8 col-lg-offset-2">

        

                    <form id="contact-form" method="post" action="" role="form">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Job Title *</label>
                                        <input id="form_name" type="text" name="title" class="form-control" placeholder="Please enter your Job-Title *" required="required" data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Profile *</label>
                                        <input id="form_lastname" type="text" name="profile" class="form-control" placeholder="Please enter your Profile*" required="required" data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Description *</label>
                                        <textarea id="form_message" name="exp" class="form-control" placeholder="Description about your work *" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                               
                                <div class="col-md-8">
                                  <center>  <input type="submit" class="btn btn-success btn-send btn-md " name="send" value="Share"></center>
                                </div>
                            </div>
                            </div>
                            
                    </form>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->
        <div class="container" id="task2" style="display:none; max-height:570px;overflow-y:scroll; margin-top:-630px; box-shadow: 5px 5px 5px alicewhite;">

<?php
 $showforstudent="select * from feedback order by id desc";
    $result = $connection->query($showforstudent);
 $rows = $result->num_rows;
$count = 0;
for($j = 0 ; $j < $rows ; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
?>

  <div class="panel-group" style="margin-right:100px;float:right; width:600px; height:auto;box-shadow:10px 10px 10px 10px alicewhite;">
    <div class="panel panel-default">
      <div class="panel-heading"><label>Job-Title:</label><?php echo $row[2];?>
      <br><label>Profile:</label><?php echo $row[3];?><label> Uploaded:</label><?php echo $row[5];?></div>
      <div class="panel-body"style="height:120px;"><?php echo $row[4];
?></div>
    </div>

    
</div>
<?php
}
if($rows==0){
    ?>
    <div class="panel-body" style="margin-left:360px;">

  
          <div class="alert alert-info" style="width:600px;">
          <label>No Reviews Availbale</label> </div>
             </div>
   
<?php
}

?>


    </div>

      </body>
</html>
<script>
$(document).ready(function(){       
        $('.list-group-item').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings(".container").hide();
});
}); 
</script>
