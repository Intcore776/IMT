<?php

//Задача 6 Сгенерировать массив из 10-ти случайных чисел. После этого, сгенерировать одно случайно число и проверить, входи ли оно в данный массив. +
//генерируем массив случайных чисел
 //Объявляем массив: 
$array = array();
//Заполняем массив случайными числами: 
for ($i = 0; $i < 10; $i++) {
  $array[$i] = rand(0, 10);
}
 
 //Выводим содержимое массива: 
print_r($array). '<br>';
echo "<br><br>";
$arr = $array; 
$number = rand(0, 10);
if (in_array($number, $arr)) {
	
	echo "Число $number входит в данный массив";
} else {
	echo "Число $number  не входит в данный массив";
}


?>