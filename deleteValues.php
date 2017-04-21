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


	if(isset($_POST['column_name'])==TRUE && isset($_POST['row_name'])==TRUE)
	{
		$c_name=$_POST['column_name'];
		$r_name=$_POST['row_name'];
		$query = "DELETE FROM details WHERE ".$c_name." = '".$r_name."'";
		$sql=mysql_query($query)or die(mysql_error());
		if($sql)
			echo "Row deleted Successfully";
	}

?>
<html>
	<body>
		</br>
		<form action="#" method="post" align="center">
			<label for="column_name">Enter column name to check for row to delete<input name="column_name"></br>
			<label for="row_name">Enter value of given column of row to be deleted<input name="row_name"></br>
			<input type="submit"></br>
			</form>
		</br>
		<a href="yashraj.php">click here to go to see database values</a>
	</body>
</html>