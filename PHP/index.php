<?php
    $num1 = 0;
    $num2 = 3;


    function somar($num1, $num2){
        return $num1 + $num2;

    }//fim do somar

    function subtrair($num1, $num2){
        return $num1 - $num2;

    }//fim do subtrair

    function multiplicar($num1, $num2){
        return $num1 * $num2;

    }//fim do multiplicar

    function dividir($num1, $num2){
        if($num2 <= 0){
            return "Impossivel dividir por zero!";
        }
        else{
            return $num1 / $num2;
        }
    }//fim do dividir

    function escolher($num1){
        switch($num1){
            case 1:
                return "Rosa";
                break;
            case 2:
                return "Preto";
                break;
            case 3:
                return "Branco";
                break;
            default:
                return "Cor não identificada";
                break;
        }//fim do switch
    }//fim do escolher

    //Imprimir os dados na tela
    echo "<br>A soma dos números é: " . somar(5,6);
    echo "<br>A subtração dos números é: " . subtrair(5,6);
    echo "<br>A multiplicação dos números é: " . multiplicar(5,6);
    echo "<br>A divisão dos números é: " . dividir(6,7);
    echo "<br>A escolha é: " . escolher(3);


    //Faça uma função que converte inteiro em binário strrev - inverte
    if($num1 == 1){
        $binario .= 1;
    }//fim do if
    function inteiroParaBinario($num1){
        $binario = "";
        $resto = 0;
        $resultado = 0;

        while($num1 >= 1){
            $resultado = $num1 / 2;
            $resto = $num1 % 2;
            $binario .= $resto;
            $num1 = $resultado;  
        }//fim do while

        return strrev($binario);
    }//Fim da função
 
    //binário em decimal
    //strlen - tamanho 
    //substr(texto, posicao inicial, comprimento = quantos digitos a partir da posição inicials) = pega todo o conteudo do texto informado
    function binarioParaDecimal($num1){
        $contador = 0;
        $decimal = 0;
        while($contador != strlen($num1)){
            if(substr($num1, $contador, 1) == 1){
                $decimal = $decimal + (2 ** (strlen($num1) - ($contador + 1)));
            }
            $contador = $contador + 1;
        } 
        return $decimal;
    }//Fim da função

    echo "<br>binário: " . inteiroParaBinario(16);
    echo "<br>decimal: " . binarioParaDecimal(1010);
?>