<?php

require "db.php";

$name = $_SESSION['logged_user']->login;


$link = mysqli_connect("localhost", "root", "s1jk7310421wl", "socialapp");

$query = ( "SELECT * FROM `messages` WHERE `to` = '{$name}' ");


$result = mysqli_query($link, $query);

//print_r($result);


if ($result = mysqli_query($link, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
        
     
     echo "От :" . $row["from"] . "<br>" . $row["text"] . "<br>" . $row["date"] . "<br>" ?>  

    <form action="message.php " method="GET">
    <button type="submit">Ответить</button>    


    <?php echo "<hr>";

     

    }

  }

/* закрытие соединения */
mysqli_close($link);


?>


<!DOCTYPE html>
<html>
<head>
	<title>Входящие сообщения</title>
</head>
<body>
   
</form>

</body>
</html>