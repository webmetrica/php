

<?php
// Массив меню
$left_menu = array(
array('link'=>'Домой', 'href'=>'index.php'),
array('link'=>'О нас', 'href'=>'index.php?id=about'),
array('link'=>'Контакты', 'href'=>'index.php?id=contact'),
array('link'=>'Таблица умножения', 'href'=>'index.php?id=table'),
array('link'=>'Калькулятор', 'href'=>'index.php?id=calc')
);

// Функция отрисовки вертикального и горизонтального меню

function drawMenu($menu, $vertical=true){

if(!$vertical) // делаем инверсию, чтобы попасть в if при значении FALSE
$style = " style='display:inline;margin-right:15px;'";

echo "<ul>";
 
 foreach ($menu as $item) {
 echo "<li$style>";
 echo "<a href='{$item['href']}'> {$item['link']} </a>"; // экранируем {} переменные
 echo "</li>";
 } 

echo "</ul>";
}


// Выводим вертикальное и горизонтальное меню
// drawMenu($left_menu);
// drawMenu($left_menu, false);

?>


