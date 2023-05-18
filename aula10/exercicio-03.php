<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
    <?php
        $estado = isset($_GET["estados"]) ? $_GET["estados"] : "nenhum Estado selecionado";
        switch ($estado) {
            case 1:
            case 3:
            case 4:
            case 14:
            case 22:
            case 23:
            case 27:
                echo "Você mora na região <span class='foco'>Norte</span>.";
                break;
            case 2:
            case 5:
            case 6:
            case 10:
            case 15:
            case 17:
            case 18:
            case 20:
            case 26:
                echo "Você mora na região <span class='foco'>Nordeste</span>.";
                break;
            case 7:
            case 9:
            case 11:
            case 12:
                echo "Você mora na região <span class='foco'>Centro-Oeste</span>.";
                break;
            case 8:
            case 13:
            case 19:
            case 25:
                echo "Você mora na região <span class='foco'>Sudeste</span>.";
                break;
            case 16:
            case 21:
            case 24:
                echo "Você mora na região <span class='foco'>Sul</span>.";
        }
    ?>
    <a href="javascript:history.go(-1)" class="botao">Voltar</a>
</body>
</html>