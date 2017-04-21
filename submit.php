<?php
  $conn = @mysql_connect('localhost', 'root', '');
  if (!$conn)
  {
    die("Database Connection Failed" . mysql_error());
  }

  $select_db = mysql_select_db('aashray');
  if (!$select_db)
  {
    die("Database Selection Failed" . mysql_error());
  }
  

  //if(isset($_POST['submit'])!="")
  //{
	 
    $lname      = mysql_real_escape_string($_POST['lname']);
    $fname      = mysql_real_escape_string($_POST['fname']);
	$mail      = mysql_real_escape_string($_POST['mail']);
    $city       = mysql_real_escape_string($_POST['city']);
	$zip        = mysql_real_escape_string($_POST['zipCode']);
	$state   =mysql_real_escape_string($_POST['state']);
	$asp   =mysql_real_escape_string($_POST['asp']);
	$cp   = mysql_real_escape_string($_POST['cp']);
	$mp   = mysql_real_escape_string($_POST['mp']);
	
 
    $query = "INSERT into details(lname, fname,mail,city,state, zipCode,asp,cp,mp)
	VALUES('$lname','$fname','$mail', '$city', '$state', '$zip', '$asp', '$cp','$mp')";
	
	$sql = mysql_query($query) or die(mysql_error());

	//echo $query;
	
	
    
  
	header("location:yashraj.php");
  //}
?>