<?php
$servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//    $m = new MongoClient();
//    echo "Connection to database successfully";
// $db = $m->internship;
// $collection=$db->test2;
$q1 = array( 
      "question" => " From which tag descriptive list starts ?",
	"A" => "<LL>",
	"B" =>"<DD>",
	"C" =>"<DL>",
	"D" =>"<DS>",
	"correct" => 3,
	"class" => "Web Development",
	"flag"=>"0"

   );
$q2 = array( 
      "question" => "Which of the following is used to create Web Page.",
	"A" => "HTML",
	"B" =>"C",
	"C" =>"DTD",
	"D" =>"JVM",
	"correct" => 1,
	"class" => "Web Development",
	"flag"=>"0"

   );
$q3 = array( 
      "question" => "HTML markup language is a set of Markup ___________.",
	"A" => "Tags",
	"B" =>"Sets",
	"C" =>"Attributes",
	"D" =>"Groups",
	"correct" => 1,
	"class" => "Web Development",
	"flag"=>"0"
   );
$q4 = array( 
      "question" => "HTML Document can contain ______________.",
	"A" => "Attributes",
	"B" =>"Plain text",
	"C" =>"All of these",
	"D" =>"Tags",
	"correct" => 3,
	"class" => "Web Development",
	"flag"=>"0"
   );
$q5 = array( 
      "question" => "HTML program can be read and rendered by _________.",
	"A" => "Compiler",
	"B" =>"Web Browser",
	"C" =>"Server",
	"D" =>"Interpreter",
	"correct" => 2,
	"class" => "Web Development",
	"flag"=>"0"
   );
$q6 = array( 
      "question" => "Which one of the following is a set of one or more attributes taken collectively to uniquely identify a record? ",
	"A" => "Candidate key",
	"B" =>"Sub key",
	"C" =>"Super key",
	"D" =>"Foreign key",
	"correct" => 3,
	"class" => "Database Management",
	"flag"=>"0"
   );
$q7 = array( 
      "question" => "Consider attributes ID , CITY and NAME . Which one of this can be considered as a super key ?  ",
	"A" => "NAME",
	"B" =>"ID",
	"C" =>"CITY",
	"D" =>"CITY,ID",
	"correct" => 2,
	"class" => "Database Management",
	"flag"=>"0"
   );
$q8 = array( 
      "question" => " Which of the join operations do not preserve non matched tuples.  ",
	"A" => "Left outer join",
	"B" =>"Right outer join",
	"C" =>"inner join",
	"D" =>"none",
	"correct" => 3,
	"class" => "Database Management",
	"flag"=>"0"
   );
$q9 = array( 
      "question" => "The____condition allows a general predicate over the relations being joined.  ",
	"A" => "On",
	"B" =>"Using",
	"C" =>"Set",
	"D" =>"Where",
	"correct" => 1,
	"class" => "Database Management",
	"flag"=>"0"
   );
$q10 = array( 
      "question" => "How many tables may be included with a join? ",
	"A" => "One",
	"B" =>"Two",
	"C" =>"Three",
	"D" =>"All of the mentioned ",
	"correct" => 3,
	"class" => "Database Management",
	"flag"=>"0"
   );	
$q11 = array( 
      "question" => "What will be the output of following code snippet ? ",
	"A" => "a+b",
	"B" =>"a=b",
	"C" =>"ab",
	"D" =>"None of the mentioned ",
	"correct" => 4,
	"class" => "Data Analytics",
	"flag"=>"0"
   );	
$q12 = array( 
      "question" => "Point out the correct statement : ",
	"A" => "In R, a function is an object which has the mode function",
	"B" =>" R interpreter is able to pass control to the function, along with arguments that may be necessary for the function to accomplish the actions that are desired",
	"C" =>"Functions are also often written when code must be shared with others or the public",
	"D" =>"All of the mentioned ",
	"correct" => 4,
	"class" => "Data Analytics",
	"flag"=>"0"
   );	
$q13 = array( 
      "question" => "You can check to see whether an R object is NULL with the _________ function. ",
	"A" => "is.null()",
	"B" =>"is.nullobj()",
	"C" =>"null()",
	"D" =>"All of the mentioned ",
	"correct" => 1,
	"class" => "Data Analytics",
	"flag"=>"0"
   );	
$q14 = array( 
      "question" => "Which of the following code will print NULL ? ",
	"A" => "args(paste)",
	"B" =>"arg(paste)",
	"C" =>"args(pastebin)",
	"D" =>"All of the mentioned ",
	"correct" => 1,
	"class" => "Data Analytics",
	"flag"=>"0"
   );	
$q15 = array( 
      "question" => "What will be the output of following code snippet ?

 > paste('a', 'b', sep = ':') ",
	"A" => "a+b",
	"B" =>"a=b",
	"C" =>"a:b",
	"D" =>"None of the mentioned ",
	"correct" => 3,
	"class" => "Data Analytics",
	"flag"=>"0"
   );	
	
$q16 = array( 
      "question" => "Android is licensed under which open source licensing license ",
	"A" => "Gnu's GPL",
	"B" =>"Apache/MIT",
	"C" =>"OSS",
	"D" =>"Source forge ",
	"correct" => 2,
	"class" => "Android Programming",
	"flag"=>"0"
   );	
$q17 = array( 
      "question" => "As an android programmer,which version should you use as your minimum development target?",
	"A" => "Versions 1.6 or 2.0",
	"B" =>"Versions 1.0 or 1.1",
	"C" =>"Versions 1.2 or 1.3",
	"D" =>"Versions 2.3 or 3.0 ",
	"correct" => 1,
	"class" => "Android Programming",
	"flag"=>"0"
   );	
$q18 = array( 
      "question" => "Once installed on a device, each Android application lives in_______?",
	"A" => "device memory",
	"B" =>"external memory",
	"C" =>"security sandbox",
	"D" =>"None of the mentioned ",
	"correct" => 3,
	"class" => "Android Programming",
	"flag"=>"0"
   );	
$q19 = array( 
      "question" => "Parent class of Activity? ",
	"A" => "Object",
	"B" =>"Context",
	"C" =>"Activity Group",
	"D" =>"Context Theme Wrapper",
	"correct" => 4,
	"class" => "Android Programming",
	"flag"=>"0"
   );	
$q20 = array( 
      "question" => "Which component is not activated by an Intent?",
	"A" => "Activity",
	"B" =>"Services",
	"C" =>"ContentProvider",
	"D" =>"Broadcast Receiver",
	"correct" => 3,
	"class" => "Android Programming",
	"flag"=>"0"
   );	

//   $collection->insert($q1);
// $collection->insert($q2);
// $collection->insert($q3);
// $collection->insert($q4);
// $collection->insert($q5);
// $collection->insert($q6);
// $collection->insert($q7);
// $collection->insert($q8);
// $collection->insert($q9);
// $collection->insert($q10);
// $collection->insert($q11);
// $collection->insert($q12);
// $collection->insert($q13);
// $collection->insert($q14);
// $collection->insert($q15);
// $collection->insert($q16);
// $collection->insert($q17);
// $collection->insert($q18);
// $collection->insert($q19);
// $collection->insert($q20);

?>
<?php
$servername = "localhost";
    $username = "root";
    $password= "";
    $dbname   ="tnp";

    $conn = new mysqli($servername, $username, $password,$dbname);

    if($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
//include('session.php');
 //$m = new MongoClient();
echo "Connection to database successfully";
   $db = $m->internship;
$_SESSION['ids']=$_POST['ids'];
$_SESSION['company']=$_POST['company'];
$_SESSION['domain']=$_POST['domain'];
$domain=$_POST['domain'];
$f=array("user"=>$_SESSION['login_user']);
$collection=$db->user;
$ddd=$collection->findOne($f);
$p=$ddd['student'];
$s=array('$set'=>array("ipid"=>$_SESSION['ids']));
$collection->update($ddd,$s);
$document = array( 
     "flag"=>"0","class"=>$domain
);
$add=array('$set'=>array("flag"=>"1"));
	$collection=$db->test2;	
$i=1;
$score=0;
	$question=$collection->findOne($document);
	$ranswer1=$question["correct"];
	$collection->update($question,$add);
	echo $question['question']."<br>";
?>
<form method='post' action='a_quiz.php'>
<input type='radio' name="answer1"value=1><label><?php echo $question["A"];?></label><br>
<input type='radio' name="answer1"value=2><label><?php echo $question["B"];?></label><br>
<input type='radio' name="answer1"value=3><label><?php echo $question["C"];?></label><br>
<input type='radio' name="answer1"value=4><label><?php echo $question["D"];?></label><br>
<?php
$question=$collection->findOne($document);
	$ranswer2=$question["correct"];
	$collection->update($question,$add);
	echo $question['question']."<br>";
?>
<input type='radio' name="answer2"value=1><label><?php echo $question["A"];?></label><br>
<input type='radio' name="answer2"value=2><label><?php echo $question["B"];?></label><br>
<input type='radio' name="answer2"value=3><label><?php echo $question["C"];?></label><br>
<input type='radio' name="answer2"value=4><label><?php echo $question["D"];?></label><br>
<?php
$question=$collection->findOne($document);
	$ranswer3=$question["correct"];
	$collection->update($question,$add);
	echo $question['question']."<br>";
?>
<input type='radio' name="answer3"value=1><label><?php echo $question["A"];?></label><br>
<input type='radio' name="answer3"value=2><label><?php echo $question["B"];?></label><br>
<input type='radio' name="answer3"value=3><label><?php echo $question["C"];?></label><br>
<input type='radio' name="answer3"value=4><label><?php echo $question["D"];?></label><br>
<?php
$question=$collection->findOne($document);
	$ranswer4=$question["correct"];
	$collection->update($question,$add);
	echo $question['question']."<br>";
?>
<input type='radio' name="answer4"value=1><label><?php echo $question["A"];?></label><br>
<input type='radio' name="answer4"value=2><label><?php echo $question["B"];?></label><br>
<input type='radio' name="answer4"value=3><label><?php echo $question["C"];?></label><br>
<input type='radio' name="answer4"value=4><label><?php echo $question["D"];?></label><br>

<input type="submit" value="Submit" name="submit"/>
</form>
<?php
$i=1;
$score=0;
if(isset($_POST['submit'])){
if($_POST['answer1']==$ranswer1)
$score++;
if($_POST['answer2']==$ranswer2)
$score++;
if($_POST['answer3']==$ranswer3)
$score++;
if($_POST['answer4']==$ranswer4)
$score++;
}
$i=1;
$document=array("flag"=>"1");
while ($i<5){
        $question=$collection->findOne($document);
	$add=array('$set'=>array("flag"=>"0"));
	$collection->update($question,$add);
	$i=$i+1;
}
$i=1;
$collection=$db->user;
$user=array("user"=>$_SESSION['login_user']);
$documen=$collection->findOne($user);
$add=array('$set'=>array("profile.score"=>$ranswer2));
$collection->update($documen,$add);
?>
