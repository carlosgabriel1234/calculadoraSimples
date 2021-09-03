<?php
    /*
    
    include
    include_once
    require
    require_once
    */

 

 

    
// criando função para calcular operações matemáticas
function calcular($n1,$n2,$tipoCalc){// 1 PASSO
    // criando variaveis locais dentro da funcao, recebendo os valores que estão recebendo os valores
    $numero1 = (double)0; // 2 PASSO
    $numero2 = (double) 0;
    $total = (double) 0;
    $opcaoCalculo = (string) null;
    
    // guardando os valores dos argumentos nas variaveis locais da função, $numero1 recebe $ n1 etc...
    $numero1 = $n1; // 3 PASSO
    $numero2 = $n2;
    $opcaoCalculo = $tipoCalc;
    
    
    
     switch ($opcaoCalculo){ // 4 PASSO
             //verificacao para qual tipo de calculo será realizado
            case ('SOMA'):
                 $total = $numero1 + $numero2; // 5 PASSO
             break;
            case  ('SUB'):
                $total = $numero1 - $numero2; // 6 PASSO
               
             break;
            case ('MULT'):
                $total = $numero1 * $numero2; // 7 PASSO
            break;
             // tratamento de erro para divisao por zero
         case ('DIV'):              
            if($numero2 == 0) // 8 PASSO
                 echo(ERRO_DIVISAO_ZERO);
             else
                $total = round($numero1 / $numero2);
                break;
              //default - essa opcao sera executada caso nenhuma das opçôes do case seja Válida
            default: // 9 PASSO
                  echo(ERRO_CAIXA_VAZIA);
      }
    
    return $total; // 10 PASSO
        
}

 

 

?>