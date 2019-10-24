<?php

require "db.php";


$mes = R::getAll( 'SELECT * FROM messages' );


foreach ($mes as $key => $value) {


	echo $key . "=>" . $value;
	# code...
}














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


