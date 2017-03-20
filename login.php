<html>
<body>
<?php 
if($_POST[password]=="12345" && ($_POST[regno]=="15BIT0246" || $_POST[regno]=="15bit0246"))
{
	header("location:successful.php");
	$name=$_POST[name];
	$regno=$_POST[regno];	
}
else
{
header("location:unseccessful.php");
}
?>
