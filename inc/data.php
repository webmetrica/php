 

<?php
$hour = (int)strftime('%H');
$welcome = '';

if($hour > 0 and $hour < 6)
$welcome = 'Доброй ночи';

elseif($hour >= 6 and $hour < 12)
$welcome = 'Доброе утро';

elseif($hour >= 12 and $hour < 18)
$welcome = 'Добрый день';

elseif($hour >= 18 and $hour < 23)
$welcome = 'Доброе вечер';

else
$welcome = 'Доброй ночи';



// Объявление констант
define('COPYRIGHT', 'Супер Мега Веб-мастер');



// Выбираем дату
setlocale(LC_ALL, "ru_RU.utf8");
$day = strftime('%d');
$mon = strftime('%B');
$year = strftime('%Y');
 
?>





