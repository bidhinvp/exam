<!DOCTYPE html>
<html>
<head>
	<title>Employee</title>
<?php
//$this->load->helper(url);
?>

	<link rel="stylesheet" type="text/css" href=<?php //echo_base_url()"bootstrap.min.js"?>>
	<script type="text/javascript" src=<?php //echo_base_url();"bootstrap-3.1.1.js"?>></script>
	<script type="text/javascript" src=<?php //echo_base_url();"jquery.min.js"?>></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="main">
		<form name="employee" action="connection.php" method="POST">
		<label class="main"><B>Add Employee</B></label><br><br>
		<label id="name">Name:</label>
		<input type="text" placeholder="Name" size="25"><br><br>
		<label id="phone">Phone:</label>
		<input type="text" placeholder="Phonenumber" size="25"><br><br>
		<label id="email">Email:</label>
		<input type="text" placeholder="Email" size="25"><br><br>
		<label id="gender">Gender:</label>
		<input type="radio" name="male">
		<label id="rad1">male</label>
		<input type="radio" name="female">
		<label id="rad2">female</label><br><br>
		<label id="hobbies">Hobbies</label>
		<input type="checkbox" size="5">
		<label>Listening to music</label><br><br>
		<input type="checkbox" class="check" size="5">
		<label>Reading</label><br><br>
		<input type="checkbox" class="check" size="5">
		<label>Browsing</label><br><br>
		<input type="checkbox" class="check" size="5">
		<label>Playing</label><br><br>
		<label id="profile">Profile pic</label>
		<input type="text" placeholder="Email" size="25">
		<input type="file" style="background-color: blue"><br><br>
		<label id="country">Country</label>
		<select name="Country">
			<option value="1">India</option>
			<option value="2">Australia</option>
			<option value="3">England</option>
			<option value="5">China</option>
			<option value="6">Russia</option>
		</select><br><br>
		<button type="submit" class="btn" style="background-color: blue">Save</button>

			
		</form>
	</div>

</body>
</html>
