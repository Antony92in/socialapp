<?php

require "db.php";


$inmes = R::exec( "SELECT * FROM messages WHERE touser = 'Baracus'" );


print_r($inmes);














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


