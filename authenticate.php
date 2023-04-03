<?php

include('conn.php');
$username = $_POST["username"];
$password= $_POST["password"];


$password = md5($password);

//zapytanie sql - oby działało bo się wkurwię i to wypierdole 
$sql = "SELECT  name, pass FROM users WHERE name = '".$username."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  	if($row["pass"] == $password){
  		//echo "Udało się zalogować";
      setcookie("User",$row["name"]);
      header("Location: glowna.php");
  	}else{
  		echo "Błędne dane";
  	}
    
  }
} else {
  echo "Błędne dane";
}
$conn->close();

	

?>