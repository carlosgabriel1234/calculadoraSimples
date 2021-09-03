
<?php 
$media = 0;
$nota1=null;
$nota2=null;
$nota3=null;
$nota4=null;

if (isset($_POST['btnCalcular']))
    
    //valida se o botão calcular foi adicionado
{
    $nota1 = $_POST['txtnota1'];
    $nota2 = $_POST['txtnota2'];
    $nota3 = $_POST['txtnota3'];
    $nota4 = $_POST['txtnota4'];
    
    //is_numeric()
    
    /* operadores de comparação
     <
     >
     <=
     >=
     !=
     ==
     ===( compara o conteudo e o tipo de dados)
     ==! (compara o conteudo e o tipo de dados)*/
    
    
    //tratamento para caixa vazia
    if ($nota1 == "" || $nota2 == ""|| $nota3 == "" || $nota4 == "")
    {
        echo("<script> alert('Caixas Vazias!')</script>");
    }
    else
    {
        if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4))
        {
            $media = ($nota1+ $nota2+ $nota3+ $nota4) /4;
        }
    
        else
        {
            echo("<script> alert ('Não foi possivel calcular com dados não númericos');</script>");
        }
    }
    
   
}
   
    //gettype() permite verificar o tipo de dados de uma variavel ou objeto
    //echo(gettype($media));
    


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
            <h1> Calculo De Médias</h1>
            
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
               
               </div>
                <div>
                <label>
                   Nota 3:
               </label>
               <input type="text" name="txtnota3"
                      size="50" maxlength="40" value="<?=$nota3?>" placeholder="" >
               
               </div>
                <div>
                <label>
                   Nota 4:
               </label>
               <input type="text" name="txtnota4"
                      size="50" maxlength="40" value="<?=$nota4?>" placeholder="" >
               
               </div>
             <input type="submit" name="btnCalcular" value="Calcular">
               
             <div id="botaoReset">
                 <a href="index.php">
                    Novo Cálcular
                 </a>
                 
               </div>
               <h1 class="inferior"> 
                   A média é: <?php  echo ($media);?> 
               </h1>
            
    </body>
</html>