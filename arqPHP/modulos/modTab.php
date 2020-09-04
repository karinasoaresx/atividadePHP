<?php 

require_once("modulos/constantes.php");

function Tabuada ($valorTab, $contTab){
        
        global $erro;
        
        $valorTab = str_replace(",", ".",$valorTab);
        $contTab = str_replace(",", ".",$contTab);
        
        $nCont = (integer) 0;
        if($valorTab != "" && $contTab != ""){
            
            if(is_numeric($valorTab) && is_numeric($contTab)){
                
                if($valorTab != 0){
                    $contador = (integer) $contTab;
                    $tabuada = (integer) $valorTab;
                    $i = (integer) 0;
                    
                    for($i == 0; $i <= $contador; $i++){
                        $resultado = $tabuada * $i;
                        echo($valorTab . " * " . $i . " = " . $resultado . "<br>");
                    }
             }
             else {
                 $erro = ERRO_TABUADA_ZERO;
             }
         }
         else {
             $erro = ERRO_CARACTER_INVALIDO;
         }
     }
     else {
         $erro = ERRO_CAIXA_VAZIA;
     }
    
}

?>