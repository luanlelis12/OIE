<?php require_once '../_php/authController.php';
require_once '../_php/manifestacaoController.php'; 

if (!isset($_SESSION['id'])) {
    echo("<script type='text/javascript'>alert('Para fazer uma manifestação é preciso fazer o login. Por favor, cadastra-se ou faça o login.'); location.href='http://localhost/oie/index.php';</script>");   
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIE - Ouvidoria Institucional Educacional</title>

    <link rel="stylesheet" href="../_css/OIE-style.css">

    <script type="text/javascript" src="../_javascript/script.js"></script>

</head>
<body>

    <div class="header">
        <div class="vertical-header">
            <h1 class="header">OIE</h1>
        </div>
        <div class="vertical-header">
            <span class="header">
                Ouvidoria Institucional Educacional <br>
                Instituto Federal Baiano - Campus Guanambi
            </span>
        </div>
    </div>

    <div class="barra-nav">
        <div class="vertical">
            <div id="link">
                <span><a class="barra-nav" id="a1" href="../index.php">#Início</a></span>
                <span>></span>
                <span><a class="barra-nav" href="#"><?php echo $_SESSION['tipo']; ?></a></span>
            </div>
        </div>
    </div>

    <div class="section-manifestação passo-1">

        <h2><?php echo $_SESSION['titulo']; ?></h2>
        <h1>Você quer se identificar?</h1>
        <span>Passo 1/3</span>

        <div class="article-passo-1">

            <hr>

            <form method="POST">

            <div class="block-selecionar-passo-1">
                <div class="block-identificar" id="block-identificar-1">
                    <div id="vertical">
                        <h2>Quero me identificar</h2>
                        <input type="radio" name="identificar" value="1" id="identificar">
                        <label for="identificar" id="label-identificar">Selecionar</label>
                    </div>
                </div>
            
                <div class="block-identificar" id="block-identificar-2">
                    <div id="vertical">
                        <h2>Não quero me identificar</h2>
                        <input type="radio" name="identificar" value="0" id="nao-identificar">
                        <label for="nao-identificar">Selecionar</label>
                    </div>
                </div>
            </div>

            <hr>

        </div>

        <div class="btn-voltar"><a href="../index.php">Voltar para início</a></div>

        <div class="btn-continuar"><button name='passo1'>Continuar</button></div>

        </form>

    </div>

</body>
</html>