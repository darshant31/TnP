<?php
//require_once('connect.php');
require_once("sessionadmin.php");
?>

<html>
<head>
<title>ADMIN PROFILE</title>
</head>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  .profile
{
	background-color: #f8f8f8;
	width:900px;
	height:600px;
	align-self: center;
   text-align: left;
   padding-left: 60px;
   padding-top: 40px;

}

div {
    border-radius: 5px;
    background-color: #2d3d5a;
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

input[type=submit]
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



</style>
<?php
$user = $_SESSION['login_user'];
//$result = mysqli_query($conn,"SELECT * FROM admin where email='$user'");
//$var_value=$_GET['$eemail'];
$sql = "SELECT * FROM admin where email='$user'";
 $result = $conn->query($sql);


if ($result->num_rows > 0)
 {
//     // output data of each row
   while($row = $result->fetch_assoc())
     {

     	echo"<div class='header'>
		<h1 style='color:white;text-align: center;''>Welcome       "      .    $row['name']   .   " ! </h1><br>
		</div><br><br><br>";
		echo"<div1 class='col-md-14'>";
	//echo"<center>";
	echo"<label> Name:</label>    "  ;
	echo "".  $row['name'] . "";
	
	echo"<br><br><hr>";
	
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";


	
     echo"</div1>";  

     }

 }
 else {
   echo "0 results";
}
$conn->close();
	
//mysqli_close($conn);

?>
<div1 class="container">
<div1 class='col-md-14'>
<a href="companiesreg.php"><input type="submit" name="viewcompanies" value="VIEW COMPANIES"></a>
<a href="admintable.php"><input type="submit" name="viewstudents" value="VIEW STUDENTS"/></a>
</div1>
<div1 class='col-md-14'>
<a href="finaltry.php"><input type ="submit"  name="submit2" value="view status of a company"></a>
<a href="logoutadmin.php"><input type="submit" name="submit"  value="logout" /></a>
</div1>
</div1>
</body>
</html>
</html>