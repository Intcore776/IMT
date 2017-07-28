<?php

/*Задача 5  Дана строка. Если ее длина больше 10 символов, то оставить в строке только первые 6 символов, 
иначе дополнить строку символами 'o' до длины 12.*/

$string = 'qwerty';
if (strlen($string) > 10) {
	$string = substr($string, 0, 5);
	echo $string. '<br><br><br>';
	
	} else {
	
	echo str_pad($string, 12, "o", STR_PAD_RIGHT). '<br><br><br>'; 
	
}	
?>