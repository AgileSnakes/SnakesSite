<?php
	$GameName = $_POST['addGameName'];
	$PNGlink = $_POST['pnglink'];
	$GAMElink = $_POST['gamelink'];

    include('admin.php');

    $sql = "INSERT INTO Games (game_name,game_link,png_link) VALUES ('$GameName','$GAMElink','$PNGlink')";

    if($conn->query($sql) == TRUE)
    {
    		setcookie("AddGame","1");
			header("Location:stronaGlownaZalogowany.php");
    }else{
			echo "Error:" . $sql . "<br>" . $conn-> error;
		}
?>