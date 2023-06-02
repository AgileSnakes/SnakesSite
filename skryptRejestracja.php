<?php 
	include('admin.php');
	$username = $_POST["username"];
	$password= $_POST["password"];
	$repeatPass = $_POST["password2"];

	if($password == $repeatPass)
	{
		$password = md5($password);
		$sql = "INSERT INTO users (name,pass) VALUES ('$username','$password')";
		if($conn->query($sql) == TRUE)
		{
			setcookie("PasswordWarning","");
			setcookie("AddUsers","1");
			header("Location:index.php");
		}else{
			echo "Error:" . $sql . "<br>" . $conn-> error;
		}
	}else{
		setcookie("PasswordWarning","1");
		header("Location:stronaRejestracja.php");
	}	



 ?>