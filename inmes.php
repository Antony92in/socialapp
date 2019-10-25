<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM `messages` WHERE `to` = '{$name}'" );



foreach ($rb as $row) {

	echo "От :" . $row["from"] . "<br>" . $row["text"] . "<br>" . $row["date"] . "<hr>";
	# code...
}














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


