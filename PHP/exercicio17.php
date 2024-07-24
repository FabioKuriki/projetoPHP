<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1> Exercício 17 </h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; 
        ?>
        <a href="./exercicios11ate20.php"><h3> Exercícios 11 até 20 </h3></a>
        <label>Primeiro número: </label>
        <input type="text" id="num1" name="num1"/>

        <label>Segundo número </label>
        <input type="text" id="num1" name="num2"/> 

        <label>Terceiro número </label>
        <input type="text" id="num1" name="num3"/> 
        
        <label>Quarto número </label>
        <input type="text" id="num1" name="num4"/> 

        <label>Quinto número </label>
        <input type="text" id="num1" name="num5"/> 

        <button> Calcular
            <?php
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $num3 = $_POST['num3'];
                $num4 = $_POST['num4'];
                $num5 = $_POST['num5'];
            ?>
        </button><br><br>
        <textArea rows="20" cols="40" readOnly>
            <?php
                echo "\nExercicio17: " . exercicio17($num1, $num2, $num3, $num4, $num5);
            ?>
        </textArea>
    </form>
</body>
</html>