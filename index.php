<?php 
require "db.php";
?>

<?php if (isset($_SESSION['logged_user'])) :  ?>
	Авторизован!<br>
	<?php echo $_SESSION['logged_user']->login; ?>
	<hr>
	
	<a href="/message.php">Написать сообщение</a><hr>
	<a href="inmes.php">Входящие</a><hr>
	<a href="/logout.php">Выйти</a><hr>
<?php else : ?>	

Вы не авторизованы!Авторизуйтесь<br>

<a href="/login.php">Login</a><br>
<a href="/signup.php">Registration</a>
<?php endif; ?>