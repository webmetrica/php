
<?php

// Функция отрисовки таблица умножения

$cnt = 0; // переменная $cnt - в глобальной области видимости

function drawTable($cols=5, $rows=5, $color='green'){


global $cnt; // Обращение к глобальной $cnt
$cnt++;
// Эти 2 строки можно записать в одну так $GLOBAL[cnt]++;
echo "<p>Таблица рисуется $cnt раз</p>";


echo "<table border='1'>" ;

for ( $tr=1 ; $tr <= $rows; $tr++) { // крутим пока переменная $tr не достигнет значения $rows
echo "<tr>" ; // Тело цикла 1

for ( $td=1 ; $td <= $cols ; $td++ ) { // крутим пока переменная $td не достигнет значения $cols

if($tr==1 or $td==1) // если td или th равно 1 (первая строка, первая колонка)
echo "<th style='background:$color'>" . $td * $tr . "</th>" ; // Тело цикла 2
else
echo "<td>" . $td * $tr . "</td>" ; // Тело цикла 2

}

echo "</tr>" ; // Тело цикла 1
} // закрываем 1 цикл

echo "</table>" ;

}
?>

<?php
drawTable(3, 3, '#f4f4f4') ;
drawTable(5, 5, '#f4f4f4') ;
drawTable(7, 7, '#f4f4f4') ;
?>

