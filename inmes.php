<?php

require "db.php";


$inmes = R::exec( "SELECT * FROM messages WHERE touser = 'Baracus'" );

$count = count($inmes);


for ($i=0; $i < $count; $i++) { 


	echo $inmes[] . "<hr>";
	# code...
}















// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


