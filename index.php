<?php 
require "db.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Main page</title>
	<script type="text/javascript" src="jquery.js"></script>
	
</head>
<body>




<link rel="stylesheet" type="text/css" href="style.css">
<?php if (isset($_SESSION['logged_user'])) :  ?>
	Авторизован!<br>
	<?php echo $_SESSION['logged_user']->login; ?>
	<hr>
	
	<a href="/message.php">Написать сообщение</a><hr>
	<a href="inmes.php">Входящие</a><hr>
	<a href="/logout.php">Выйти</a><hr>
<?php else : ?>	

<div id="a">Вы не авторизованы!Авторизуйтесь или зарегистрируйтесь<br></div>
<div id="b"><a class="button1" href="/login.php">Login</a></div><br>
<div id="c"><a class="button1" href="/signup.php">Registration</a></div>

	<div><a href="#" id="time">get time</a></div>
    <div id="info"></div>


<script type="text/javascript" src="scripts.js"></script>
</body>
</html>

<?php endif; ?>