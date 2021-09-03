<?php 
require_once('function/variaveis.php');
require_once('function/constantes.php');


if(isset($_POST['btnCalcular']))
{
    
    
    if($_POST['tab']=="" || $_POST['cont']=="")
    
        echo(ERRO_CAIXA_VAZIA);
    else{
        
            //Regastando valores do formulario no hmtl
    $tabuada = $_POST['tab'];
    $contador = $_POST['cont'];
    
      
    //Validação para verificar se os dados sao numeros
    if(is_numeric($tabuada) && is_numeric($contador)){
         
                 while($count<=$contador){
                    $operacao = $operacao .  $tabuada . " x " . $count . " = " .            ($tabuada*$count). "<br/>";
                        $count++;
                    
                        }
                    
    } else
    
         //Validação para verificar se os dados sao numeros
            echo(ERRO_DADOS_NAO_NUMERICOS);
      
    } //Validação para caixa vazia
}


 ?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>Tabuada</title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="CSS/tabuada.css">
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
        
      <div>
            <form action="" method="post">
                <div>
                <label>
                    Tabuada:
                </label>
                <input type="text" name="tab" >
                </div>
                <div>
                    <label>
                Contador:
                </label>
                <input type="text" name="cont">
                </div>
                <div>
            <input type="submit" name="btnCalcular" value="Calcular">
            </div>
                <div >
                    <h1>O Resultado é:<br> <?php echo($operacao);?>  </h1>    
            </div>
                <div>

                

                </div>
 </form> 
        </div>

    </body>
</hmtl>