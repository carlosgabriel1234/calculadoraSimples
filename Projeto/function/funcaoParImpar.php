<?php
    function inlineif(bool $question, $returntrue, $returnfalse){
        return ($question)? $returntrue : $returnfalse;
    }

    function drawOptions(int $inicio, int $final){
        for($i = $inicio; $i <= $final; ++$i)
            echo "<option value='$i'>" . $i . "</option>";
    }

    function retornaPares(int $inicio, int $final){
        $retorno = (string)null;
        
        if(($inicio % 2) != 0)
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno = $retorno . $inicio . "<br>";
        
        return $retorno;
    }

    function quantidadePares(int $inicio, int $final){
        $retorno = (int)0;
        
        if(($inicio % 2) != 0)
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno++;
        
        return $retorno;
    }

    function retornaImpares(int $inicio, int $final){
        $retorno = (string)null;
        
        if( !(($inicio % 2) != 0) )
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno = $retorno . $inicio . "<br>";
        
        return $retorno;
    }

    function quantidadeImpares(int $inicio, int $final){
        $retorno = (int)0;
        
        if( !(($inicio % 2) != 0) )
            $inicio++;
        
        for(; $inicio <= $final; $inicio += 2)
            $retorno++;
        
        return $retorno;
    }
?>