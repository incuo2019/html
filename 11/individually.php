<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Индивидуальная работа</title>
</head>

<body>
    <h2>Задача 2-1 - Таблица с числами</h2>

    <table style="text-align: center;">
        <?php
        for ($row = 0; $row < 10; $row++) {
        ?>
            <tr>
                <?php
                for ($column = 1; $column <= 10; $column++) {
                    if ((($row * 10) + $column) % 2 == 0) {
                ?>
                        <td style="color:#ff0000; border: 1px solid #333333;">
                            <?php echo " " . (($row * 10) + $column) . " "; ?>
                        </td>
                    <?php
                    } else {
                    ?>
                        <td style="color:#333333; border: 1px solid #333333;">
                            <?php echo " " . (($row * 10) + $column) . " "; ?>
                        </td>
                    <?php
                    }
                    ?>

                <?php
                }
                ?>
            </tr>
        <?php
        }
        ?>
    </table>

    <h2>Задача 2-2 - по варианту</h2>
    <h4>Характером натурального числа назовем сумму всех его делителей, не равных единице и самому числу.
        Характером простого числа будем считать нуль. Написать программу, которая вычисляет характер случайного числа N.</h4>

    <?php
        if(isset($_POST['number'])) {
            $number = $_POST['number'];

            $character = 0;

            for($i = 2; $i < $number; $i++) {
                if($number % $i == 0) {
                    $character += $i;
                }
            }
        }
    ?>

    <form action="individually.php" method="post">
        <input type="number" name="number" id="number" value="<?php echo (empty($number) ? '' : $number); ?>">
        <input type="submit" value="Проверить">
        <p>Характер числа: <?php echo (empty($character) ? 0 : $character); ?></p>
    </form>
</body>

</html>