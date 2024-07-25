<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios</title>
</head>
<body>
    <h1> Exercícios 02 até 10 </h1>
    <form method="POST">
        <?php
            include 'funcoes.php'; 
        ?>
        <a href="./index.php"><h3> Cálculos </h3></a>
        <a href="./exercicio06.php"><h3> Exercício 06 </h3></a>
        <a href="./exercicios11ate20.php"><h3> Exercícios 11 até 20 </h3></a>
        <label>Informe um número: </label>
        <input type="number" id="num1" name="num1"/> 

        <button> Calcular
            <?php
                $num1 = $_POST['num1']; 
            ?>
        </button><br><br>
        <textArea rows="25" cols="40" readOnly>
            <?php
                echo "\nExercício02: " . exercicio02($num1) .
                    "\nExercício03: " . exercicio03($num1) .
                    "\nExercício04: O dobro de " . $num1 . " é " . exercicio04($num1) .
                    "\nExercício05: " . $num1 . "°C em °F é " . exercicio05($num1) .
                    "\nExercício07: " . exercicio07($num1) .
                    "\nExercício08: " . exercicio08($num1).
                    "\nExercício09: Soma de todos os números, de 1 até " . $num1 . " é " . exercicio09($num1).
                    "\nExercício10: " . exercicio10($num1);
            ?>
        </textArea>
    </form>
</body>
</html>