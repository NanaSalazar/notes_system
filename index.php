<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>
<body>
<header id="header">
        <h1 class="title"> Sistemas de Notas</h1>
    </header>
    <div class="boxalunos">
        <div class="materia">
            <p>Trabalho 1 - T1</p>
            <p>Trabalho 2 - T2</p>
            <p>Prova 1 - P1</p>
            <p>Prova 2 - P2</p>
            <p>Situação</p>
        </div>
        <div class="container">
            <div class="newAluno">
                <form method="post" action="index.php">
                    <input type="text" name="nName" id="iName" placeholder="Nome do aluno" class="inputName">
                    <input type="number" name="nT1" id="iT1" class="inputNota" maxlength="20">
                    <input type="number" name="nT2" id="iT2" class="inputNota">
                    <input type="number" name="nP1" id="iP1" class="inputNota">
                    <input type="number" name="nP2" id="iP2" class="inputNota">
                    
                    <?php
                    $t1 = $_POST["nT1"];
                    $t2 = $_POST["nT2"];
                    $p1 = $_POST["nP1"];
                    $p2 = $_POST["nP2"];
            
                    $media = ($t1 + $t2 + $p1 + $p2) / 2;
            
                    if ($media > 30) {
                        echo "Aprovado!";
                    } else {
                        echo "Reprovado";
                    }
            
                    ?>
                    
            </form>
            </div>
            
        </div>
        <button class="inserir" id="inserir">Inserir aluno</button>
    </div>
</body>
</html>