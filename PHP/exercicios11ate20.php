<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios 11 até 20</title>
</head>
<body>
    <h1> Exercícios 11 até 20 </h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; 
        ?>
        <a href="./index.php"><h3> Cálculos </h3></a>
        <a href="./exercicios2ate10.php"><h3> Exercícios 02 até 10 </h3></a>
        <a href="./exercicio16.php"><h3> Exercício 16 </h3></a>
        <a href="./exercicio17.php"><h3> Exercício 17 </h3></a>
        <a href="./exercicio19.php"><h3> Exercício 19 </h3></a>
        <label>Informe um número: </label>
        <input type="text" id="num1" name="num1"/> 

        <button> Calcular
            <?php
                $num1 = $_POST['num1']; 
            ?>
        </button><br><br>
        <textArea rows="25" cols="40" readOnly>
            <?php
                echo "\nExercício11: " . exercicio11($num1).
                    "\nExercicio12: " . exercicio12($num1).
                    "\nExercicio13: " . exercicio13($num1).
                    "\nExercicio14: " . $num1. " tem " . exercicio14($num1) . " vogal(is)".
                    "\nExercicio15: " . exercicio15($num1) . 
                    "\nExercicio18: " . exercicio18($num1).
                    "\nExercicio20: " . exercicio20($num1);
            ?>
        </textArea>
    </form>
</body>
</html>