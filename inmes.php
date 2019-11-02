<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM `messages` WHERE `to` = '{$name}' ORDER BY `date` DESC" );



foreach ($rb as $row) {

	echo "От :" . $row["from"] . "<br>" . $row["text"] . "<br>" . $row["date"] . "<hr>";
	# code...
}


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
