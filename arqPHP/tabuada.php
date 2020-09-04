<?php
    require_once("modulos/modTab.php");
    require_once("modulos/constantes.php");


    $tabuada = (string) null;
    $contador = (string) null;
    $erro = (string) null;


    $nCont = (integer) 0;
    $i = (integer) 0;
    
    if(isset($_POST['btncalc'])){
        
        $tabuada = $_POST['txtn1'];
        $contador = $_POST['txtn2'];
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
    <title> Tabuada </title>
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
    <div id="tabuada">
        <div id="containerTabuada">
            <div id="titulo">
                    Tabuada
            </div>
            <div id="formTab">
                <form name="frmtabuada" method="post" action="tabuada.php">
                        Tabuada:<input type="text" name="txtn1" value="" > <br>
                        Contador:<input type="text" name="txtn2" value="" > <br>
                    
                        <input class="botaoTab" type="submit" name="btncalc" value ="Calcular" >
                </form>
                        <div id="resultadoTab">
                            <?php
                                $nCont = Tabuada ($tabuada, $contador);
                            ?>
                        </div>
                        <div id="erroTab">
                            <?=$erro?>
                        </div>
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