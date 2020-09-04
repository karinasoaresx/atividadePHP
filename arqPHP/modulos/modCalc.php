<?php

require_once("modulos/constantes.php");

function Calculadora ($operacao, $v1, $v2) 
{
   global $erro;
    
    
    //substitui a virgula pelo ponto sem mostrar a msg de erro
    $valor1 = str_replace(",", ".", $v1);
    $valor2 = str_replace(",", ".", $v2);
    
    
    //Validação para tratar caixas vazias
    if($valor1 != null && $valor2 != null)
    {
        
        //Validação de entrada de caracter inválido
        if(is_numeric($valor1) && is_numeric($valor2))
        {
    
            $valor1 = (double) $v1;
            $valor2 = (double) $v2;
            $resultado = (double) null;
            $opcao = (string)  $operacao;
            

            //global - permite deixar uma variavel como global fora da function 
            //(torna-se visivel foram da função)
                //global $chkSubtrair;
                //global $chkMultiplicar;
                


            //Estrtutura de decisão utilizando a condicinal switch()
                switch ($opcao)
                {
                    case ("SOMAR"):
                        $resultado = $valor1 + $valor2;
                        break;

                    case ("SUBTRAIR"): 
                        $resultado = $valor1 - $valor2;
                        break;

                    case ("MULTIPLICAR"):
                        $resultado = $valor1 * $valor2;
                        break;

                    case ("DIVIDIR"):  
                        //Validação da divisão por zero
                        if ($valor2 != 0)
                            $resultado = $valor1 / $valor2;
                        else
                            $erro = ERRO_DIV_ZERO;


                        break;

                    //Caso nenhuma das opção sejam atendidas, o switch encaminha para a saída default 
                    default:
                        $erro = ERRO_OPCAO_CALCULO_INVALIDO;

                }
        }else
            $erro = ERRO_CARACTER_INVALIDO;
        
    }else
        $erro = ERRO_CAIXA_VAZIA;


    
    if (isset($resultado))
        return $resultado;
    else
        return $erro;

}

?>