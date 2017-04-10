<?php
include "secure.php";
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_database="mea";
$connection = new mysqli($db_hostname,$db_username,$db_password,$db_database);

if($connection->connect_error) die($connection->connect_error);

$useremail= $_SESSION['email'];
$username=$_SESSION['fullname'];


include_once"headsame.php";
?>
<h3>Hello!<?php echo $username;?></h3>

<div class="conatinerlab" style="width:300px;height:663px;border:1px solid black;top:0;">

 <div class="list-group">
  <a href="#" rel="task1" class="list-group-item">Edit Profile</a>
  <a href="studentpage.php?page=" rel="task2" class="list-group-item">Faculty Assignment
</a>
<a href="studentassignmenttable.php" rel="task3" class="list-group-item">Submit Assignment
</a>
<a href="logout.php"  class="list-group-item">Logout</a>


</div>
<!--Edit profile-->
  <div class="container" id="task1" style="display:none;">
    
	<div class="column" style="margin-left:300px; margin-top:-120px;">
      <!-- left column -->
      
      <!-- edit form column -->
      <div class="col-md-5 personal-info">
        <h3>Personal info</h3>
        
        <form class="form-horizontal" role="form">
           <div class="form-group">
            <label class="col-lg-3 control-label">Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $username;?>"readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Email:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $useremail;?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">RollNumber:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $_SESSION['rollnumber'];?>" readonly>
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">CGPA:</label>
            <div class="col-md-5">
              <input class="form-control" type="text" placeholder="9.89">
            </div>
          </div>
          <label class="col-md-4 control-label">Internship:</label>
            <label class="radio-inline"><input type="radio" value="yes" name="opt">Yes</label>
 <label class="radio-inline"> <input type="radio" value="no" name="opt">No</label>
<br><br>
          <div class="form-group" id="Description" style="display:none;">
  <textarea class="form-control" rows="5" id="comment" placeholder="About Your Internship and Experiences"></textarea>
</div>

          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
            
              <input type="reset" class="btn btn-default" value="Cancel">
            </div>
          </div>
        </form>
      </div>
</div>
</div>  
  <!--Faculty ass-->
<div class="container" id="task2" style="display:block;">
      <?php
    $page=$_GET['page'];
    if(isset($page)){




    if($page==''||$page=='1'){
      $page1=0;
    }  
    else{
      $page1=($page*3)-3;
    }
$query = "select * from faculty ORDER BY   id desc  limit $page1,3";

$result = $connection->query($query);
$rows = $result->num_rows;
$count = 0;
for($j = 0 ; $j < $rows ; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);



    ?>
  

    <div class="row" style="margin-left:300px;margin-top:-78px;">
      <div class="col-md-8">
       <div class="panel panel-primary" >
        <div class="panel-heading">
            <h3 class="panel-title"><?php echo $row[1];?></h3>
        </div>
        <div class="panel-body">
<label>E-mail:</label><a href="mailto:<?php echo  $row[2];?>?Subject=Hello%20again" target="_top"><?php echo $row[2];?></a><br>

<label>Designation:</label><?php echo $row[5];?><br>

<label>Designation:</label><?php echo $row[4];?><br>
<label>View Assignment:</label><a href="facultyassignment.php?<?php echo $row[0];?>">View Assignment</a>



        </div>
    </div>
    


</div> 
</div>

<?php
}

$res="Select * from faculty ORDER BY 'id' DESC";
$run=$connection->query($res);
$cou=$run->num_rows;
 $numberofpage=$cou/3;
$numberofpage=ceil($numberofpage);
?>
<ul class="pagination" style="margin-left:430px;margin-top:auto; position:absolute;">
  <?php 
  for($b=1;$b<=$numberofpage;$b++){
    ?>
  <li><a href="studentpage.php?page=<?php echo $b;?>"><?php echo $b;?></a></li>
  <?php
}
}
?>
  </ul>


</div>
</div>

<script>
$(document).ready(function(){
  $('input[type="radio"]').click(function(){
        if($(this).attr("value")=="yes"){
            $("#Description").show();
           }

    if($(this).attr("value")=="no"){
            $("#Description").hide();
           }
        
  });
  });
</script>
<script>
$(document).ready(function(){       
        $('.list-group-item').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings(".container").hide();
});
}); 
</script>

