<?php
$to = "anuar.jop1@gmail.com"; // емайл получателя данных из формы 
$tema = "Форма обратной связи на PHP"; // тема полученного емайла 
$message = "Ваше имя: ".$_POST['name']."<br>";//присвоить переменной значение, полученное из формы name=name
$message .= "E-mail: ".$_POST['email']."<br>"; //полученное из формы name=email
$message .= "Номер телефона: ".$_POST['phone']."<br>"; //полученное из формы name=phone
$message .= "Сообщение: ".$_POST['message']."<br>"; //полученное из формы name=message
$headers  = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
  $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
mail($to, $tema, $message, $headers); //отправляет получателю на емайл значения переменных
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Спасибо за вашу заявку</title>
  </head>
  <body style="margin:0;height:100vh">
  <div style="margin: 0 auto;width:70%;height:100%">
  <iframe width="100%" height="80%" src="https://www.youtube.com/embed/bWNmJqgri4Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen </iframe>
    </div>
  </body>
</html>