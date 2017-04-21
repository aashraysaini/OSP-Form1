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
if(isset($_POST['column_name'])==TRUE  && isset($_POST['row_name'])==TRUE )
{
$sql="SELECT * FROM details WHERE ".$_POST['column_name']."='".$_POST['row_name']."'";
$result=mysql_query($sql);
if(!$result) 
	echo "unsuccessful";

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
while($arr=mysql_fetch_array($result))
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
<td><?php echo $arr['mp']?></td></tr>
<?php }} ?>

</table>


<form action="#" method="post" align="center">
</br>
<label for="column_name">Enter column name to check <input name="column_name"></br></br>
<label for="row_name">Enter value <input name="row_name"></br></br>
<input type="submit"></br></br>
</form>
<a href="yashraj.php">click here to go to see database values</a></br>

</body>
</html>