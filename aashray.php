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

?>

<html>
	<body>
		<table border="5 px">
		<th>First Name</th>
		<th>Last Name</th>
		<th>Mail</th>
		<th>City</th>
		<th>State</th>
		<th>Zip Code</th>
		<th>Are you Speaking At Conference</th>
		<th>Conference Pass</th>
		<th>Meal Preference</th>
		<?php
		
			$query="SELECT * FROM details ";

			$sql=mysql_query($query)or die(mysql_error());

			while($arr=mysql_fetch_array($sql))
			{
				
                $lname  =$arr['lname'];
                $fname  =$arr['fname'];
                $mail   =$arr['mail'];
                $city   =$arr['city'];
				$state   =$arr['state'];
				$zip_code   =$arr['zipCode'];
				$asp   =$arr['asp'];
				$cp   =$arr['cp'];
				$mp   =$arr['mp'];
		?>
		<tr>
			<td><?php echo $arr['fname']?></td>
			<td><?php echo $arr['lname']?></td>
			<td><?php echo $arr['mail']?></td>
			<td><?php echo $arr['city']?></td>
			<td><?php echo $arr['state']?></td>
			<td><?php echo $arr['zipCode']?></td>
			<td><?php echo $arr['asp']?></td>
			<td><?php echo $arr['cp']?></td>
			<td><?php echo $arr['mp']?></td>
		</tr>
		<?php 
			}
		 ?>

		</table>
		</br></br>
		<a href="updateValues.php">Click here to update some data</a></br></br>
		<a href="deleteValues.php">Click here to delete a row</a></br></br>
		<a href="retrivalValues.php">Click here to retrieve data based on some condition</a></br></br>
	</body>
</html>