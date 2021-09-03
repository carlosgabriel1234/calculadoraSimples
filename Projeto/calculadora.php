<?php
/*
include
include_once

require
require_once
*/
//Importe do arquivo de funções para realizar calculos 
require_once('function/calculos.php');
require_once('function/constantes.php');
require_once('function/variaveis.php');
//Declarando uma variavel e definindo seu tipo de dados 
/*$resultado = (double) 0;
$valor1 = (double) 0;
$valor2 = (double) 0;
$operacao = (string) null;*/

//Criando constantes para o projeto

//forma 01 de criar uma constante
/*define('ERRO_CAIXA_VAZIA', "<span class='msgErro'>Não é possivel calcular sem preencher todos os campos </span>");

//forma 02 de criar uma constante
const ERRO_DADOS_NAO_NUMERICOS = "<span class='msgErro'>Não é possivel realizar calculos com valores não numericos</span>";

const ERRO_DIVISAO_ZERO = "<span class='msgErro'> Impossivel realizar uma divisão por zero! </span>";*/

/* 
    string - Tipo de dados TEXTO
    int ou interger - Tipo de dados numerico inteiro
    double - Tipo de dados numerico com casas decimais (capacidade maior de armazenamento)
    float - Tipo de dados numerico com casas decimais (capacidade menor de armazenamento)
    boolean ou bool - Tipo de dados (true/false)
    array - tipo de dados para vetores e matrizes 
    object - Tipo de dados para referenciar um objeto 
    
    
*/

//CRIANDO FUNÇÂO PARA CALCULAR OPERAÇÕES MATEMÁTICAS



//Validação para verificar se o botao calcular foi acionado
if(isset($_POST['btnCalcular']))
{
    
    //(if abaixo)Validação para caixa vazia
    //modo 1
    if($_POST['txtum']=="" || $_POST['txtdois']=="")
    //empty() - Permite verificar se um elemento é vazio 
    //modo 2
    //if(empty ($_POST['txtum']) || empty ($_POST['txtdois']))
        echo(ERRO_CAIXA_VAZIA);
    else{
        
            //Regastando valores do formulario no hmtl
    $valor1 = $_POST['txtum'];
    $valor2 = $_POST['txtdois'];
    

    //Resgata o valor do radio e converte a escrita para MAIUSCULA
    //strtoupper() maisculo
    //strtolower() minusculo
        
        //Validação para a escolha de uma operação de calculo
        if(isset($_POST['btnConta']))
        {
            
        
    $operacao = strtoupper($_POST['btnConta']);

    //Validação para verificar se os dados sao numeros
    if(is_numeric($valor1) && is_numeric($valor2))
        {
        
        //Chamada da funcão calcular, enviando os argumentos de valores e operação 
        $resultado = calcular($valor1, $valor2, $operacao);
        
        
        
        
        
    //Validaçao para identificar os tipos de calculos 
/* if($operacao == 'SOMAR')

    $resultado = $valor1 + $valor2; 
    elseif ($operacao == 'SUBTRAIR')
        {
        $resultado = $valor1 - $valor2;
        $chkSubtrair = 'cheked';
        }
    elseif ($operacao == 'MULTIPLICAR')
        $resultado = $valor1 * $valor2;
    elseif
        ($operacao == 'DIVIDIR')
            $resultado = round($valor1 / $valor2, 2);
*/      
        } //Validação para verificar se os dados sao numeros
        else
            echo(ERRO_DADOS_NAO_NUMERICOS);
        
    } //Validação para a escolha de uma operação de calculo
        else
            echo(ERRO_CAIXA_VAZIA);
            
       
    } //Validação para caixa vazia
} //Validação para verificar se o botao calcular foi acionado

    

?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
           Calculadora Simples
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/calculadora.css">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/style.css">
    </head>
    <body>
        
         <div>
            <div class="hamburger">
                <span class="ham"></span>
                <span class="ham"></span>
                <span class="ham"></span>
                
                <div class="hamburger-content">
                    <ul>
                        <li>
                            <a href="media.php">
                            Média
                            </a>
                        </li>
                        <li>
                            <a href="calculadora.php">
                                Calculadora
                            </a>
                            </li>
                        <li>
                            <a href="tabuada.php">
                            Tabuada
                            </a>
                            </li>
                        <li>
                            <a href="parimpar.php">
                            Pares e Impares
                            </a>
                        </li>
                    </ul>
                
                </div>
            </div>

         </div>

        <div id="formValor">
            <h1>Calculadora Simples</h1>
            <form name="frmValor" action="" method="post">
            <div>
                <label>
                Valor 1:
                </label>
            <input type="text" name="txtum" size="50" maxlength="5" value="<?=$valor1?>" placeholder="Insira o valor" >
            </div>
                <label>
                Valor 2:
                </label>
            <input type="text" name="txtdois" size="50" maxlength="5" value="<?=$valor2?>" placeholder="Insira o valor" >
                
            <div>
   
                <div>
                        <input type="radio" name="btnConta" value="Somar" <?php
                               if($operacao == 'SOMAR')
                                   echo ('checked');?>>Somar
                    
                </div>
                <div>
                        <input type="radio" name="btnConta" value="Subtrair" 
                               <?= $operacao=='SUBTRAIR'? 'checked' : '' ?>>Subtrair
                </div>
                <div>
                        <input type="radio" name="btnConta" value="Dividir" <?= $operacao=='DIVIDIR'? 'checked' : '' ?>>Dividir
                </div>
                <div>
                         <input type="radio" name="btnConta" value="Multiplicar" <?php
                               if($operacao == 'MULTIPLICAR')
                                   echo ('checked');?>>Multiplicar 
                </div>
    
                <input type="submit" name="btnCalcular" value="Calcular"> 
                 
                
            <div id="botaoReset">
                <a href="calculadora.php">
                Limpar
                </a>
                </div>
            </div>
            
            <div >
                <h1>O Resultado é: <?php echo($resultado); ?> </h1>    
            </div>
         
            </form>
        </div>     
    </body>
</html>





