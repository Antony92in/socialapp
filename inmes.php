<?php

require "db.php";

$column = R::getCol( 'SELECT textmes FROM messages' );

$countcol = count($column);

foreach ($column as $key) {


	echo $key . "<br>";
	# code...
}





?>


