<?php

require "db.php";

$data = $_POST;


$errors = array();	
if ( trim($data['login']) == '') 
{
   $errors[] = 'Введите логин';	}

if ( trim($data['email']) == '') 
{
	$errors[] = 'Введите мыло';
	
}

if (strlen($data['password']) < 3){
	$errors[] = 'короткий пароль';
}  //работает)

if ( $data['password'] == '') 
{
	$errors[] = 'Введите пароль';
	
}

if ( $data['password_2'] != $data['password']) 
{
	$errors[] = 'Неверно введен пароль';
	
}

if (R:: count('users', "login = ?", array($data['login'])) > 0){
	$errors[] = 'Пользователь с таким логином уже существует';
}

if (R:: count('users', "email = ?", array($data['email'])) > 0){
	$errors[] = 'Пользователь с таким email уже существует';
}

if ( empty($errors) ) { // sdkvnksdvn
	$user = R::dispense('users');
	$user->login = $data['login'];
	$user->email = $data['email'];
	$user->password = password_hash($data['password'],PASSWORD_DEFAULT);
	R::store($user);
	echo '<div style= "color: green;">Вы успешно зарегистрированы</div><hr>';

}else
{
	echo '<div style= "color: red;">' . array_shift($errors) . '</div><hr>';
}



?>
<form action="signup.php" method="POST">
	
<p>
	<p><strong>Ваш логин</strong></p>
	<input type="text" name="login" value="<?php echo @$data['login']; ?>">
</p>

<p>
	<p><strong>Ваше мыло</strong></p>
	<input type="email" name="email" value="<?php echo @$data['email']; ?>">
</p>

<p>
	<p><strong>Ваш пароль</strong></p>
	<input type="password" name="password" value="<?php echo @$data['password']; ?>">
</p>

<p>
	<p><strong>Ваш пароль еще раз</strong></p>
	<input type="password" name="password_2" value="<?php echo @$data['password_2']; ?>">
</p>

<p>
	<button type="submit" name="do_signup">Зарегистрироваться</button>
</p>

</form>

    <form action="index.php " method="GET">
    <button type="submit">На главную</button> 
