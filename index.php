<?php 
require "db.php";
?>
<head><style>
@import url('https://fonts.googleapis.com/css?family=Fira+Sans+Condensed&display=swap');
</style></head>
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


<?php endif; ?>