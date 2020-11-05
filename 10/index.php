<?php
if (isset($_POST['a']) && isset($_POST['c']) && isset($_POST['d'])) {
    $a = $_POST['a'];
    $c = $_POST['c'];
    $d = $_POST['d'];

    $result = ((2 * $c) + (51 * $d)) / ($d - $a - 1);

    $formula = "( 2 * " . $c . " + 51 * " . $d . " ) / ( " . $d . " - " . $a . " - 1 ) = " . $result;
} else {
    $formula = "( 2 * c + 51 * d ) / ( d - a - 1 )";
}
?>

<div class="div">
<form style="text-align: center;" action="index.php" method="POST">
    <label for="a">Введите a:</label>
    <input type="number" name="a" id="">
    <br>
    <label for="a">Введите c:</label>
    <input type="number" name="c" id="">
    <br>
    <label for="a">Введите d:</label>
    <input type="number" name="d" id="">
    <br>
    <input type="submit" value="посчитать">
</form>

<p class="result"> <?php echo $formula; ?> </p>
</div>

<style>
    .div {
        margin: 20px;
    }

    label, input {
        margin: 5px;
    }

    .result {
        text-align: center;
    }
</style>