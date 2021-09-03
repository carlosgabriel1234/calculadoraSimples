<?php
require_once('function/variaveis.php');
require_once('function/constantes.php');

//Valida se o botao calcular foi acionado
if(isset($_POST["btnCalcular"]))
{
    //Resgatando dados das caixas de texto
    $nota1 = $_POST["txtum"];
    $nota2 = $_POST["txtdois"];
    $nota3 = $_POST["txttres"];
    $nota4 = $_POST["txtquatro"];
    
    
    //is_numeric()
    /* Operadores de comparação 
    
        <  
        >
        <=
        >=
        ==
        ===  (compara o conteudo e o tipo de dado)
        ==!  (compara o donteudo e o tipo de dado) 
      
    */
    
    //Tratamento para caixa vaiza
    if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4== "")
    {
        echo (ERRO_CAIXA_VAZIA);
    }
    else
    {
        //Tratamento para valores númericos
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
        {   
         $media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        }
        else
        {
            echo(ERRO_DADOS_NAO_NUMERICOS);
        }
    }
    //gettype() permite verificar o tipo de dados de uma variavel ou objeto 
    //echo(gettype($nota1));
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <title>
            Calculo da Média
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/media.css">
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
        

        <div id="formNotas">
            <h1>Calculo da Média</h1>
            <form name="frmNotas" action="" method="post">
            <div>
                <label>
                Nota 1:
                </label>
            <input type="text" name="txtum" size="50" maxlength="5" value="<?=$nota1?>" placeholder="Insira a nota" >
            </div>
                <label>
                Nota 2:
                </label>
            <input type="text" name="txtdois" size="50" maxlength="5" value="<?=$nota2?>" placeholder="Insira a nota" >
            <div>
                <label>
                Nota 3:
                </label>
            <input type="text" name="txttres" size="50" maxlength="5" value="<?=$nota3?>" placeholder="Insira a nota" >
            </div>
            
            <div>
                <label>
                Nota 4:
                </label>
            <input type="text" name="txtquatro" size="50" maxlength="5" value="<?=$nota4?>" placeholder="Insira a nota" >
            </div>
                
            <div>
            <input type="submit" name="btnCalcular" value="Calcular">
            <div id="botaoReset">
                <a href="media.php">
                Nova Soma
                </a>
                </div>
            </div>
            
            <div >
                <h1>A média é: <?php echo($media); ?> </h1>    
            </div>
         
            </form>
        </div>     
    </body>
</html>