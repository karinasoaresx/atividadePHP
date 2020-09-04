<?php 
    require_once("modulos/constantes.php");

    function ParOuImpar ($nInicial, $nFinal, $par){
        global $erro;                                
        
        $valor = (integer) null;
        $numero = array();
        $erro = (string) null;
        $qntdePar = (string) null;
        $qntdeImp = (string) null;
        
        
        if($nInicial != null && $nFinal != null){
            
            if($nInicial != $nFinal){
                
                if($nInicial < $nFinal){
                    
                    if($par == true){
                        
                        for ($i = (integer) $nInicial; $i<=$nFinal ; $i++){
                            $valor = $i%2;

                            if($valor == 0)
                                $numero[$i] = "<br>".$i;    
                            else 
                                $numero[$i] = null;
                        }
                        return $numero;
                    }
                    else {
                        for ($i = (integer) $nInicial; $i<=$nFinal ; $i++){
                            $valor = $i%2;

                            if($valor == 1)
                                $numero[$i] = "<br>".$i;
                            else 
                                $numero[$i] = null;       
                            
                        }
                        return $numero;
                    }
                }
                else 
                    $erro = ERRO_NUMERO_MAIOR;
            }
            else
                $erro = ERRO_NUMERO_IGUAL;
        }
        else 
            $erro = ERRO_CAIXA_VAZIA;                 
    }
?>