<?php
 require_once("session.php");
 ?>

 <html>
<head>
	
<title>STUDENT PROFILE</title>
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

</style>

<?php
 
$user = $_SESSION['login_user'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tnp2";
$var=$_SESSION['login_user'];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "$user";
//$var_value=$_GET['$eemail'];
$sql = "SELECT * FROM student where email='$user'";
 $result = $conn->query($sql);

// $select = 'SELECT company_criteria.name FROM company_criteria,student WHERE student.agg >= company_criteria.agg and student.email=\''.$user.'\';';
//  //$select = 'SELECT student.fname FROM student,company_criteria WHERE student.agg >= company_criteria.agg';
// $res_select = mysqli_query($conn, $select);

// while($row_select = mysqli_fetch_array($res_select))
// {

//  echo"NAME :".$row_select['name']."";
//   }



if ($result->num_rows > 0)
 {
//     // output data of each row
   while($row = $result->fetch_assoc())
     {
        //echo "id: " . $row["mis"]. " - Name: " . $row["fname"]. " " . $row["lname"]. "<br>";

        echo"<div class='header'>
<h1 style='color:white;text-align: center;''>Welcome       "      .    $row['fname']   .   " ! </h1><br>
</div><br><br><br>";
	//echo"<center>";

        echo"<div1 class='container'>";
	echo"<div1 class='col-md-4'>";

	//echo"<center>";
	 echo "<fieldset> <legend><b>Student Details : </b> </legend></fieldset>";
	echo"<label> Name : </label>    "  ;
	echo "".  $row['fname'] . "";
	echo"                                    " .  $row['lname'] ."";
	echo"<hr>";
	echo '<td><body><img class="img-thumbnail" src="getimage.php?id='.$var.'" height="100px" width="100px" ></body></td>';



	echo"<label> DOB : </label>";
	echo"".$row['bday']."";
	echo"<hr>";

	echo"<label> Email : </label>";
	echo"".$row['email']."";
	echo"<hr>";

	echo"<label> Contact : </label>";
	echo"".$row['phone']."";
	echo"<hr>";

	echo"<label> Address : </label>";
	echo"".$row['address']."";
	echo"<hr>";
	echo "<label>Lives in : </label>".$row['city'].",".$row['state']."";
	echo"<hr>";

	
	echo"<label> Branch : </label>";
	echo"".$row['br']."";
	echo"<hr>";
	echo"<label> Gender : </label>";
	echo"".$row['gender']."";
	echo"<hr>";
	
	echo"<label> Aggregate : </label>";
	echo"".$row['agg']."";
	echo"<hr>";
	/*echo"<label> City : </label>";
	echo"".$row['city']."";
	echo"<hr>";
	echo"<label> State : </label>";
	echo"".$row['state']."";
	echo"<hr>";*/
	echo"<label> Pin Code : </label>";
	echo"".$row['pin']."";
	echo"<hr>";
	
	echo"<label> Achievements : </label>";
	echo"".$row['ach']."";
	echo"<hr>";
	echo"<label> Preference : </label>";
	echo"".$row['preference']."";
	echo"<hr>";
	echo"<label> Skills : </label>";
	echo"".$row['skills']."";
	echo"<hr>";
	echo"<label> Interests : </label>";
	echo"".$row['intrests']."";

	echo"</div1>";

	

	echo"<div1 class='col-md-8'>";
	echo"<h3> ELIGIBLE FOR COMPANIES</h3>";
$select = 'SELECT company_criteria.name FROM company_criteria,student WHERE student.agg >= company_criteria.agg and student.email=\''.$user.'\';';
 //$select = 'SELECT student.fname FROM student,company_criteria WHERE student.agg >= company_criteria.agg';
$res_select = mysqli_query($conn, $select);

while($row_select = mysqli_fetch_array($res_select))
{
	
 echo"<h4>Name :".$row_select['name']."</h4>";
 
  }

echo"</div1>";
echo"</div1>";
//scehedule of companies
  echo"<h3>scehedule of companies you can apply for:<h3>";
  $select1='SELECT company_criteria.dateofvisit,company_criteria.name from company_criteria,student where student.agg>=company_criteria.agg and student.email=\''.$user.'\';';
   $res_select1=mysqli_query($conn,$select1);
   while($row_select1=mysqli_fetch_array($res_select1))
   {      
          echo"".$row_select1['dateofvisit'],$row_select1['name']."<br>";
   }
   echo"<br><br><br><br><br>";
   echo"<h2>scehedule of companies that are available for you to apply:<h2>";
  $select1='SELECT schedule.dateofvisit,schedule.name from schedule,student where student.agg>=(select agg from company_criteria) and status.schedule=0 and student.email=\''.$user.'\';';
   $res_select1=mysqli_query($conn,$select1);
   while($row_select1=mysqli_fetch_array($res_select1))
   {      
          echo"".$row_select1['dateofvisit'],$row_select1['name']."<br>";
   }

     
      }
 } 
 else {
   echo "0 results";
}
$conn->close();
?>
</html>