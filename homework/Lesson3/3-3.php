<?php
 
 $regions = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 
 			'Ленинградская область' => ['Санкт-Петербург', 'Павловск', 'Выборг'],
 			'Ростовская область' => ['Ростов','Азов','Шахты']
 ];

foreach ($regions as $key => $value) {
 echo $key . ':<br>';
foreach ($value as $key => $value) {
 echo $value . '<br>';
 }
 echo "<br>";
}
?>