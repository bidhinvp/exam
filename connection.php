<?php
	$name="name";
	$phone="phone";
	$email="email";
	$gender="gender";
	$male="rad1";
	$female="rad2";
	$hobbies="hobbies";
	$profile="profile";
	$country="country";
	return false="http://localhost/BM-ULTS-BIDHIN-2/emp.php";


	if (isset($name=="")) 
	{
		echo "please fill this field";
		return false;
	}
	else
		return true;
	if(isset($phone==""))
	{
		echo "please fill this field";
		return false;
	}
	elseif (!preg_match(pattern, $phone))
	{
		echo "invalid phone number";
		return false;
	}
	else
		return true;
	if (isset($email==""))
	{
		echo "please fill this field";
		return false;
	}
	elseif (!preg_match(pattern, $email))
	{
		echo "invalid email id";
		return false;
	}
	else
		return true;
	if (isset($gender==""))
	{
		echo "please select gender";
		return false;
	}
	elseif (isset($male&&$female==1)) 
	{
		echo "please select one";
		return false;
	}
	else
		return true;
	if (isset($hobbies==""))
	{
		echo "please select one";
		return false;
	}
	else
		return true;
	if (isset($profile==""))
	{
		echo "please select a picture";
		return false;
	}
	else
		return true;
	if (isset($country=="")) 
	{
		echo "please select the country";
	}
	else
		return true;
	if (return true==1)
	{
		mysql_connect("employee","username","pwd");
	}
	else
		return false;
	mysql_connect()



?>