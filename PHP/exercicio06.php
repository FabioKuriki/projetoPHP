<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1> Exercício 06 </h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; 
        ?>
        <a href="./exercicios2ate10.php"><h3> Exercícios 02 até 10 </h3></a>
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/>

        <label>Segundo Número: </label>
        <input type="number" id="num1" name="num2"/> 

        <label>Terceiro Número: </label>
        <input type="number" id="num1" name="num3"/> 

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
            ?>
        </button><br><br>
        <textArea rows="20" cols="40" readOnly>
            <?php
                echo "\nExercício06: " . exercicio06($num1, $num2, $num3);
            ?>
        </textArea>
    </form>
</body>
</html>