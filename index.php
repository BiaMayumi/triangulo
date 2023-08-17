<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validador de Triângulos</title>
</head>
<body>
    <h1 align="center">Validador de Triângulos</h1>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

    <label for="ladoA"> Lado A: </label>
    <input type="number" name="ladoA">

    <label for="ladoB"> Lado B: </label>
    <input type="number" name="ladoB">

    <label for="ladoC"> Lado C: </label>
    <input type="number" name="ladoC">
    <br><br>
    <input type="submit">
    <input type="reset">

    <?php
    if(isset($_POST["ladoA"]) && isset($_POST["ladoB"]) && isset($_POST["ladoC"])) {
        
        $a = $_POST["ladoA"];
        $b = $_POST["ladoB"];
        $c = $_POST["ladoC"];

        if (($a < ($b + $c)) && ($b < ($a + $c)) && ($c < ($a + $b))) {
            echo "<br><br>Isto é um triângulo!";
        } else {
            echo "<br><br>Isto não é um triângulo";
        }
    }
    ?>
    </form>
</body>
</html>