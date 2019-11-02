<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM `messages` WHERE `to` = '{$name}' ORDER BY `date` DESC" );



foreach ($rb as $row) {

	echo "От :" . $row["from"] . "<br>" . $row["text"] . "<br>" . $row["date"] . "<hr>";
	# code...
}




// $link = mysqli_connect("localhost", "root", "s1jk7310421wl", "socialapp");

// $query = ( "SELECT * FROM `messages` WHERE `to` = '{$name}' ");


// $result = mysqli_query($link, $query);

// //print_r($result);


 


?>


<!DOCTYPE html>
<html>
<head>
	<title>Входящие сообщения</title>
</head>
<body>
   
</form>

</body>
</html>