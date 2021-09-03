<?php
   
    include_once 'function/funcaoParImpar.php';
    require_once 'function/constantes.php';
    require_once('function/variaveis.php');



    if(isset($_POST["enviar"])){
        if($_POST["inicial"] == "" || $_POST["final"] == ""){ 
            echo (ERRO_CAIXA_VAZIA);
        }
        else{
        
        $inicial = (int)$_POST["inicial"];
        $final = (int)$_POST["final"];
        
            
        if($inicial > $final)
            echo (ERRO_MAIOR . " " .  $inicial ." é maior que " . $final);
        else if($inicial == $final)
            echo ("O valor inicial é o mesmo que o final ($inicial)");
        else{
            $pares = retornaPares($inicial, $final);
            $impares = retornaImpares($inicial, $final);
            $paresQ = (int)quantidadePares($inicial, $final);
            $imparesQ = (int)quantidadeImpares($inicial, $final);
        }
            
        }
    }
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="CSS/style.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet"
              type="text/css"
              href="CSS/parimpar.css">
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
    <h1 class="Titulo">
        Impar ou Par
    </h1>

        <form method="post" action="" name="">
            <div class="container" >
                <select name="inicial">
                    <option selected disabled>Por favor, insira um número.</option>
                    <?php
                        drawOptions(0, 500);
                    ?>
            </select>
                <select name="final">
                    <option selected disabled>Por favor, insira outro número.</option>
                    <?php
                        drawOptions(100, 1000);
                    ?>
                </select>
            </div>
            <div class="resultado">
                <div class="resultado">
                    <h1>
                        PARES
                    </h1>
                    <p>
                        <?=$pares?>
                    </p>
                    <h3>
                        Quantidade: <?=$paresQ?>
                    </h3>
                </div>
                <div class="resultado">
                    <h1>
                        IMPARES
                    </h1>
                    <p>
                        <?=$impares?>
                    </p>
                    <h3>
                        Quantidade: <?=$imparesQ?>
                    </h3>
                </div>
            </div>
            <div class="enviar">
                <input name="enviar" type="submit">
            </div>
        </form>
    
    
</body>
</html>