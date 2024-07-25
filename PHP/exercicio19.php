<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1> Exercício 19 </h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; 
        ?>
        <a href="./exercicios11ate20.php"><h3> Exercícios 11 até 20 </h3></a>
        <textArea rows="20" cols="40" name="texto">
            <?php
            ?>
        </textArea>
        <button> Calcular
            <?php
                $texto = $_POST['texto'];
            ?>
        </button><br><br>
        <label>Quantidade de palavras: 
            <?php
                echo exercicio19($texto);
            ?>
        </label>
           
        </input>
    </form>
</body>
</html>