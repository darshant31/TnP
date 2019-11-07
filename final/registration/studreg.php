 <?php
 require_once("regsession.php");

$mmis = $_SESSION['id'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp2";



// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql_mis = "SELECT mis FROM student where mis='$mmis'";
 $result_mis = $conn->query($sql_mis);

echo $mmis;


     // output data of each row
   $row = $result_mis->fetch_assoc()
     


 ?>


<!Doctype html>
<html>
<head>

<style>
div {
    border-radius: 5px;
    background-color: #F8F8F8;
    width: auto;
    padding: 25px;
    
}
h1 {
	font-family: 'Raleway', Helvetica, Arial, sans-serif;
	font-size: 56px;
	line-height: 80px;
	color: grey;
    text-shadow: 2px 2px 4px #000000;
}

input[type=text]
{
	
	width:200px;
	height:20px;
	background:white;
}
input[type=email]
{
	background:white;
}
input[type=date]
{
	background:white;
}
input[type=number]
{
	background:white;
}


input:focus
{
	background-color:white;
}
input[type=submit]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;
	color: white;
}
input[type=reset]
{
	width:200px;
	height:50px;
	background-color: #2d3d5a;
	color: white;


}
input[type=submit]:focus
{
	width:200px;
	height:50px;
	border:none;
	background-color:#2d3d5a;
	border:solid steelblue;
	color:steelblue;
}
input[type=submit]:hover
{
	opacity: 0.8;
}

input[type=reset]:hover
{
	opacity: 0.8;
}

.header
{
   background-color: #2d3d5a;
    padding: 20px;
    text-align: center;
}

</style>
</head>
<body>
<div class="header">
<h1 style="color:white">Student Registration</h1><br>
</div><br>
<div>
<form action="studre2.php" method="post" enctype="multipart/form-data">

<fieldset>
<legend><b>PERSONAL INFORMATION:</b></legend>
<br>
<label for="mis" >Registration ID<b> : &nbsp</b></label>
    <input type="text" id="mis" name="mis"   value="<?php 
    echo $mmis   ?>" style="width:250px;height:25px; text-align: center;font-size: x-large; font-weight: bold;" placeholder="<?php 
    echo $mmis   ?>"  readonly><br><br> 

<label for="fname" >First Name<b> :&nbsp </b></label>
    <input type="text" id="fname" name="fname"  style="width:250px;height:25px;"placeholder="First Name"  required>
&nbsp&nbsp&nbsp&nbsp
<label for="lname">Last Name<b> : &nbsp</b></label>
    <input type="text" id="lname" name="lname"  style="width:250px;height:25px;" placeholder="Last Name" ><br><br>
    <label for="email">Email <b> : &nbsp</b></label>
    <input type="email" id="mail" name="email" style="width:250px;height:25px;" placeholder="ex : abc@gmail.com" required><br><br>
    <label>Date of Birth<b> : </b></label>
    <!--select required-->
    <input type="date" name="bday"  style="width:250px;height:25px;"><br><br>



<label for="mobile">Contact Number<b> : &nbsp</b></label>
<input type="number" name="phone" value="" size="45"max="9999999999" min="1000000000" style="width:250px;height:25px;" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" aria-required="true" placeholder="Phone"><br><br>
<label for="add"> Address <b> : &nbsp</b></label>
<input type="text" name="address" style="width:500px;height: 50px;" required ><br><br>

<label for="pincode"  >Pincode<b> : &nbsp</b></label>
<input type="text" name="pin" style="width:250px;height:25px;" required><br><br>
<label for="city">City<b> : &nbsp</b></label>
<input type="text" name="city"style="width:250px;height:25px;" required ><br><br>
<label for="state">State <b> : &nbsp</b> </label>
<input type="text" name="state" style="width:250px;height:25px;" required><br><br>
<p>Gender <b> : &nbsp</b></p>
<input type="radio" name="gender"  value="male">MALE<br>
<input type="radio" name="gender"  value="female">FEMALE<br>
<input type="radio" name="gender"  value="other">OTHER<br>


</fieldset><br><br><br>
<fieldset><label >
UPLOAD IMAGE:
</label>
<input type ="file" name="image" id="image"> 
<fieldset></fieldset>

	<legend><b>ACADEMIC DETAILS:</b></legend>
<label>Branch<b> : </b></label>
<select required name="br" style="width:250px;height:25px;" >
<option value="select">select</option>
<option value="COMP">COMPUTER</option>
<option value="IT">INFORMATION TECHNOLOGY</option>
<option value="ENTC">ELECTRONICS AND TELECOMMUNICATION</option>
</select><br><br>
<!--label for="agg" >Aggregate<b> : &nbsp</b></label>
<input type="number" name="agg" style="width:250px;height:25px;"><br><br-->


<label for="tenth" >Percentage(Class 10th)<b> : &nbsp</b></label>
<input type="number" name="tenth" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="twelfth" >Percentage(Class 12th)<b> : &nbsp</b></label>
<input type="number" name="twelfth" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="sem1" >Percentage(SEM1)<b> : &nbsp</b></label>
<input type="number" name="sem1" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="sem2" >Percentage(SEM2)<b> : &nbsp</b></label>
<input type="number" name="sem2" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="sem3" >Percentage(SEM3)<b> : &nbsp</b></label>
<input type="number" name="sem3" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="sem4" >Percentage(SEM4)<b> : &nbsp</b></label>
<input type="number" name="sem4" style="width:250px;height:25px;" min="0" max="100"><br><br>

<label for="sem5" >Percentage(SEM5)<b> : &nbsp</b></label>
<input type="number" name="sem5" style="width:250px;height:25px;" min="0" max="100"><br><br>


<!--label for="skills">Programming Skills<b> : &nbsp</b></label>
<input type="text" name=" skills"><br><br-->
<h4>What are your fields of interest?</h4>
<p><span class="wpcf7-form-control-wrap radio-98"><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label><input type="checkbox" name="preference" value="App Development">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">App Development</font></span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="preference" value="Web Development">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">Web Development</font></span></label></span><br><span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label><input type="checkbox" name="preference" value="Data Analytics">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">Data Analytics</font></span></label></span><br>
<span class="wpcf7-form-control wpcf7-radio"><span class="wpcf7-list-item"><label><input type="checkbox" name="preference" value="Database Management">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">Database Management</font></span></label></span></span></span></p>
<h4>What are your skills?</h4>
<p><span class="wpcf7-form-control-wrap checkbox-465"><span class="wpcf7-form-control wpcf7-checkbox"><span class="wpcf7-list-item"><label><input type="checkbox" name="skills" value="C/C++">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">C/C++</font></span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="skills" value="HTML">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">HTML</font></span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="skills" value="CSS">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">CSS</font></span></label></span><br><span class="wpcf7-list-item"><label><input type="checkbox" name="skills" value="Java Script">&nbsp;<span class="wpcf7-list-item-label"><font color="#4a148c">JavaScript</font></span></label></span></span></span></p>

<br>

</fieldset><br><br><br>
<fieldset>
<legend><b>Special Interests<b> / </b>Talents : </b></legend>
<label for="intrests">Interests<b> : &nbsp</b></label>
<input type="text" name="intrests"  required><br><br>
<label for="achievements">Achievements   (if any)<b> : &nbsp</b></label>
	<input type="text" name="ach" style="width:250px;height:25px;" >
</fieldset><br><br><br>

	<center>
		<input type="submit" name="submit" value="Submit">
<input type="reset" name="reset" value="Reset">
	</center>

    </form>
    </div>
    </body>
    </head>
    </html>