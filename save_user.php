<!DOCTYPE html>

<html lang="ru">
<head>

<meta charset="UTF-8">
	  <title>Регистрация</title>
		<link rel="stylesheet" href="stylesigning.css">
	<link rel="shortcut icon" href="ico.ico" type="image/x-icon">
    </head>
    <body>
		<div class="one">
			
		<?php 
			

$host = 'std-mysql'; // имя хоста

$db = 'std_1470_tovar'; // имя бд

$user = 'std_1470_tovar'; //имя пользователя

$pass = '123456789'; //пароль к бд

$charset = 'utf8'; //кодировка юникод (поддерживает кирилицу)



	//include ("bd.php");
	// файл bd.php должен быть в той же папке, что и все остальные, если это не так, то просто измените путь 
	$login = filter_var(trim($_POST['login']));
	echo 'Ваш логин: ', $login, '<br>';
$pass = filter_var(trim($_POST['pass']));
	echo 'Ваш пароль: ', $pass, '<br>';
$email = filter_var(trim($_POST['email']));
	echo 'Ваша почта: ', $email, '<br>';

			
			
$link = mysqli_connect ("std-mysql", "std_1470_tovar", "123456789", "std_1470_tovar");
	
			if ($link) {
echo "Соединение с сервером установлено", "<br>";
} else {
echo "Нет соединения с сервером";
}


	
	
//Выбор БД
$db = "std_1470_tovar";
$select = mysqli_select_db($link, $db);
if ($select){
echo "База успешно выбрана", "<br>";
} else {
echo "База не выбрана";
}

$rezult= mysqli_query($link,"SELECT * FROM user WHERE login='$login'");
$counter= 0;

while ($note = mysqli_fetch_array($rezult)){
	
  echo $note ['login'], "<br>";
  $_SESSION['uid']=$note['id']; echo  'id= ', $_SESSION['uid'],'<br>';
  $counter=$counter+1;
}


if ($counter !== 0) {echo '<span class="people">Этот логин уже занят. Выберете другой логин. </span><a href="http://localhost/reg.php"><br><br><div class="btn"><span class="zareg"> Зарегестрируйтесь!</span></div></a>';
 $counter=0;
	exit();				}
else {
$counter=0;



$query="INSERT INTO `users`.`users` (
`id` ,
`login` ,
`password` ,
`email`
)
VALUES (
NULL , '$login', '$pass', '$email'
)";


//Реализация запроса
$create_tbl = mysqli_query ($link, $query);
if ($create_tbl) {
echo "Таблица успешно заполнена", "<br>"; }
	else 
{ echo "Таблица не хаполнена"; }
	
	echo '<span class="people">Вы зарегерстрировались! </span><a href="http://shop.std-1473.ist.mospolytech.ru/Shop%20Main.html"><br><br><div class="btn"><span class="zareg">Вернуться на сайт</span></div></a>';

//	$mysql->close();

	exit();
	header('Location: http://rwp2.std-1470.ist.mospolytech.ru/blog.html');	
}
    ?>
	</div></body>
</html>
