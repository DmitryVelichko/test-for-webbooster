<?php
$name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$product = $_POST['product']

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$tel = htmlspecialchars($tel);
$product = htmlspecialchars($product);

$name = urldecode($name);
$email = urldecode($email);
$tel = urldecode($tel);
$product = urldecode($product);

$name = trim($name);
$email = trim($email);
$tel = trim($tel);
$product = trim($product);

if (mail("gmail@gmail.com"; "Заявка с сайта", "Имя:".$name.". E-mail: ".$email."Тел.".$tel."Товар: ".$product , "From: mail@mail.ru \r\n")){
	echo "Заявка отправлена";
	} 
	else {
	echo "Ошибка! Попробуйте ещё раз.";
	}
?>