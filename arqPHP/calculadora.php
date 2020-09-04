<?php 

require_once("modulos/modCalc.php");

require_once("modulos/constantes.php");


$valor1 = (string) null; 
$valor2 = (string) null;

$resultado = (double) 0;
$opcao = (string) null;


if(isset($_POST['btncalc']))
{
    $valor1 = $_POST['txtn1'];
    $valor2 = $_POST['txtn2'];
    

        if(isset($_POST['rdocalc']))
        {
            $opcao =  strtoupper($_POST['rdocalc']);

            $resultado = Calculadora($opcao, $valor1, $valor2);

        }
        else 
            $erro = ERRO_OPCAO_CALCULO_INVALIDO;
       
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/css.css">
    <title> Calculadora </title>
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
    <div id="calculadora">
        <div id="containerCalculadora">
            <div id="titulo">
                    Calculadora
            </div>
            <div id="formCalc">
                <form name="frmcalculadora" method="post" action="calculadora.php">
                        Valor 1:<input type="text" name="txtn1" value="<?php echo($valor1) ?>" > <br>
                        Valor 2:<input type="text" name="txtn2" value="<?=$valor2 ?>" > <br>
                        <div id="container_opcoes">
                            <input type="radio" name="rdocalc" value="somar"
                               <?php
                                    if ($opcao == "SOMAR")
                                        echo("checked");
                               
                               ?>
                               >Somar 
                        <input type="radio" name="rdocalc" value="subtrair" <?= $opcao == "SUBTRAIR" ? "checked" : null ?>>Subtrair <br>
                        <input type="radio" name="rdocalc" value="multiplicar" <?= $opcao == "MULTIPLICAR" ? "checked" : null ?> >Multiplicar 
                        <input type="radio" name="rdocalc" value="dividir" <?= $opcao == "DIVIDIR" ? "checked" : null ?>>Dividir <br>

                        <input class="botao"  type="submit" name="btncalc" value ="Calcular" >

                        </div>	
                        <div id="resultadoCalc">
                            <?php echo(round($resultado, 1)); ?>
                        </div>
                        <div id="erroCalc">
                            <?=$erro?>
                        </div>

                    </form>
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