<?php

require "db.php";


$mes = R::getAll( 'SELECT * FROM messages' );

$count = count($mes);

while ($row <= $count) {
        
     
     echo "От :" . $row["fromuser"] . "<br>" . $row["textmes"] . "<br>"?>  

    <form action="message.php " method="GET">
    <button type="submit">Ответить</button>    


    <?php echo "<hr>";
     
    }














// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


