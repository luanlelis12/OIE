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

    <div class="section-manifestação passo-2">

        <h2><?php echo $_SESSION['titulo']; ?></h2>
        <h1>Escolha o destinatário e o assunto</h1>
        <span>Passo 2/3</span>

        <div class="article-passo-2">

            <hr>

            <form action="" method="POST">

                <label for="orgao">Órgão para qual você quer enviar sua manifestação:</label><br>
                <select name="orgao" id="orgao" placeholder="alou">
                    <option value="" disabled selected>Selecione...</option>
                    <option value="CAE">CAE</option>
                    <option value="nucleo de psicologia">Núcleo de Psicologia</option>
                    <option value="nucleo de nutricao e saude">Núcleo de Nutrição e Saúde</option>
                    <option value="direcao academica">Direção Acadêmica</option>
                    <option value="diretoria administrativa">Diretoria Administrativa</option>
                    <option value="coordenacoes de curso">Coordenações de curso</option>
                    <option value="diretoria administrativa">Diretoria Administrativa</option>
                </select><br>

                <label for="assunto">Tipo do assunto:</label><br>
                <select name="assunto" id="assunto">
                    <option value="" disabled selected>Selecione...</option>
                    <option value="Bullying">Bullying</option>
                    <option value="Alojamento">Alojamento</option>
                    <option value="Refeitorio">Refeitório</option>
                    <option value="Biblioteca">Biblioteca</option>
                    <option value="Infraestrutura">Infraestrutura</option>
                    <option value="Docente">Docente</option>
                    <option value="Funcionarios">Funcionários</option>
                    <option value="Atendimento medico">Atendimento médico</option>
                    <option value="Assedio">Assédio</option>
                    <option value="Violencia">Violência</option>
                </select><br>

            <hr>

        </div>

        <div class="btn-voltar"><a href="passo1.php">Voltar</a></div>

        <div class="btn-continuar"><button name="passo2">Continuar</button></div>

        </form>

    </div>

</body>
</html>