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
 
    echo "<br>Decimal para binário: " . inteiroParaBinario(8);

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

    
    echo "<br>Binário para decimal: " . binarioParaDecimal(1010);

    //Conversão de Decimal para Hexa
    function decimalParaHexa($num1){
        $hexa = "";
        $resto = 0;
        $resultado = 0;

        while($num1 >= 1){
            $resultado = $num1 / 16;
            $resto = $num1 % 16;

            if($resto >= 10){
                switch($resto){
                    case 10:
                        $resto = "A";
                        break;
                    case 11:
                        $resto = "B";
                        break;
                    case 12:
                        $resto = "C";
                        break;
                    case 13:
                        $resto = "D";
                        break;
                    case 14:
                        $resto = "E";
                        break;
                    case 15:
                        $resto = "F";
                        break;
                    default:
                        return "Número inválido";
                        break;    
                }//Fim do switch
            }//Fim do if
            
            $hexa .= $resto;
            $num1 = $resultado;  
        }//fim do while

        return strrev($hexa);
    }//Fim da função

    echo "<br>Decimal para hexadecimal: " . decimalParaHexa(16);

    //Conversão de Hexa para Decimal
    function hexaParaDecimal($num1){
        $contador = 0;
        $decimal = 0;
        while($contador != strlen($num1)){
            if(substr($num1, $contador, 1) <= 9){
                $decimal = $decimal + (substr($num1, $contador, 1) * (16 ** (strlen($num1) - ($contador + 1))));
            }
            else{
                switch(substr($num1, $contador, 1)){
                    case "A":
                        $decimal = $decimal + (10 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    case "B":
                        $decimal = $decimal + (11 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    case "C":
                        $decimal = $decimal + (12 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    case "D":
                        $decimal = $decimal + (13 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    case "E":
                        $decimal = $decimal + (14 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    case "F":
                        $decimal = $decimal + (15 * (16 ** (strlen($num1) - ($contador + 1))));
                        break;
                    default:
                        return "Número inválido";
                        break;    
                }//Fim do switch
            }  
            $contador = $contador + 1;
        }//Fim do while
        return $decimal;

        
    }//Fim da função

    echo "<br>Hexadecimal para decimal: " . hexaParaDecimal("10");

    //Imprimir a sequência de Fibonnaci onde o número informado pelo
    //usuário será a última posição a ser mostrado

    function fibonnaci($posicao){
        $contador = 0;
        $sequencia = "";
        $primeiraPosicao = 1;
        $segundaPosicao = 1;
        $soma = 0;

        while($contador <= $posicao){
            if($contador == 0){
                $sequencia = $sequencia . $primeiraPosicao;
            }
            if($contador == 1){
                $sequencia = $sequencia . ", " . $segundaPosicao;
            }
            if($contador > 1){
                $soma = $primeiraPosicao + $segundaPosicao;
                $sequencia = $sequencia . ", " . $soma;
                $primeiraPosicao = $segundaPosicao;
                $segundaPosicao = $soma;
            }
            $contador = $contador + 1;
        }//Fim do while
        return $sequencia;

    }//Fim da função

    echo "<br>Sequência de Fibonnaci: " . fibonnaci(10);
?>