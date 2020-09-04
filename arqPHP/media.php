<?php 

require_once("modulos/modMedia.php");
require_once("modulos/constantes.php");


$resultado = 0;
$status = "";

if(isset($_GET['btncalc'])){
        
        //Entrada de Dados
        $nota1 = $_GET['txtn1'];
        $nota2 = $_GET['txtn2'];
        $nota3 = $_GET['txtn3'];
        $nota4 = $_GET['txtn4'];
        
        $resultado = Media ($nota1,$nota2,$nota3,$nota4);
    
    if($resultado < 4)
                {
                    $status = "<span class='reprovado'>Reprovado!</span>";

                }else if($resultado >= 4 && $resultado < 7)
                {
                    $status = "<span class='recuperacao'>Recuperação</span>";

                }else 
                {
                    $status = "<span class='aprovado'>Aprovado</span>";
                }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
    <title> Média </title>
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
    <div id="media">
        <div id="containerMedia">
            <div id="titulo">
                    Média
            </div>
            <div id="form">
                <form name="frmMedia" method="get" action="media.php">
                    Nota 1:<input type="text" name="txtn1" value="0"> 
                    <br>
                    Nota 2:<input type="text" name="txtn2" value="0"> 
                    <br>
                    Nota 3:<input type="text" name="txtn3" value="0"> 
                    <br>
                    Nota 4:<input type="text" name="txtn4" value="0"> 
                    <br>
                    <input class="botao" type="submit" name="btncalc" value ="Calcular" >
                </form>
            </div>
            <div id="resultado">
                A média é: <?php
                            //Saída de dados
                            echo(round($resultado, 1)); 
                            ?>
                Status: <?php 
                            
                echo($status);
                        ?>
            </div>
            <div id="erro">
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