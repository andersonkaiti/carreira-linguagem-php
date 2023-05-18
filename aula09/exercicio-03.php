<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Curso de PHP - CursoemVideo.com</title>
    <style>
        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        .nota {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php
        $n1 = isset($_GET["n1"]) ? $_GET["n1"] : "nota não informada";
        $n2 = isset($_GET["n2"]) ? $_GET["n2"] : "nota não informada";
        $m = is_numeric($n1) && is_numeric($n2) ? ($n1 + $n2) / 2 : "não foi possível calcular a média";
        if (is_numeric($n1) && is_numeric($n2)) {
            if ($m > 0 && $m < 5) {
                $s = "REPROVADO";
            } elseif ($m >= 5 && $m < 7) {
                $s = "RECUPERAÇÃO";
            } else if ($m >= 7 && $m <= 10) {
                $s = "APROVADO";
            }
        } else {
            $s = "não foi possível determinar a situação";
        }
        echo "A média entre <span class='nota'>$n1</span> e <span class='nota'>$n2</span> é igual a $m.<br>";
        echo "Situação do aluno: <span class='nota'>$s</span>.";
    ?>
</body>
</html>