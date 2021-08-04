<!DOCTYPE html>
<html>
<head>
    <title>Registeration</title>
    <link rel="stylesheet"  type="text/css" href="signup.css">
</head>  
<body>
<form  action="#" method="POST">
    <h1>SignUp</h1>
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="contact" placeholder="Contact Number">
    <input type="email" name="username" placeholder="Username">
    <input type="password" name="password" placeholder="Password">
    <input type="password" name="confirm_password" placeholder="Confirm Password">
    <button type="submit" name="submit">Register</button>
    <br><br><br>
    <p style="color: white">Already have a account?<a href="login.php" style="color: lightgreen">Login Here</a></p>
</form>    
</body>  
</html>

<?php

	include "config.php";

	if(isset($_POST["submit"]))
	{
		$name1 = $_POST["name"];
		$cont1 = $_POST["contact"];
		$username1 = $_POST["username"];
		$pass1 = $_POST["password"];
		$cpass1 = $_POST["confirm_password"];

		$emailquery = "SELECT * FROM test where Username = '$username1'";
		$sql = mysqli_query($conn, $emailquery);
		$emailcount = mysqli_num_rows($sql);

		if($emailcount > 0)
		{
			echo '<script language="javascript" type="text/javascript"> alert("Username Already Exsits") </script>';
		}
		else
		{
			if($pass1 === $cpass1)
			{
				$query = "INSERT into test(Name, Contact_Number, Username, Password, Confirm_Password)VALUES('$name1','$cont1','$username1','$pass1','$cpass1')";

				if(mysqli_query($conn, $query))
				{
					echo '<script language="javascript" type="text/javascript"> alert("You Have Been Register!") </script>';
				}
				else
				{
					echo '<script language="javascript" type="text/javascript"> alert("Try Again!") </script>';
				}
			}
			else
			{
				echo '<script language="javascript" type="text/javascript"> alert("Password not Matching!!") </script>';
			}
		}
	}

?>