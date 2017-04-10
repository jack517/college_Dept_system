
<?php
if(isset($_GET['error'])){
echo "<script>alert('Please Fill all fields')</script>";
}
else if(isset($_GET['success'])){
echo "<div class='alert alert-info' id='myAlert'><a href='#' class='close'>&times;</a>
    <strong>Your account has successfully created</strong></div>";
//header("location:home.php");
}
else if(isset($_GET['faculty'])){
echo "<div class='alert alert-info' id='myAlert'><a href='#' class='close'>&times;</a>
    <strong>Your account has successfully created</strong></div>";
//header("location:home.php");
}


?>
<!Doctype html>
<html>
<style>
.carousel-inner>.item>img,.carousel-inner>.item>a>img,{
width:70%;
height:auto;
}
.carousel{
width:90%;
height:auto;
margin-top:-500px;}
.fuck{
margin-top:210px;
position:absolute;
}

.ek{
width:1000px;
height:1000px;
}.dropdown-submenu {
    position: relative;
}

.dropdown-submenu .dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: -1px;
}

.fuck{
margin-top:210px;
width:1000px;
}
a:hover .fck{
color:black;
}
.containerdt {
      padding:80px 120px;
	  width:900px;
	  
	  margin-top:-600px;
  margin-left:-120px;}
  



.login-page {
  padding: 5% 0 0;


  width: 360px;
  height:auto;
  margin: auto;
}
.form {
margin-left: 300px;
margin-top:-40px;
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
 width:360px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px; 
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button1 {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button1:hover,.form button1:active,.form button1:focus {
  background: #43A047;
}
.form .message {
  margin: 15 px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form  {
  display: none;
}
.h{
margin-top:-30px;}
.container3 {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0  auto ;
}
.container3:before, .container3:after {
  content: "";
  display: block;
  clear: both;
}
.container3 .info {
  margin: 50px auto;
  text-align: center;
}
.container3 .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container3 .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container3 .info span a {
  color: #000000;
  text-decoration: none;
}
.container3 .info span .fa {
  color: #EF3B3A;
}
.container5{
margin-right:200px;
margin-left:20px;
margin-top:-500px;
width:530px;
height:410px;
border:2px solid black;
}
.container2{
width:1000px;
height:1000px;
margin-left:180px;
margin-right:-50px;
margin-bottom:50px;

border:1px solid black;
}
img{
margin-left:30px;
margin-top:10px;
}
.font{
font-size:40px;
font-weight:300;
line-height:72px;
font-family:'Raleway',sans-serif;
margin-left:280px;
margin-top:-140px;
padding:5px;}
.font2{
font-size:28px;
font-weight:200;
line-height:72px;
font-family:'Raleway',sans-serif;
margin-left:280px;
margin-top:-50px;
color:black;
text-align:center;}


.upper{
background-color:#BA55D3;
width:1000px;
height:230px;
color:white;
}


</style>
<head>
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jquery.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  

</head>
<div class="container2"><div class="upper"><img src="nitrr.jpg" width="200" height="200"><h1 class="font">National Institute Of Technology,Raipur</h1>
<h2 class="font2">(Department Of  Mechanical Engineering)</h2>
</div>
<nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a  class="dropdown-toggle" data-toggle="dropdown" href="#">Facilities<span class="caret"></span></a>
			 <ul class="dropdown-menu">
<li><a href="lab.php">Labs</a></li>
            <li><a href="#">Classrooms</a></li>
			 <li><a href="#">Workshops</a></li>
           <li><a href="#">Library</a></li>
           
            </ul>
			
			</li>&nbsp;&nbsp;
            <li><a class="dropdown-toggle" data-toggle="dropdown"href="#">Student Activities<span class="caret"></span></a>
			 <ul class="dropdown-menu">
<li class="dropdown-submenu"><a href="#" class="test" tabindex="-1">MEA<span class="caret"></span></a>
<ul class="dropdown-menu">
        
<li class="dropdown-submenu"><a tabindex="-1" href="#" class="test">Technical<span class="caret"></span></a>

<ul class="dropdown-menu">
              <li><a href="#">2016</a></li>
              <li><a href="#">2017</a></li>
            </ul>


</li>
         <li class="dropdown-submenu"><a tabindex="-1" href="#" class="test">Cultural<span class="caret"></span></a>

<ul class="dropdown-menu">
              <li><a href="#">2016</a></li>
              <li><a href="#">2017</a></li>
            </ul>


 </ul>


</li>

            <li  class="dropdown-submenu"><a href="#" class="test" tabindex="-1">MotoSports<span class="caret"></span></a>
			<ul class="dropdown-menu">
 
  <li class="dropdown-submenu"><a tabindex="-1" href="#" class="test">SAE<span class="caret"></span></a>
<ul class="dropdown-menu">
 

              <li><a href="#">BAJA</a></li>
              <li><a href="#">SUPRA</a></li>
			  <li><a href="#">QUAD TORC</a></li>
              <li><a href="#">EFFICINCY CYCLE</a></li>
           
            </ul>
			<li><a href="#">ASME</a></li>
              
</ul>
</li>
      
			
			
			</ul>
			</li>
			<li><a href="#">Faculty</a></li>&nbsp;&nbsp;
            
			<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Projects<span class="caret"></span></a>
    <ul class="dropdown-menu">
<li><a href="#">Research Projects</a></li>
            <li><a href="#">Student Projects</a></li>
            </ul>	</li>&nbsp;&nbsp;
			<li><a href="#">Placement and Internship</a></li>&nbsp;&nbsp;
			<li><a href="#">Blogs</a></li>&nbsp;&nbsp;
			<li><a href="feedback.php">Feedback</a></li>&nbsp;&nbsp;
			 <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Others<span class="caret"></span></a>
			<ul class="dropdown-menu">
<li><a href="#">Scholarship</a></li>
            <li><a href="#"></a></li>
			 <li><a href="#">ISNEE</a></li>
           
            </ul>
			
			
			</li>&nbsp;&nbsp;
           
			
             <li><a href="#" class="dropdown-toggle" data-toggle="dropdown">LogIn<span class="caret"></span></a>
      <ul class="dropdown-menu">
<li><a href="#" rel="lg1">Alumni LogIn</a></li>
            <li><a href="#" rel="lg2" >Corporate LogIn</a></li>
       <li><a href="#" rel="lg3">Faculty LogIn</a></li>
           <li><a href="#" rel="lg4">Student LogIn</a></li>
           
            </ul>
      
      
      </li>&nbsp;&nbsp;
            <li>
                        </li>
          
		  </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
	<div class="ek">
  <div class="login-page">
  <div class="form">
    <form class="register-form" id="std" method="post" action="studentregister.php">
<h1>Student Registration</h1>
      <input type="text" class="form-control" placeholder=" Full Name"name="stdname"/>

      <input type="password" class="form-control" placeholder="password" name="stdpass" />

      <input type="email"  class="form-control"placeholder="email address" name="stdemail" />

	  <input type="text"  class="form-control"placeholder="Roll Number" name="rollno"/>

	  
	   <select class="form-control" name="sem"  >
	   <option>Semester</option>
	   <option>I</option>
	   <option>II</option>
	   <option>III</option>
	  <option>IV</option>
	   <option>V</option>
	   <option>VI</option>
	   <option>VII</option>
	   <option>VIII</option>
	    </select><br>

	  <input type="date" class="form-control" placeholder="Date Of Birth" name="date" />

      <input type="text"  class="form-control"placeholder="Contact" name="num" />
      <button  id="submit" name="submit"class="btn btn-success btn-block btn-lg">Register</button>
          
	  </form>


	 <form class="register-form" id="alm" method="post" action="alumniregister.php">
<h1 class="h">Alumni Registration</h1>
      <input type="text" class="form-control" placeholder="name" name="aname"/>
      <input type="password" class="form-control" placeholder="password" name="apassword"/>
      <input type="text" class="form-control"placeholder="email address" name="aemail"/>
	  
	  <input type="text" class="form-control" placeholder="Current Organization for which you are working" name="aorganization"/>
	  <input type="text" class="form-control"placeholder="Job title/profile" name="ajobtitle"/>
<input type="text" class="form-control"placeholder="Current Location" name="alocation"/>
<textarea class="form-control" rows="5" placeholder="Work Experience" name="aworkexp"/></textarea>	<br>	  
	 
      <button type="submit"  class="btn btn-success btn-block btn-lg">Register</button>
      </form>
	<form class="register-form" id="fcy" method="post" action="facultyregister.php">
<h1>Faculty Registration</h1>
      <input type="text"class="form-control" placeholder="Full Name" name="fname"/>
      <input type="password" class="form-control"placeholder="password" name="fpassword"/>
      <input type="text" class="form-control"placeholder="email address" name="femail"/>
	   <select class="form-control" name="fdegree">Degree
	   <option>Bachelor Degree</option>
	   <option>Master degree</option>
	   <option>Doctrate</option>
	   </select><br>
	    <select class="form-control" id="sel1" placeholder="Desgination" name="fdesgination">
	   <option></option>
	   <option>Assistant Professor</option>
	   <option>Associate Professor</option>
	   <option>Professor</option>
	   </select><br>
	  
     
       <button type="submit"  class="btn btn-success btn-block btn-lg">Register</button>
	  
      </form>
	<form class="register-form" id="cpt" method="post" action="corporateregister.php">
<h1>Corporate Registration</h1>
      <input type="text" class="form-control" placeholder="Full Name" name="cname"/>
      <input type="password" class="form-control" placeholder="password" name="cpassword"/>
      <input type="text"  class="form-control"placeholder="email address" name="cemail"/>
	  <input type="text" class="form-control"placeholder="Company" name="ccompany"/>
      <input type="text"  class="form-control"placeholder="Designation" name="cdesignation"/>
      
      <button type="submit" class="btn btn-success btn-block btn-lg">Register</button>
	 
       </form>

	

	
   <form class="login-form" id="lg1" method="post" action="alumnilogin.php" style="display:none;">
	<h2> AlumniLogin </h2>
	
      <input type="text"  class="form-control"placeholder="Enter RollNumber" name="rollnumber" required/>
      <input type="password" class="form-control" placeholder="password" name="password" required/>
      <button type="submit" name="submit" class="btn btn-success btn-block btn-lg ">
        login</button>

	  <br>	 
	  
	    
      </form>
       <form class="login-form" id="lg2" method="post" action="corporatelogin.php" style="display:none;">
  <h2> CorporateLogin </h2>
  
      <input type="text"  class="form-control"placeholder="Enter Email" name="email" required/>
      <input type="password" class="form-control" placeholder="password" name="password" required/>
      <button type="submit" name="submit" class="btn btn-success btn-block btn-lg ">
        login</button>

    <br>   
    
      
      </form>
       <form class="login-form" id="lg3" method="post" action="facultylogin.php" style="display:none;">
  <h2> FacultyLogin </h2>
  
      <input type="text"  class="form-control"placeholder="Enter E-mail" name="femail" required/>
      <input type="password" class="form-control" placeholder="password" name="fpassword" required/>
      <button type="submit" name="submit" class="btn btn-success btn-block btn-lg ">
        login</button>

    <br>   
    
      
      </form>
       <form class="login-form" id="lg4" method="post" action="studentlogin.php"style="display:none;">
  <h2> StudentLogin </h2>
  
      <input type="text"  class="form-control"placeholder="Enter RollNumber" name="rollnumber" required/>
      <input type="password" class="form-control" placeholder="password" name="password" required/>
      <button type="submit" name="submit" class="btn btn-success btn-block btn-lg ">
        login</button>

    <br>   
    
      
      </form>
  
  
  
  <p>Not Registered?</p>
  
      <button type="button" class="btn btn-primary btn-block btn-lg" id="faculty" >Faculty Registration</button>
	  <button type="button" class="btn btn-primary btn-block btn-lg" id="alumni">Alumni Registration</button>
    <button type="button" class="btn btn-primary btn-block btn-lg" id="corporate">Corporate Registration</button>
     <button type="button" class="btn btn-primary btn-block btn-lg"id="student">Student Registration</button>
	 
	 <p>Already registered? <a href="#" id="p">Sign In</a></p>
		
     </div>
	 </div>
	 </div>
&nbsp;
&nbsp;&nbsp;&nbsp;
 
<div class="containerdt">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
<li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>
    <li data-target="#myCarousel" data-slide-to="6"></li>
<li data-target="#myCarousel" data-slide-to="2"></li>
    
    
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="NIT RAIPUR Motosports (1).jpg" alt="New York" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>

      <div class="item">
        <img src="NIT RAIPUR Motosports (2).jpg" alt="Chicago" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>
    
      <div class="item">
        <img src="NIT RAIPUR Motosports (3).jpg" alt="Los Angeles" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>

<div class="item">
        <img src="NIT RAIPUR Motosports (4).jpg" alt="Los Angeles" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>
   <div class="item">
        <img src="NIT RAIPUR Motosports (5).jpg" alt="Los Angeles" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>
   <div class="item">
        <img src="NIT RAIPUR Motosports (6).jpg" alt="Los Angeles" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>
<div class="item">
        <img src="NIT RAIPUR Motosports (7).jpg" alt="Los Angeles" width="800" height="700">
        <div class="carousel-caption">
          </div>
      </div>
      

    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

</div>

<br><br><br><br><br><br><br><br><br><br><br><br>







 

    </div>
<span id="result"></span>
</div>
  
<script>
$('#student').click(function(){

   $('#std').show();
   $('#df').hide();
   $('#alm').hide();
   $('#fcy').hide();
   $('#cpt').hide();
   
});
$('#alumni').click(function(){

   $('#alm').show();
   $('#df').hide();
   $('#std').hide();
   $('#cpt').hide();
   $('#fcy').hide();
   
});
$('#faculty').click(function(){

   $('#fcy').show();
   $('#df').hide();
   $('#std').hide();
   $('#cpt').hide();
   $('#alm').hide();
   
});
$('#corporate').click(function(){

   $('#cpt').show();
   $('#df').hide();
   $('#std').hide();
   $('#alm').hide();
   $('#fcy').hide();
   
});



$('#p').click(function(){

   $('#df').show();
   $('#alm').hide();
 $('#std').hide();
 $('#fcy').hide();
 $('#cpt').hide();

  });



</script>

<script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
<script>
$(document).ready(function(){
    $(".close").click(function(){
        $("#myAlert").alert("close");
    });
});
</script>

<script>
$(document).ready(function(){       
        $('a').on('click', function(){
   var target = $(this).attr('rel');
   $("#"+target).show().siblings(".login-form").hide();
});
}); 
</script>




</body>

</html>
 