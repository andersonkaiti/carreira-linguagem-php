<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variável x é $x.";
        echo "<br>A variável criada recebeu o valor $abc.";
    ?>
</body>
</html>