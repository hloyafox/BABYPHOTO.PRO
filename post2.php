<meta http-equiv='refresh' content='3; url=http://hf.volgaunion.ru/'> 
<meta charset="UTF-8" />

<?php
$adress = "alternativa.cdo@yandex.ru";
$header = "Заявка на фотосессию";
$name = $_POST['name2']; 
$phone = $_POST['phone2']; 
$age = $_POST['age2']; 
$time = $_POST['time2'];

$mes = "Имя: $name \nТелефон: $phone \nВозраст: $age \nВремя: $time";
$send = mail($adress, $header, $mes, "Content-type:text/plain; charset = UTF-8\r\nFrom:$name");
if ($send == 'true') {echo "Сообщение отправлено";}
else {echo "Ой, что-то пошло не так";};

?>