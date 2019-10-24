<?php

require "db.php";


$mes = R::getAll( 'SELECT * FROM messages' );


echo $mes;














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


