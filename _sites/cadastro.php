<?php require_once '../_php/authController.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIE - Ouvidoria Institucional Educacional</title>

    <link rel="stylesheet" href="../_css/OIE-style.css">

</head>
<body>

    <div class="header">
        <div class="vertical-header">
            <h1 class="header">OIE</h1>
        </div>
        <div class="vertical-header">
            <span class="header" id="descricao">
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
                <span><a class="barra-nav" href="#">Cadastro</a></span>
            </div>
        </div>
    </div>

    <div class="section-login">
        <form class="article-login" method="post">
            <span class="article-login">Cadastro</span>

            <?php if(count($errors) > 0): ?>
                <div class="alert-error">
                    <br>
                    <?php foreach($errors as $error): ?>
                        <li><span><?php echo $error; ?></span></li> <br>
                    <?php endforeach ?>
                </div>
            <?php endif ?>

            <div class="block-login" data-validate="Nome é requerido">
                <span class="label-input">Nome completo *</span><br>
                <input class="input-login" type="text" name="nome" placeholder="Digite seu nome completo">
                <span class="focus-input" id="focus1" data-symbol="">
                </span>
            </div>

            <div class="block-login" data-validate="E-mail é requerido">
                <span class="label-input">E-mail *</span><br>
                <input class="input-login" type="email" name="email" placeholder="Digite seu e-mail">
                <span class="focus-input" id="focus2" data-symbol="">
                </span>
            </div>
            
            <div class="block-login" data-validate="Senha é requerido">
                <span class="label-input">Senha *</span><br>
                <input class="input-login" type="password" name="senha" placeholder="Digite sua senha">
                <span class="focus-input" id="focus3" data-symbol="">
                </span>
            </div>

            <div class="block-login" data-validate="Senha é requerido">
                <span class="label-input">Confirme sua Senha *</span><br>
                <input class="input-login" type="password" name="senha-conf" placeholder="Digite novamente sua senha">
                <span class="focus-input" id="focus3" data-symbol="">
                </span>
            </div>

            <div class="block-button" id="button-cadastro">
                <input class="button-login" type="submit" value="FAZER CADASTRO" name="Cadastrar">
            </div>

            <div class="block-register">
                <span id="s1">
                    Caso já tenha uma conta
                </span> 
                <a id="s2" href="login.php">
                    Clique aqui
                </a>
            </div>

        </form>

    </div>

</body>
