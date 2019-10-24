<?php

require "db.php";

$column = R::getCol( 'SELECT textmes FROM messages' );

$countcol = count($column);

for ($i=0; $i < $countcol; $i++) { 


	echo $i;
	# code...
}





?>


