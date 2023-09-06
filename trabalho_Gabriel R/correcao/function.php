<?php

    function media($n1, $n2, $n3, $n4){
        $m = ($n1 + $n2 + $n3 + $n4) / 4;
        return $m;
    }

    function verificaMedia($m){
        if($m >= 6){
            return "Aprovado";
        }
        else{
            return "Reprovado";
        }
    }

?>