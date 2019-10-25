<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM messages WHERE touser = '{$name}'" );



foreach ($rb as $row) {

	echo "От :" . $row["fromuser"] . "<br>" . $row["textmes"] . "<br>" . $row["date"] . "<hr>";
	# code...
}

// рабочий скрипт на хероку!!!(добавить дату в сообщения)












// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


