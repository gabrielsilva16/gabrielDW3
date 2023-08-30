<?php 
       function calcularFatorial($valor){
              $resultado = 1;

              if($valor == 0 || $valor == 1){
                $resultado = 1;
              }else{
                    
                    for($i = $valor; $i >= 1; $i--){
                     $resultado *= $i;
                     $resultado    
                 }

              }
               
              return $resultado;
       }

       function retornarMaior($n1,$n2,$n3,$n4){
               if($n1 > $n2 && $n1 >$n3 && $n1 >$n4){
                return $n1;
               }else if ($n2 > $n1 && $n2 >$n3 && $n2 >$n4){
                return $n2;
               }else if ($n3 > $n1 && $n3 >$n2 && $n3 >$n4){
                return $n3;
               }else if ($n4 > $n1 && $n4 >$n2 && $n4 >$n3){
                return $n4;
        }
               //return
       }

       function calcularAreaTriangulo($base,$altura){
                $resultado = ($base * $altura)/2;
                return $resultado;
               //return
       }
       
       function calcularIMC($peso,$altura){
       if($imc < 17){
        return "$imc - muito abaixo do peso";
       }else if ($imc > 17 && $imc < 18.49){
               return "$imc - abaixo do peso";
        }elseif ($imc > 18.5 && $imc <24.99){
                return "$imc - peso normal";
        }else if($imc > 25 && $imc < 29.99){
                return "$imc - acima do peso";
        }else if($imc > 30 && $imc < 34.99);{
                return "$imc - obesidade 1";
        }else if($imc >35 && $imc < 39.99){
                return "$imc - obesidade 2";
        }else if($imc >40){
                return "$imc - obesidade 3";
        }
        
       }
               //return








?>