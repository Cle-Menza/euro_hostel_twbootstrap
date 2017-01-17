<?php
//Принимаем постовые данные
$what=$_POST['what'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];

//Тут указываем на какой ящик посылать письмо
$to = "youremailadress";
//Далее идет тема и само сообщение
$subject = "Заявка с сайта";
$message = "Письмо отправлено из моей формы<br />
Откуда пришла заявка: ".htmlspecialchars($what)."<br />
Имя: ".htmlspecialchars($name)."<br />
Телефон: ".htmlspecialchars($phone)."<br />
Email: ".htmlspecialchars($email);
$headers = "From: Site Hostel <no-reply@mysite.net>\r\nContent-type: text/html; charset=utf-8 \r\n";
mail ($to, $subject, $message, $headers);
header('Location: index.html');
echo 'Спасибо, ваше сообщение отправлено!';
exit;
?>
