
<?php 

//declarando uma variavel e definindo o seu tipo de dados
$resultado = (double) 0;
$nota1 = (double) 0;
$nota2 = (double) 0;
$operacao = (string) null;

//Criando constante para o projeto

//Forma 01 de criar uma constante
define('ERRO_CAIXA_VAZIA',  " <span class='msgErro'> Não é possivel calcular sem preencher todos os dados! </span>");

//Forma 02 de crias uma constante
const ERRO_DADOS_NAO_NUMERICOS = " <span class='msgErro'> Não é possivel realizar calculos com valores não numericos </span>";

const ERRO_DIVISAO_ZERO = "<span class='msgErro'> impossivel realizar uma divisao por zero </span>";

/*
    - string - Tipo de dados Texto
    - int ou interger - Tipo de Dados númerico inteiro
    - double - Tipo de dados númerico com casas decimais
    (capacidade maior de armazenamento)
    - float -Tipo de dados númerico com casas decimais
    (capacidade maior de armazenamento)
    - boolean ou bool - Tipo de Dados (True/false)
    - array - Tipo de dados para vetores e matrizes
    - object - Tipo de dados para referenciar um objeto
    
*/

//Função para Calcular operações matematicas
function calcular($n1 ,$n2, $tipoCalculo)
{ 
    //Criando variaveis locais dentro da função
    $numero1 = (double) 0;
    $numero2 = (double) 0;
    $total = (double) 0;
    $opcaoCalculo = (string) null;
    
    //Guardando os valores dos argumentos nas variaveis locais nas variaveis local
    $numero1 = $n1;
    $numero2 = $n2;
    $opcaoCalculo = $tipoCalculo;
    
    //Verificaçao para qual tipo de calculo será realizado
    switch ($opcaoCalculo)
    {
            case('SOMAR'):
          $total = $numero1 + $numero2;
            break;
            case('SUBTRAIR'):
             $total = $numero1 - $numero2;
             break;
            case('MULTIPLICAR'):
             $total = $numero1 * $numero2;
            break;
            case('DIVIDIR'):
              if($numero2 == 0)
                  echo(ERRO_DIVISAO_ZERO);
            else
            $total = round( $numero1 / $numero2, 3);
            break;
            
            //essa opçao somente sera executada caso nenhuma das opçao de CASE seja válidada
        default:
            echo(ERRO_CAIXA_VAZIA);
    }
    
    return $total;
}



if (isset($_POST['btnCalcular']))
{ //validaçao para verificar se p botão calcular foi adicionado
    
    
    //empty() permiti verificar se um elemento é vazio
    if($_POST['txtnota1']=="" || $_POST['txtnota2']=="")
    
    //if(empty($_POST['txtnota1']) || empty($_POST['txtnota2']))
        
        echo (ERRO_CAIXA_VAZIA);
    else
        
    {//validaçao para caixa vazia
        
//resgatando valores do formulario no HTML
$nota1 = $_POST['txtnota1'];
$nota2 = $_POST['txtnota2'];



//resgata o valor do radio e converte a escrita para MAISCULO
//strtoupper() maiusculo
//strtolower() minusculo
        
//validaçao para escolha de uma operaçao de calculo
if (isset($_POST['btncalcular']))
{
$operacao = strtoupper($_POST['btncalcular']);

    
//validaçao para verificar se os dados são numeros
if(is_numeric($nota1) && is_numeric($nota2))
{
    //chamada da funçao calcular, enviadada os argumentos
    //de valores e operação
    $resultado = calcular($nota1 , $nota2 , $operacao);
    
        }//validaçao para verificar se os dados são numeros
    else
        echo(ERRO_DADOS_NAO_NUMERICOS);
    
    }//valiaçao para a escolha de uma operaçao de calculo
        else
     echo(ERRO_CAIXA_VAZIA);
    
    } //validaçao para caixa vazia

} //validaçao para verificar se p botão calcular foi adicionado

?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>  
          Aula de Formulário
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="css/style.css">
        <meta charset="utf-8">
    </head>
    <body>  
        <div id="formContatos" > 
            <h1> Calculadora Simples</h1>
            
           <form name="frmContatos" action="" 
                 method="post">
              <div>
                <label>
                   Nota 1:
               </label>
               <input type="text" name="txtnota1"
                      size="50" maxlength="40" value="<?=$nota1?>" placeholder="" >
               
               </div>
                <div>
                <label>
                   Nota 2:
               </label>
               <input type="text" name="txtnota2"
                      size="50" maxlength="40" value="<?=$nota2?>" placeholder="" >
               
              
               <label></label>
                 <input type="radio" name="btncalcular" value="somar"
                        <?= $operacao=='SOMAR' ? 'checked' : '' ?> >somar
                            <!-- para manter o radio marcado -->
               </div>
                 <div>
                   <label></label>
                      <input type="radio" name="btncalcular" value="subtrair" 
                              <?= $operacao=='SUBTRAIR' ? 'checked' : '' ?> >subtrair
                                <!-- para manter o radio marcado -->
               </div>
               <div>
                   <label></label>
                      <input type="radio" name="btncalcular" value="multiplicar" 
                             <?= $operacao=='MULTIPLICAR' ? 'checked' : '' ?> >multiplicar
                            <!-- para manter o radio marcado -->
               </div>
               <div> 
                    <label></label>
                   <input type="radio" name="btncalcular" value="dividir" 
                          <?= $operacao=='DIVIDIR' ? 'checked' : '' ?> >Dividir
                            <!-- para manter o radio marcado -->
               </div>
               <div>
                   <input type="submit" name="btnCalcular" value="calcular">
               </div>
              
               <div  id="resultado">
                    <a>
                       <?php  echo ($resultado);?> 
                   </a>
                
               </div>
               
            </form>
               
               
            
     </body>
            
    </html>