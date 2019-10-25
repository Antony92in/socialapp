<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM messages WHERE touser = 'Baracus'" );



foreach ($rb as $row) {

	echo "От :" . $row["fromuser"] . "<br>" . $row["textmes"] . "<hr>";
	# code...
}














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


