<?php

require "db.php";

$querying = R::exec( 'SELECT * FROM messages WHERE touser = 'Baracus'' );

if (isset($querying)) {
    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($querying)) {
        
     
     echo "От :" . $row["fromuser"] . "<br>" . $row["textmes"] . "<br>"?>  

    <form action="message.php " method="GET">
    <button type="submit">Ответить</button>    


    <?php echo "<hr>";
     
    }
  }















// $countcol = count($column);

// foreach ($column as $key) {


// 	echo $key . "<br>";
// 	# code...
// }





?>


