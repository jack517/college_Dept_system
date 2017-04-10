
<?php
include_once"fsecure.php";
require_once"headsame.php";
/*if(isset($_GET['uploadsuccess'])){
  echo '<script>alert("upload successfully");</script>';

}*/
?>
<html>
<head>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css" />
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker3.min.css" />

<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.min.js"></script>
</head>
<body>
<div class="conatinerlab" style="width:300px;height:697px;border:1px solid black;top:0;">
 <div class="list-group">
  <a href="facultypage.php?upload" rel="task1" class="list-group-item">Upload Assignment</a>
  <a href="facultypage.php?assignment" rel="task2" class="list-group-item">View Given Assignment
</a>
 <a href="facultypage.php"  class="list-group-item">Edit Profile 
</a>

<a href="logout.php"  class="list-group-item">Logout</a>

</div><!--Edit profile--><?php
if(isset($_GET['upload'])){
?>
  <div class="container" id="task1" style="display:block;">
    
	<div class="column" style="margin-left:300px; margin-top:-120px;">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-5 personal-info">
        <h3>Assignment Detail</h3>
        
        <form class="form-horizontal" id="eventForm" role="form" action="aasignmentupload.php" method="post" enctype="multipart/form-data">
           <div class="form-group">
            <label class="col-lg-3 control-label">Unit Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="chapter" required>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Title:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" placeholder="Title" name="title" required>
            </div>
          </div>
          <div class="form-group">
      <label class="col-md-3 control-label">Select Semester</label>
      <div class="col-md-8">
      <select class="form-control" name="sem" required>
        <option>I</option>
        <option>II</option>
        <option>III</option>
        <option>IV</option>
       <option>V</option>
        <option>VI</option>
       <option>VII</option>
       <option>VIII</option>
       </select>
     </div>
   </div>
          <div class="form-group">
          	<label class="col-md-3 control-label">Upload Assignment:</label>
            <div class="col-md-8">
            
  <input type="file" class="form-control" name="userwork" required>
</div></div>
<div class="form-group">
            <label class="col-md-3 control-label">Start Date:</label>
            <div class="col-md-8">
                       <div class="input-group input-append date" id="startDatePicker">
                <input type="text" class="form-control" name="startDate" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
</div>
</div>
<div class="form-group">
            <label class="col-md-3 control-label">Deadline:</label>
            <div class="col-md-8">
                          <div class="input-group input-append date" id="endDatePicker">
                <input type="text" class="form-control" name="endDate" />
                <span class="input-group-addon add-on"><span class="glyphicon glyphicon-calendar"></span></span>
            </div>
</div>
          </div>


          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Upload" name="upload">
            
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
</div>
<?php

?>
</div>
<?php
}
else  if(isset($_GET['assignment'])){
$assignment=$_GET['assignment'];

  if($assignment==''||$assignment=='1'){
      $assignment1=0;
    }  
    else{
      $assignment1=($assignment*3)-3;
    }
  ?>
<div class="container" id="task2" style="display:block;">
      <?php
    
$query = "select * from assignment where fid='$usercheck' ORDER BY aid desc limit $assignment1,3";

$result = $connection->query($query);
$rows = $result->num_rows;
$count = 0;
?>    <div class="row" style="margin-left:300px;margin-top:-100px;">
      <div class="col-md-8">
        <div class="panel panel-default">
      <div class="panel-heading"><h3>List Of Assignment</h3></div>
            <?php
            
        for($j = $rows ; $j > 0 ; --$j){
 ?> <?php  
         $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
?> <div class="panel-body">

  
          <div class="alert alert-info">
          <label>Chapter:</label><?php echo $row[7];?><br>
          <label> Uploaded:</label><?php echo $row[3];?>
          <label>Deadline:</label><?php  echo $row[4];?><br>
         <label>Assignment Name:</label><a href="download.php?filename=<?php echo $row[2];?>"><?php  echo $row[2];?>(Click to download)</a>
               </div>
             </div>
                <?php
      }
      if($rows==0){
        ?>
        <div class="panel-body">

  
          <div class="alert alert-info">
          <label>No result Found</label>     </div>
             </div>
   

    <?php   }
        
      
       }
    
  

      ?>
    </div>
    </div> 
</div>
</div> 
<?php
$res="Select * from assignment where fid='$usercheck'ORDER BY sem ASC";
$run=$connection->query($res);
$cou=$run->num_rows;
 $numberofpage=$cou/3;
$numberofpage=ceil($numberofpage);
?>
<ul class="pagination" style="margin-left:430px;margin-top:auto; position:absolute;">
  <?php 
  for($b=1;$b<=$numberofpage;$b++){
    ?>
  <li><a href="facultypage.php?assignment=<?php echo $b;?>"><?php echo $b;?></a></li>
  <?php
}

?>
  </ul>


</div>
<script>
$(document).ready(function(){       
        $('.list-group-item').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings(".container").hide();
});
}); 
</script>
<script>
$(document).ready(function() {
    $('#startDatePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the start date field
            $('#eventForm').formValidation('revalidateField', 'startDate');
        });

    $('#endDatePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            $('#eventForm').formValidation('revalidateField', 'endDate');
        });

    $('#eventForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                startDate: {
                    validators: {
                        notEmpty: {
                            message: 'The start date is required'
                        },
                        date: {
                            format: 'MM/DD/YYYY',
                            max: 'endDate',
                            message: 'The start date is not a valid'
                        }
                    }
                },
                endDate: {
                    validators: {
                        notEmpty: {
                            message: 'The end date is required'
                        },
                        date: {
                            format: 'MM/DD/YYYY',
                            min: 'startDate',
                            message: 'The end date is not a valid'
                        }
                    }
                }
            }
        })
        .on('success.field.fv', function(e, data) {
            if (data.field === 'startDate' && !data.fv.isValidField('endDate')) {
                // We need to revalidate the end date
                data.fv.revalidateField('endDate');
            }

            if (data.field === 'endDate' && !data.fv.isValidField('startDate')) {
                // We need to revalidate the start date
                data.fv.revalidateField('startDate');
            }
        });
});
</script>
</body>
</html>