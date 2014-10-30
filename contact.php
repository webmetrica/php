

<form action="" method="post">

<input name="name"><br />
<input name="age"><br />
<input type="submit"><br />

</form>

<?php

$name = trim(strip_tags($_POST['name'])); 
$age = abs((int)$_POST['age']); // Приводим к int и делаем целым

echo '<p>Ваше имя: ' . $name;
echo '<p>Ваш возраст: ' .  $age ;


// strip_tags - Функция удаляет отправляемые теги 
// trim - Функция удаляет пробелы
// int - Приводим к целому 
// abs - ?



?>