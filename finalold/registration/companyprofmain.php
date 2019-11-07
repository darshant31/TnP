<?php
 require_once("session1.php");
 ?>

 <html>
<head>
<title>COMPANY PROFILE</title>
</head>
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/linkibs/jquery/3.2.1/jquery.min.js"></script>
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

 $result = mysqli_query($conn,"SELECT * FROM company where email='$user'");
 $result1=mysqli_query($conn,"SELECT *FROM company_criteria where email='$user'");

                                                    echo'</tr>';
 echo'</tbody>';
                                             echo'</table>';
mysqli_close($conn);
?> 
<body>
	
	<?php 
 while($row = mysqli_fetch_array($result))
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
	echo"<label> url:</label>";
	echo"".$row['url']."";
     echo"</div1>";
     echo"<br><br><hr>";
}

while($row1=mysqli_fetch_array($result1))
{
	//echo"<div1 class='col-md-14'>";
	//echo"<center>";
	echo"<label> DATE OF VISIT:</label>    "  ;
	echo "".  $row1['dateofvisit'] . "";

	echo"<br><br><hr>";
	echo"<label> AGGREGATE:</label>    "  ;
	echo "".  $row1['agg'] . "";

	echo"<br><br><hr>";
	echo"</div1>";
}

?>
<a href="studentagg.php"><input type="submit" name="studappear" value="View Qualified Students"></a>
<a href="studentsforapti.php"><input type="submit" name="studapti" value="ROUND : 1"></a>
<a href="studentsfortech.php"><input type="submit" name="studapti" value="ROUND : 2 "></a>
<a href="studentsforinterview.php"><input type="submit" name="studtech"  value="Round : 3"></a>
<a href="logout1.php"><input type="submit" name="logout" value="LOGOUT"/></a>
</body>
</html>