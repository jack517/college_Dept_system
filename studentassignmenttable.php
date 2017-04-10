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
$usersemester=$_SESSION['rollnumber'];
//$usersem=$_SESSION['semester'];
include_once"headsame.php";
?>
<h3>Hello!<?php echo $username;?></h3>

<div class="conatinerlab" style="width:300px;height:663px;border:1px solid black;top:0;">

 <div class="list-group">
  <a href="#" rel="task1" class="list-group-item">Edit Profile</a>
  <a href="studentpage.php?page=" rel="task2" class="list-group-item">Faculty Assignment
</a>
<a href="studentassignmenttable.php?pageassignment" rel="task3" class="list-group-item">Submit Assignment
</a>
<a href="logout.php"  class="list-group-item">Logout</a>


</div>
</div>

<div class="container" style="margin-top:-660px; margin-left:280px;">
	<div class="row">
 <div class="col-md-8">
        <div class="table-responsive">
              
              <table id="mytable" class="table table-bordred">
                   
                   <thead stye="left:20px;">
                  <th>Faculty Name</th>
                    <th>Chapter Name</th>
                     <th>Uplaoded</th>
                     <th>Deadline</th>
                     <th>Upload Assignment</th>
                    
                      
                    </thead>
    <tbody>
    	<?php
    $page=$_GET['pageassignment'];
    if(isset($page)){




    if($page==''||$page=='1'){
      $page1=0;
    }  
    else{
      $page1=($page*7)-7;
    }
}
     $showforstudent="select * from assignment,student where assignment.sem=student.semester and student.rollnumber='$usersemester' ORDER BY aid desc limit $page1,7";
    $result = $connection->query($showforstudent);
 $rows = $result->num_rows;
$count = 0;
for($j = 0 ; $j < $rows ; ++$j){
  $result->data_seek($j);
  $row = $result->fetch_array(MYSQLI_NUM);
?>

    <tr>
    <td><?php echo $row[1];?></td>
    <td><?php echo $row[6];?></td>
    <td><?php echo $row[3];?></td>
    <td><?php echo $row[4];?></td>
    <td><form action="studentsubmit.php" method="post"><input type="file" name="userwork" required></td>
    <td><input  type="submit" name="done" class="btn btn-primary btn-sm"></td></form>
    </tr>

    <?php
}
$res="select * from assignment,student where assignment.sem=student.semester and student.rollnumber='$usersemester' ORDER BY aid desc";
$run=$connection->query($res);
$cou=$run->num_rows;
 $numberofpage=$cou/7;
$numberofpage=ceil($numberofpage);
?>
<ul class="pagination" style="margin-left:400px;margin-top:600px; position:absolute;">
  <?php 
  for($b=1;$b<=$numberofpage;$b++){
    ?>
  <li><a href="studentassignmenttable.php?pageassignment=<?php echo $b;?>"><?php echo $b;?></a></li>
  <?php
}

?>
    </tbody>
       
</table>
        </div>
	</div>
</div>
     </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
    </div>
		
<!--container-->
?>
