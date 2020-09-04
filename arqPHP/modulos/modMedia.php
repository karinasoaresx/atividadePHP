<?php 

require_once("modulos/constantes.php");

    

    function Media ($nota1, $nota2, $nota3, $nota4){
        
        global $erro;
        
        $nota1 = str_replace(",", ".", $nota1);
        $nota2 = str_replace(",", ".", $nota2);
        $nota3 = str_replace(",", ".", $nota3);
        $nota4 = str_replace(",", ".", $nota4);
        
        if($nota1 != "" && $nota2 != "" && $nota3 != "" && $nota4 != "") {
            if(is_numeric($nota1) && is_numeric($nota2) && is_numeric($nota3) && is_numeric($nota4)) {
                
                $resultado = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
                return $resultado;
                
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