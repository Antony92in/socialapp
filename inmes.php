<?php

require "db.php";

$mess = R::getAssoc( 'SELECT touser, textmes FROM messages' );


foreach ($mess as $key => $value) {

	echo $key . "<br>";
	echo $value;

	# code...
}















// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


