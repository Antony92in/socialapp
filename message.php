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
</head>
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


</form>
</body>
</html>