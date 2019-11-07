<html>
<head>
<title>ADMIN PROFILE</title>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="jquery-3.2.1.min.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//require_once('connect.php');
require_once("sessionadmin.php");
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
        //echo "id: " . $row["mis"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";
        echo"<h1><marquee>  welcome              "    .    $row['name']   .   "</marquee></h1>";
	//echo"<center>";
	echo"<div class='col-md-14'>";
	//echo"<center>";
	echo"<label> Name:</label>    "  ;
	echo "".  $row['name'] . "";
	
	echo"<br><br><hr>";
	
	echo"<label> email id :</label>";
	echo"".$row['email']."";
	echo"<br><br><hr>";


	
     echo"</div>";  
      }
 } 
 else {
   echo "0 results";
}
$conn->close();
	
//mysqli_close($conn);

?>
<fieldset >
<a href="companiesreg.php"><input type="submit" name="viewcompanies" value="VIEW COMPANIES"></a>
<a href="admintable.php"><input type="submit" name="viewstudents" value="VIEW STUDENTS"/></a>
<a href="finaltry.php"><input type ="submit"  name="submit2" value="view status of a company"></a>
<a href="logoutadmin.php"><input type="submit" name="submit3"  value="logout" /></a>
<a href="branchwise.php"><input type="submit" name="submit" name="submit4" value="branchwise placement"></a>
<a href="compdone.php"><input type="submit" name="submit5"  value="companies that are done with the placement"></a>
<ul>
  <li><a href="companiesreg.php" target="_blank">COMPANIES REGISTERED</a></li>
  
</ul>

</fieldset>
</body>
</html>