<meta http-equiv="Content-Type" content="text/html; charset=utf-8 "/>
<?php
/**
 * Created by PhpStorm.
 * User: Intco
 * Date: 05.07.2017
 * Time: 23:26
 */

/*
Задание 1.
 Вывести четные числа от 0 до 101, с помощью цикла while. */

echo "Задание 1.
 Вывести четные числа от 0 до 101, с помощью цикла while." . '</br>';

$i = 0;
while ($i++ < 101) {
    if ($i % 2 === 0) {
        echo $i . '  ';
    }
}

echo '</br>';
echo '</br>';
/*
Задание 2.
Вывести числа в следущей последовательности: 200 199 198 … 0. Задание решите с помощью цикла for
*/

echo "Задание 2.
Вывести числа в следущей последовательности: 200 199 198 … 0. Задание решите с помощью цикла for" . '</br>';
for ($p = 200; $p >= 0; $p--) {
    echo $p . '  ';
}
echo '</br>';
echo '</br>';
/*
Задание 3.
 Найти сумму чисел от 0 до 100 (включительно). (0+1+2+3+4+5).Задачу решите с помощью цикла for.
 */

echo "Задание 3.
 Найти сумму чисел от 0 до 100 (включительно). (0+1+2+3+4+5).Задачу решите с помощью цикла for." . '</br>';

for ($r = 0; $r <= 100; $r++) {
    $e += $r;
}
echo $e . '</br>';

echo '</br>';
echo '</br>';

/*Задача. 4
 Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик.
*/

echo "Задача. 4
 Дан массив с элементами 'html', 'css', 'php', 'js', 'jq'. С помощью цикла foreach выведите эти слова в столбик." . '</br>';

$arr = array('html', 'css', 'php', 'js', 'jq');

foreach ($arr as $v) {
    echo $v . '</br>';
}
echo '</br>';
echo '</br>';

/*Задача 5
Вывести строку Hello World! в столбец при помощи цикла for
*/
echo "Задача 5
Вывести строку Hello World! в столбец при помощи цикла for" . '</br>';

$str = "Hello World!";
$length = strlen($str);
for ($m = 0; $m < $length; $m++) {
    echo $str[$m] . '</br>';
}

echo '</br>';
echo '</br>';

/* Задача 6
Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
*/

echo "Задание 6. Дан массив $arr. С помощью цикла foreach выведите на экран столбец ключей и элементов в формате 'green - зеленый'.
$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];" . '</br>';
$arr2 = array('green' => 'зеленый', 'red' => 'красный', 'blue' => 'голубой');
foreach ($arr2 as $key => $value2) {
    echo $key . '=>' . $value2. '<br>';
}

echo '</br>';
echo '</br>';

/* Задача 7
Создать массив из 100 случайных чисел используя функцию rand. Ключи массива должны быть созданы в обратном порядке. [100]=> число, [99]=> число.
*/

echo "Задание 7. Создать массив из 100 случайных чисел используя функцию rand. Ключи массива должны быть созданы в обратном порядке. [100]=> число, [99]=> число.
" . '</br>';
$arr = array();
for ($x = 100; $x > 0; $x--) {
    $arr[x] = rand();
    echo "$x = $arr[x] <br>";
}

echo '</br>';
echo '</br>';

/*Задача 8
Создать таблицу умножения 10 на 10 при помощи цикла for и разукрасить каждое число разным цветом.
Подсказка: создайте массив из 10 кодов разных цветов, и меняйте цвет текста каждого числа, выбирая его из массива цветов.
*/

echo "Задача 8
Создать таблицу умножения 10 на 10 при помощи цикла for и разукрасить каждое число разным цветом.
Подсказка: создайте массив из 10 кодов разных цветов, и меняйте цвет текста каждого числа, выбирая его из массива цветов." . '</br>';

echo '<table border = 1>';
$color = array('#0000FF', '#006400', '#008000', '#008080', '#191970', '#800080', '#87CEFA', '#B0E0E6', '#B8860B', '#C0C0C0');
for ($a = 1; $a <= 10; $a++) {
    echo '<tr>';
    for ($b = 1; $b <= 10; $b++) {
        echo '<td bgcolor = "' . $color[$b - 1] . '">';
        echo $a * $b;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


echo '</br>';
echo '</br>';


/*Задача 9: Создать массива из 10-ти случайных чисел и выполнить сортировку его значений пузырьковым способом (алгоритмом).
Описание а наглядное представление метода сортировки найдете тут https://habrahabr.ru/post/204600/
 https://ru.wikipedia.org/wiki/%D0%A1%D0%BE%D1%80%D1%82%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B0_%D0%BF%D1%83%D0%B7%D1%8B%D1%80%D1%8C%D0%BA%D0%BE%D0%BC */

echo "Задание 9. Создать массива из 10-ти случайных чисел и выполнить сортировку его значений пузырьковым способом (алгоритмом)." . '</br>';
for ($q = 0; $q < 10; $q++) {
    $mas[$q] = rand(0, 1000);
}
for ($el = 0; $el < count($mas); $el++) {
    for ($z = 0; $z < count($mas); $z++) {
        if ($mas[$el] < $mas[$z]) {
            $temp = $mas[$el];
            $mas[$el] = $mas[$z];
            $mas[$z] = $temp;

        }
    }
}
for ($q = 0; $q < 10; $q++) {
    echo $mas[$q] . "  ";
}
