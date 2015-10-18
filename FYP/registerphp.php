<?php
if(isset($_POST['username']))
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$ic_number = $_POST['ic_number'];
	$gender = $_POST['gender'];
	$address = $_POST['address'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = stripslashes($username);
	$password = stripslashes($password);

	$con = mysqli_connect  ("localhost", "root",  "pooh9", "phonestore");

	$query = mysqli_query($con,"SELECT * FROM `user` WHERE username = '$username'") or die(mysqli_error($con));
		if(mysqli_num_rows($query)>=1)
		{
			$message = "Username has already existed!";
			include 'register.php';
			echo "<script type='text/javascript'>alert('$message');</script>";
			session_destroy();
		}

		else
		{
			$sql = "INSERT INTO `customer` (firstname, lastname, gender, address, phone, email, ic_number)
			VALUES ('$firstname', '$lastname', '$gender' , '$address', '$phone', '$email','$ic_number')";
			$result = mysqli_query($con,$sql) or die(mysqli_error($con));

			$sql2 = "INSERT INTO `user` (username, password)
			VALUES ('$username', '$password')";
			$result = mysqli_query($con,$sql2) or die(mysqli_error($con));
			if($result)
			{
				header("Location:direct.php");
				break;
			}
			session_destroy();
		}

}else{
include 'login.php';
}
?>
