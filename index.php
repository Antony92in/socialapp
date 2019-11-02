<?php 
require "db.php";



if (isset($_SESSION['logged_user'])) :  ?>
	Авторизован!<br>
	<?php echo $_SESSION['logged_user']->login; ?>
	<hr>
	
	<a href="/message.php">Сообщения</a><hr>
	
	<a href="/logout.php">Выйти</a><hr>
<?php else : ?>	

<div id="a">Вы не авторизованы!Авторизуйтесь или зарегистрируйтесь<br></div>
<div id="b"><a class="button1" href="/login.php">Login</a></div><br>
<div id="c"><a class="button1" href="/signup.php">Registration</a></div>


<?php endif; ?>