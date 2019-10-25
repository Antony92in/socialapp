<?php

require "db.php";


$inmes = R::exec( "SELECT * FROM messages WHERE touser = 'Baracus'" );


for ($i=0; $i < 10; $i++) { 


	echo $inmes[] . "<hr>";
	# code...
}















// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


