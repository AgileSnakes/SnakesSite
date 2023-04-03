<?php

include('conn.php');
$username = $_POST["username"];
$password= $_POST["password"];

//zapytanie sql - oby działało bo się wkurwię 
$sql = "SELECT id, name, pass FROM users WHERE name = '".$username."'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  while($row = $result->fetch_assoc()) {
  	if($row["pass"] == $password){
  		//echo "Udało się zalogować";
      header("Location: glowna.html");
  	}else{
  		echo "Błędne dane";
  	}
    
  }
} else {
  echo "Błędne dane";
}
$conn->close();

	

?>