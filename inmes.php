<?php



$name = $_SESSION['logged_user']->login;


$link = mysqli_connect("ec2-54-247-72-30.eu-west-1.compute.amazonaws.com", "zbkdvrivshuesq", "f8a99eafa9a3e1982aa35726fc67d5d21918d410883542131c0b37c2d77bfcd1", "d1iuf40nr11r3q");

mysqli_set_charset('utf8');

$query = ( 'SELECT * FROM messages WHERE touser = '{$name}' ');


$result = mysqli_query($link, $query);

//print_r($result);


if ($result = mysqli_query($link, $query)) {

    /* извлечение ассоциативного массива */
    while ($row = mysqli_fetch_assoc($result)) {
        
     
     echo "От :" . $row["fromuser"] . "<br>" . $row["textmes"] . "<br>" . $row["date"] . "<br>" ?>  

    <form action="message.php " method="GET">
    <button type="submit">Ответить</button>    


    <?php echo "<hr>";

     

    }

  }

/* закрытие соединения */
//mysqli_close($link);


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