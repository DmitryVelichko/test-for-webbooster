<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$product = $_POST['product']

$name = htmlspecialchars($name);
$email = htmlspecialchars($email);
$phone = htmlspecialchars($phone);
$product = htmlspecialchars($product);

$name = urldecode($name);
$email = urldecode($email);
$phone = urldecode($phone);
$product = urldecode($product);

$name = trim($name);
$email = trim($email);
$phone = trim($phone);
$product = trim($product);

if (mail("gmail@gmail.com"; "Заявка с сайта", "ФИО:".$name.". E-mail: ".$email ,"From: seller@mail.ru \r\n")){
	echo "Заявка отправлена";
	} 
	else {
	echo "Ошибка! Попробуйте ещё раз.";
	}
?>