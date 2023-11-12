<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>


    <?php
        $t1 = $_POST["nT1"];
        $t2 = $_POST["nT2"];
        $p1 = $_POST["nP1"];
        $p2 = $_POST["nP2"];

        $media = ($t1 + $t2 + $p1 + $p2) / 2;

        if ($media > 70) {
            echo "Aprovado";
        } else {
            echo "Reprovado";
        }

    
    ?>
</body>
</html>