<html>
	
	<body>
		<div style="margin:100px;border:solid;text-align:center">
			<div style="border:solid">
				<h1>EVENT REGISTRATION FORM</h1>
			</div>
			<form action="submit.php" method="post" align="center"><br>

				<label>First Name:</label><input type="text" name="fname" id="fname"><br>
				<label>Last Name:</label><input type="text" name="lname" id="lname"><br>
				<label>Mailing Address:</label><input type="text" name="mail" id="mail"><br>
				<label>City:</label><input type="text" name="city" id="city"><br>
				<label>State:</label>
					<input list="state" name="state">
						<datalist id="state">
							<option id="up" value="Uttar Pradesh">
							<option id="mp" value="Madhya Pradesh">
							<option id="tn" value="Tamil Nadu">
						</datalist><br>
				<label>Zip Code:</label><input type="text" name="zipCode" id="zipCode"><br>

				<hr style="border-top: dashed"></hr>

				<label>Are you speaking at the conference:</label>
					<input type="checkbox" value="Yes" name="asp">Yes</t>
					<input type="checkbox" value="No" name="asp">No<br><br>
				<label>Conference Pass:</label>
					<input type="radio" name="cp" value="1-day Pass">1-day Pass</br>
					<input type="radio" name="cp" value="2-day Pass">2-day Pass</br>
					<input type="radio" name="cp" value="3-day Pass">3-day Pass</br>
					<input type="radio" name="cp" value="4-day Pass">4-day Pass</br>

				<hr style="border-top:dashed"></hr>


				<label for="mp">Meal Preference:</label>
					<input list="mp" name="mp">
						<datalist id="mp">
							<option id="Veg" value="Veg">
							<option id="Non-Veg" value="Non-Veg">
						</datalist></br>

				<input type="submit"></br>

				</form>
			</div>
	</body>
</html>
