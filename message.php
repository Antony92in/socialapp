<?php 

require "db.php";



$data = $_POST;

$users = R::getCol( 'SELECT login FROM users' );
 
if (isset($_REQUEST{'send'})) {
    $message = R::dispense('messages');
	$message->from = $_SESSION['logged_user']->login;
    $message->to = $_POST['select'];
    $message->text = $_POST['message'] ;
    R::store( $message );


	# code...
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Message</title>
	
<body>
<form action="message.php" method="POST">
Кому<select name="select">
<?php	foreach ($users as $user) {
	echo "<option>" . $user . "</option>";
	
	# code...
}
?>

</select><hr>


<textarea name="message" rows="15" cols="75"></textarea><br>
<button name="send" type="submit" value="send">Отправить</button>

	<div style="position:absolute; left: 700px;position: absolute; top: 40px;border-style: solid;width: 50%;">
	
		<?php



$name = $_SESSION['logged_user']->login;


$rb = R::getAll( "SELECT * FROM `messages` WHERE `to` = '{$name}' ORDER BY `date` DESC LIMIT 5" );



foreach ($rb as $row) {

	echo "От :" . $row["from"] . "<br>" . $row["text"] . "<br>" . $row["date"] . "<hr>";
	# code...
}

?>
<a href="inmes.php">Все сообщения</a>


	</div>


</form>
</body>
</html>