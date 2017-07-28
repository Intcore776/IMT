<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
		<link rel="stylesheet" type="text/css" href="css1/task2.css" />
        <title>Table_1</title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h3>
                    Cоздать массив из 1000 чисел каждый элемент которого равен квадрату своего номера.<br> Результат вывести в виде таблицы (офорить ее рамкой)
                </h3>
            </header>
            
            <table>
                <caption>Таблица</caption>
                <tr>
                    <th>
                        <?php echo "Индекс массива"; ?>
                    </th>
                    <th>
                        <?php echo "Элемент массива"; ?>
                    </th>
                </tr>

                <?php $arr = array(); ?>
                <?php for ($i = 0; $i < 1000; $i++) : ?>
                    <tr>
                        <td>
                            <?php echo $i; ?>
                        </td>
                        <td>
                            <?php $arr[$i] = pow($i, 2); ?>
                            <?php echo ($arr[$i]); ?>
                        </td>
                    </tr>
                <?php endfor;?>
            </table>
        </div>
    </body>
</html>