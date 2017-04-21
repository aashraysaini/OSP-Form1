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
	if(isset($_POST['column_name'])==TRUE && isset($_POST['row_name'])==TRUE && isset($_POST['condition'])==TRUE && isset($_POST['val'])==TRUE)
	{
	$query="UPDATE details SET ".$_POST['column_name']."= '".$_POST['row_name']."' WHERE ".$_POST['condition']."= '".$_POST['val']."'";
	$sql=mysql_query($query) or die(mysql_error());
	if($sql)
	{
		echo "Data Value Updated";
	}
	}
?>
<html>
	<body>
		<form action="#" method="post" align="center">
			<label for="column_name">Enter column name to modify<input name="column_name"></br>
			<label for="row_name">Enter updated value<input name="row_name"></br>
			<label for="condition">Enter condition for Column<input name="condition"></br>
			<label for="val">Enter condition for Value To be<input name="val"></br>
			<input type="submit"></br>
		</form>
	<a href="yashraj.php">click here to go to see database values</a></br>
	</body>
</html>