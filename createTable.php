<?php 

$conn = mysqli_connect("localhost",'root','');
if(!$conn)
	die("Database can't be connected".mqsql_error());
echo "Connected successfully\n";

$sql1="create DATABASE aashray";
$result=mysql_query($sql1);
if($sql1){
	echo "database created successfully";
}
else{
	echo "error creating the database".mysql_error()."\n";
}

$sql = "CREATE TABLE details(
	fname VARCHAR(50),
	lname VARCHAR(50),
	mail VARCHAR(50),
	city VARCHAR(50),
	state VARCHAR(50),
	zipCode INT(6),
	asp VARCHAR(3),	
	cp VARCHAR(15),
	mp VARCHAR(15)
);
";

mysql_select_db($conn,'aashray');
if($conn->query($sql)==TRUE){
	echo "Table created successfully\n";
}
else{
	echo "Error occurred during table creation".mysql_error();
}

$conn->close();

header("location:form.php");
?>