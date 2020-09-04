<?php

    require_once("modulos/constantes.php");
    require_once("modulos/modParImp.php");

    $nInicial = (string) null;
    $nFinal = (string) null;
    $i = (integer)0;


    $valor = (string) null;
    $qntdeIn = (string) null;
    $qntdeFim = (string) null;
    $impar = array(); 
    $par = array();
    $resultPar = (string) null;
    $resultImp = (string) null;
    $nPar = (string) null;
    $nImp = (string) null;


    for($i = (integer) 0; $i<=500 ; $i++){
        $qntdeIn .= "<option value=".$i.">".$i."</option>";
    }
    for($i = (integer)100; $i<=1000 ; $i++){
        $qntdeFim .= "<option value=".$i.">".$i."</option>";
    }    

    
    if (isset($_GET['btncalc'])){
        $nInicial = $_GET['txtn1'];
        $nFinal = $_GET['txtn2'];

        $par = ParOuImpar($nInicial,$nFinal,true);
        $impar = ParOuImpar($nInicial,$nFinal,false);
        
        for($i=$nInicial;$i<=$nFinal;$i++){
            $nPar .= $par[$i];
            $valor = $i%2;
            if($valor==0){
                $resultPar++; 
            }
        }
        
        for($i=$nInicial;$i<=$nFinal;$i++){
            $nImp .= $impar[$i]; 
            $valor = $i%2;
            if($valor==1){
                $resultImp++; 
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
    <title> Pares e Ímpares </title>
</head>

<body>
    <div id="cabecalho">
        <div id="containerCabecalho">
            <div id="tituloCabecalho">
                <a href="./atividade01.php"><img src="imagens/imgcabecalho.png"></a>
            </div>
        </div>
        <div id="menu">
            <div id="containerMenu">
                <a href="./media.php"><div class="editMenu"> Média </div></a>
                <a href="./calculadora.php"><div class="editMenu"> Calculadora </div></a>
                <a href="./tabuada.php"><div class="editMenu"> Tabuada </div></a>
                <a href="./parImpar.php"><div class="editMenu last"> Pares e Ímpares </div></a>
            </div>
        </div>
    </div>
    <div id="parImpar">
        <div id="containerParImpar">
            <div id="titulo">
                   Pares e Ímpares  
            </div>
            <div id="formParImpar">
                <form name="frmParImpar" method="get" action="parImpar.php">
                    Nº Inicial:
                    <select name="txtn1">
                        <option value=""> Selecione um número </option>                       
                            <?=$qntdeIn ?>
                    </select> 
                    <br>
                    Nº Final:
                    <select name="txtn2">
                        <option value=""> Selecione um número </option>                      
                            <?=$qntdeFim ?>
                    </select>
                    <br>
                    <input class="botaoParImp" type="submit" name="btncalc" value ="Calcular" >
                </form>
            </div>
            <div id="resultadoPar">              
                <div class="editParImp"> Números Pares </div>
                <?=($nPar);?>
                <div class="qntdParImp"> Qtde de Pares: <?=($resultPar)?></div>
            </div>
            
            <div id="resultadoImpar">
                <div class="editParImp"> Números Ímpares </div>
                    <?=($nImp);?>
                <div class="qntdParImp"> Qtde de Ímpares: <?=($resultImp)?></div>
                    
            </div>
            <div id="erroParImp">
                <?=$erro?>
            </div>
        </div>
    </div>
    <div id="rodape">
        <div id="infoRodape">
            <div id="desenvTexto">
                <p> Site desenvolvido por Karina Soares </p>
            </div>
            <div id="redesSociais">
                <a target="_blank" href="mailto:lkarinas.silva@gmail.com"><div id="email">
                    
                </div></a>
                <a target="_blank" href="https://api.whatsapp.com/send?phone=5511981939709"><div id="whatsapp">

                </div></a>
                <a target="_blank" href="https://github.com/karinasoaresx"><div id="github">

                </div></a>
            </div>
        </div>
    </div>
</body>
</html>
