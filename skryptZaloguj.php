<?php

include('admin.php');
$username = $_POST["username"];
$password= $_POST["password"];


$password = md5($password);

$sql = "SELECT  name, pass, admin FROM users WHERE name = '".$username."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  	if($row["pass"] == $password){
  		//echo "Udało się zalogować";
      setcookie("User",$row["name"]);
      setcookie("Admin",$row["admin"]);
      header("Location: stronaGlownaZalogowany.php");
  	}else{
  		echo "Błędne dane";
  	}
    
  }
} else {
  echo "Błędne dane";
}
$conn->close();

	

?>