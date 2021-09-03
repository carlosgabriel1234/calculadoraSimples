<?php
   if (isset($_GET["btnSalvar"]))
   {
        //$_GET[] permite resgatar um dado enviado pelo metodo GET
    $nome = $_GET['txtnome'];
    $uf = $_GET['sltuf'];
    $sexo = $_GET['rdoSexo'];
     
    if (isset ($_GET['chkPortugues']))
    {
        $idiomaPortugues = $_GET['chkPortugues'];
    }else{
        $idiomaPortugues=null
    }
    if (isset ($_GET['chkIngles']))
    {
        $idiomaIngles = $_GET['chkIngles'];
    }else {
        $idiomaIngles=null
    }
    if (isset ($_GET['chkFrances']))
    {
         $idiomaFrances = $_GET['chkFrances'];
    }else {
        
        $idiomaFrances=null
    }
    
 //isset() -Verifica se o objeto ou variavel existe ou foi criado na programação (retorna verdadeiro ou falso)
    
    $senha = $_GET['txtSenha'];
    $obs = $_GET['txtObs'];


    echo("O nome digitado foi: <span class='destaque'>" . $nome . "</span>");
    echo("<br> O UF digitado foi:" . $uf);
    echo("<br> O sexo digitado foi:" . $sexo);
    echo("<br> O idioma digitado foi:" . $idiomaPortugues . " " .$idiomaIngles . " " 
         . $idiomaFrances);
    echo("<br> A senha digitada foi:" . $senha);
    echo("<br> A Observação digitada foi:" .$obs);
   }
 
    
?>
<!DOCTYPE html>
<html>
    <head>
        <title>  
          Aula de Formulário
        </title>
        <meta charset="utf-8">
        <link rel="stylesheet"
              type="text/css"
              href="css/style.css">
    </head>
    <body>  
        <div id="formContatos" > 
            <h1> FORMULARIO</h1>
            
           <form name="frmContatos" action="" 
                 method="get">
               <label>
                   Nome:
               </label>
               <input type="text" name="txtnome"
                      size="50" maxlength="40" value="" placeholder="insira seu nome">
             <div>
               <label>
                     UF:
                 </label>
               <select name="sltuf">
                   <option value="" selected>Selecione</option>
                    <option value="SP">São Paulo</option>
                   <option value="RJ">Rio de Janeiro</option>
                   <option value="BH">Bahia</option>
                   <option value="PE">Pernambuco</option>
               </select>
            </div>
               <div>
                   <label>Sexo</label>
                   <input type="radio" name="rdoSexo" value="F" checked>Feminino
                   <input type="radio" name="rdoSexo" value="M">Masculino
               </div>
               <div>
                   <label> Idiomas:</label>
                   <input type="checkbox" name="chkPortugues" value="pt">Portugues
                   <input type="checkbox" name="chkIngles" value="en">Ingles
                   <input type="checkbox" name="chkFrances" value="fr">Frances
               </div>
               <div>
                   <label> Senha:</label>
                   <input type="password" name="txtSenha" size="20" maxlength="10" placeholder=digite>
               </div>
               <div>
                 <label>Obs:</label>
                   <textarea name="txtObs" cols="50" rows="4"> </textarea>
               </div>
               <input type="submit" name="btnSalvar" value="Salvar">
               <input type="submit" name="btnLimpar" value="limpar">
               <!--
                 button - será utilizando exclusivamente pelo js
                 submit - será utilizado em conjunto com a form, para 

               -->
           </form>
        </div>
    </body>
</html>