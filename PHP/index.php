<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
</head>
<body>
    <h1> Cálculos </h1>
    <a href="./exercicios2ate10.php"><h3> Exercícios</h3></a>
    <form method="POST">
        <?php
            include 'funcoes.php'; //Conectando com o arquivo de funcoes
        ?>
        <label>Primeiro Número: </label>
        <input type="number" id="num1" name="num1"/> <!--o name servira para pegar o seu valor futuramente-->

        <label>Segundo Número: </label>
        <input type="number" id="num2" name="num2"/>

        <button> Calcular
            <?php
                $num1 = $_POST['num1']; //em colchetes o nome do name e o $_POST é para pegar os dados do formulário
                $num2 = $_POST['num2'];
            ?>
        </button><br><br>
        <textArea rows="20" cols="40" readOnly>
            <?php
                echo "\nSomar: " . somar($num1, $num2) . 
                "\nSubtrair: " . subtrair($num1, $num2) . 
                "\nMultiplicar: " .multiplicar($num1, $num2) . 
                "\nDividir: " . dividir($num1, $num2) .
                "\nEscolher: " . escolher($num1) .
                "\nDecimal -> Binário: " . inteiroParaBinario($num1) .
                "\nDecimal -> Binário: " . inteiroParaBinario($num2) .
                "\nDecimal -> Hexadecimal: " . decimalParaHexa($num1) .
                "\nDecimal -> Hexadecimal: " . decimalParaHexa($num2) ;
            ?>
        </textArea>
    </form>
</body>
</html>