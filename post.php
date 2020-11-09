<meta http-equiv='refresh' content='10'; url='http://babyphoto.website.yandexcloud.net/index.html'> 
<meta charset="UTF-8">

<?php
$to = "hloyatrash@gmail.com"
$name = $_POST['name']; 
$phone = $_POST['phone']; 
$age = $_POST['age']; 
$time = $_POST['time'];

$mes = "Имя: $name \nТелефон: $phone \nВозраст: $age \nВремя: $time";
$send = mail($to, $mes, "Content-type:text/plain; charset = UTF-8");
if ($send == 'true') {echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";};

?>