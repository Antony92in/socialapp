<?php

require "db.php";


$inmes = R::exec( "SELECT * FROM messages WHERE touser = 'Baracus'" );


print_r($inmes[0]);
















// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


