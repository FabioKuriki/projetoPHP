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
    /*echo "<br>A soma dos números é: " . somar(5,6);
    echo "<br>A subtração dos números é: " . subtrair(5,6);
    echo "<br>A multiplicação dos números é: " . multiplicar(5,6);
    echo "<br>A divisão dos números é: " . dividir(6,7);
    echo "<br>A escolha é: " . escolher(3);*/


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
 
    /*echo "<br>Decimal para binário: " . inteiroParaBinario(8);*/

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

    
    /*echo "<br>Binário para decimal: " . binarioParaDecimal(1010);*/

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

    /*echo "<br>Decimal para hexadecimal: " . decimalParaHexa(16);*/

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

    /*echo "<br>Hexadecimal para decimal: " . hexaParaDecimal("10");*/

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

    /*echo "<br>Sequência de Fibonnaci: " . fibonnaci(10);*/

    //Par ou Ímpar
    function exercicio02($num1){
        if($num1 % 2 == 0){
            return "Par";
        }
        else{
            return "Ímpar";
        }
    }//Fim da função

    //Verificar se é maior de idade
    function exercicio03($num1){
        if($num1 < 0){
            return "informe um valor maior ou igual a zero";
        }
        else{
            if($num1 < 18){
                return "Você é menor de idade!";
            }
            else{
                return "Você é maior de idade!";
            }
        }
    }//Fim da função

    //Dobro do número informado
    function exercicio04($num1){
        $num1 = $num1 * 2;
        return $num1;
    }//Fim da função

    //Converter a temperatura em Celsius para Fahrenheit
    //F = C * 1,8 + 32
    function exercicio05($num1){
        $fahrenheit = ($num1 * 1.8) + 32;
        return $fahrenheit;
    }//Fim da função

    //Exibir o maior número de três números
    function exercicio06($num1, $num2, $num3){
        $maior = 0;
        if($num1 > $num2){
            $maior = $num1;
        }
        else{
            $maior = $num2;
            if($maior > $num3){
                return $maior;
            }
            else{
                $maior = $num3;
            }
        }
        return $maior;
    }//Fim da função

    //Positivo, negativo ou zero
    function exercicio07($num1){
        if($num1 == 0){
            return "Zero";
        }
        else{
            if($num1 > 0){
                return "Positivo";
            }
            else{
                return "Negativo";
            }
        }  
    }//Fim da função

    //Tabuada de 1 a 10 do número informado
    function exercicio08($num1){
        $tabuada = "";
        $i = 1;
        while($i < 11){
            $tabuada = $tabuada . "\n" . $num1 . " x " . $i . " = " . ($num1 * $i);
            $i++;
        }
        return $tabuada;
    }//Fim da função

    //Soma de todos os números de 1 até o número informado
    function exercicio09($num1){
        $i = 1;
        $soma = 0;
        while($i < $num1 + 1){
            $soma = $soma + $i;
            $i++;
        }
        return $soma;
    }//Fim da função

    //Verificar se é primo
    function exercicio10($num1){
        $i = $num1 - 1;
        
        if($num1 < 2){
            return "O número informado precisa ser maior que 1";
        }
        else{
            while($i != 1){
                if($num1 % $i == 0){
                    return "Não é primo";
                }
                $i--;
            }
            return "É primo";
        }
    }//Fim da função



    //Digitar palavra e verificar se é um palíndromo
    //palavra que mesmo lendo de trás para frente da no mesmo (ex: mirim == mirim no inverso)
    function exercicio11($palavra){
        if(strrev($palavra) == $palavra){
            return "É um palíndromo";
        }
        else{
            return "Não é um palíndromo";
        }
    }//Fim da função

    //Pegar um número e calcular o seu fatorial
    function exercicio12($num){
        $num = (int)$num;
        $fatorial = 1;
        if($num < 0){
            return "Informe um valor maior ou igual a 0";
        }
        if($num == 0){
            return 1;
        }
        while($num != 0){
            $fatorial = $fatorial * $num;
            $num--;
        }
        return $fatorial;
    }//Fim da função

    //Pegar um número e exibir os pares de 1(começa em 2) até o número informado
    function exercicio13($num){
        $num = (int)$num;
        $pares = "";
        $i = 1;
        while($i < $num + 1){
            if($i == 2){
                $pares = 2;
            }
            else{
                if($i % 2 == 0){
                    $pares = $pares . ", " . $i;
                }
            }
            $i++;
        }
        return $pares;
    }//Fim da função

    //Pedir uma palavra e contar as vogais
    function exercicio14($palavra){
        $vogais = 0;
        $i = 0;
        $tamanho = strlen($palavra) + 1;
        while($i < $tamanho){
            switch(substr($palavra, $i, 1)){
                case "a":
                    $vogais += 1;
                    break;
                case "A":
                    $vogais += 1;
                    break;
                case "e" :
                    $vogais += 1;
                    break;
                case "E" :
                    $vogais += 1;
                    break;
                case "i" :
                    $vogais += 1;
                    break;
                case "I" :
                    $vogais += 1;
                    break;
                case "o" :
                    $vogais += 1;
                    break;
                case "O" :
                    $vogais += 1;
                    break;
                case "u" :
                    $vogais += 1;
                    break;
                case "U" :
                    $vogais += 1;
                    break;
            }//Fim do switch
            $i++;
        }//Fim do while
        return $vogais;
    }//Fim da função

    //Pegar um número e exibir todos os números primos menores ou iguais a esse número
    function exercicio15($num){
        $num = (int)$num;
        $i = 2;
        $primos = "";
        if($num < 2){
            return "Não há número(s) primo(s)";
        }
        while($i < $num + 1){
            if($i == 2 || $i == 3 || $i == 5 || $i == 7 || $i == 11){
                $primos = $primos . $i . ",";
            }
            else{
                if($i % 2 != 0 && $i % 3 != 0 && $i % 5 != 0 && $i % 7 != 0 && $i % 11 != 0){
                    $primos = $primos . "," . $i;
                }
            }   
            $i++;
        }   
        return $primos;
    }//Fim da função

    //Pegar uma data(dia, mês, ano) e ver se é válida
    function exercicio16($dia, $mes, $ano){
        $mensagem = "";
        if($dia < 1 || $dia > 31){
            $mensagem .= "Dia inválido\n";
        }

        if($mes < 1 || $mes > 12){
            $mensagem .= "Mês inválido\n";
        }

        if($ano < 0){
            $mensagem .= "Ano inválido\n";
        }

        if($mensagem == ""){
            return "Data válida";
        }
        else{
            return $mensagem;
        }
        
    }//Fim da função

    //Pegar 5 números e exibir a média
    function exercicio17($num1, $num2, $num3, $num4, $num5){
        $media = 0;
        $media = ((float)$num1 + (float)$num2 + (float)$num3 + (float)$num4 + (float)$num5) / 5;
        return $media;
    }//Fim da função

    //Pegar um número e mostrar os seus divisores(números pelo qual pode ser dividido, ex: 6 pode ser dividido por 1,2,3,6)
    function exercicio18($num){
        $num = (int)$num;
        $i = 0;
        $divisores = "";
        if($num == 0){
            return 0;
        }
        else{
            $i = 1;
        }
        while($i < $num + 1){
            if($num % $i == 0){
                $divisores = $divisores . $i . ", ";
            }
            $i++;
        }
        return $divisores;
    }//Fim da função

    //Pegar um texto e contar as palavras
    //espaço é considerado no comprimento
    //usar um contador, usar o negocio de pegar comprimento, usar o espaço como condição para separar cada palavra?
    function exercicio19($texto){
        return str_word_count($texto);
    }//Fim da função

    //Pegar um número e calcular a sequência de Fibonnaci até esse número
    function exercicio20($num){
        $num = (int)$num;
        $contador = 0;
        $sequencia = "";
        $primeiraPosicao = 1;
        $segundaPosicao = 1;
        $soma = 0;

        if($num < 1){
            return "Informe um valor maior ou igual a 1";
        }
        
        if($segundaPosicao == 1){
            $sequencia = $sequencia . $primeiraPosicao;
            $sequencia = $sequencia . ", " . $segundaPosicao;
        }

        while($soma < $num + 1 ){
            $soma = $primeiraPosicao + $segundaPosicao;
            if($num >= 2){
                if($soma >= $num){
                    break;
                }
                else{
                    $sequencia = $sequencia . ", " . $soma;
                    $primeiraPosicao = $segundaPosicao;
                    $segundaPosicao = $soma;       
                }
            }
            else{
                break;
            }
            
            
        }//Fim do while
        return $sequencia;
    }//Fim da função
?>