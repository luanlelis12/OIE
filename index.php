<?php require_once '_php/authController.php'; 
require_once '_php/manifestacaoController.php'; 
require_once '_php/consultaController.php';

if (isset($_GET['token'])) {
    $token = $_GET['token'];
    verifyUser($token);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIE - Ouvidoria Institucional Educacional</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <link rel="stylesheet" href="_css/OIE-style.css">

    <script src="_javascript/script.js"></script>

</head>
<body>

    <div class="header">
        <div class="vertical-header">
            <h1 class="header">OIE</h1>
        </div>
        <div class="vertical-header" id="descricao">
            <span class="header">
                Ouvidoria Institucional Educacional <br>
                Instituto Federal Baiano - Campus Guanambi
            </span>
        </div>
    </div>

    <div class="barra-nav">
        <div class="vertical">
            <div id="link">
                <span><a class="barra-nav" id="a1" href="#">#Início</a></span>
            </div>

            <?php if (isset($_SESSION['id'])) { ?>
                <div class="dropdown">
                <button onclick="myFunction()" class="profile-button dropbtn"><div><span class="dropbtn" id="span-user">Perfil</span><svg class="dropbtn" viewBox="0 0 1024 1024" id="svg-user"><path d="M476.455 806.696L95.291 425.532Q80.67 410.911 80.67 390.239t14.621-34.789 35.293-14.117 34.789 14.117L508.219 698.8l349.4-349.4q14.621-14.117 35.293-14.117t34.789 14.117 14.117 34.789-14.117 34.789L546.537 800.142q-19.159 19.159-38.318 19.159t-31.764-12.605z"></path></svg></div></button>
                    <div id="myDropdown" class="dropdown-content">
                        <a class="dropdown-link" href="index.php?logout=1" class="logout">Sair</a>
                        <?php if ($_SESSION['id']=='4') { ?>
                        <a class="dropdown-link" href="_sites/admin.php">Admin</a>
                        <?php } ?>
                    </div>
                </div>
            <?php } else { ?>
                <div class="login-cadastro-link"><a href="_sites/cadastro.php">Inscrever-se</a><span>/</span><a href="_sites/login.php">Entrar</a></div>
            <?php } ?></li>
        
        </div>
    </div>

    <div class="section-oferecemos">
        <div class="article-oferecemos">
            <h2 class="article-oferecemos">O que nós oferecemos</h2>
            <hr class="article-oferecemos">
            <p class="article-oferecemos">Nós, alunos da turma do 3AII de Informática para Internet do Instituto Federal Baiano Campus Guanambi, trazemos uma plataforma em que os discentes, docentes e demais funcionários podem tecer denúncias, reclamação, solicitação, sugestão e elogio sobre os alunos, professores, outros funcionários e infraestrutura. do campus.</p>
            <p class="article-oferecemos" id="#p2">Podem ser realizados 5 tipos de manifestações, são elas:</p>
            <div class="ul-oferecemos">
                <ul class="article-oferecemos" id="ul1">
                    <li>Denúncias</li>
                    <li>Reclamações</li>
                    <li>Solicitações</li>
                </ul>
                <ul class="article-oferecemos" id="ul2">
                    <li>Sugestões</li>
                    <li>Elogios</li>
                </ul>
            </div>
        </div>
        
        <div class="article-block-consulta">
            <form method="post">
                <h2>Consulte sua manifestação</h2>
                <hr>
                <p>Informe o chave que foi gerado durante o registro da manifestação para saber mais informações da sua manifestação</p>
                <input type="text" maxlength="6" name="chave">
                <input type="submit" value="Consultar" name="consultar">
            </form>
        </div>  

    </div>    

    <div class="section-manifestação-escolha">
        <div class="article-manifestação">
            <h1 class="article-manifestação">Qual tipo de manifestação você quer fazer?</h1>
            <hr class="article-manifestação">
            <form action="" method="post">
            <div class="vertical-manifestação">
            
                <button name="denuncia" class="block-manifestação" data-toggle="tooltip" data-placement="bottom" title="Comunicação de atividades ilegais cuja solução dependa da atuação dos órgãos competentes.">
                    <div class="block-manifestação">
                        <div class="circle-manifestação">
                            <img class="circle-manifestação" src="_img/icon-megaphone.png" alt="">
                        </div>
                        <h3 class="block-manifestação">DENÚNCIA</h3>
                        <span class="block-manifestação">Quero denunciar</span>
                    </div>
                </button>
                
                <button name="reclamacao" class="block-manifestação" data-toggle="tooltip" data-placement="bottom" title="Demonstração de desagrado com o serviço público.">
                    <div class="block-manifestação">
                        <div class="circle-manifestação">
                            <img class="circle-manifestação" src="_img/icons-thumbs-down.png" id="thumb-down" alt="">
                        </div>
                        <h3 class="block-manifestação">RECLAMAÇÃO</h3>
                        <span class="block-manifestação">Quero reclamar</span>
                    </div>
                </button>

                <button name="solicitacao" class="block-manifestação" data-toggle="tooltip" data-placement="bottom" title="Solicitação de adoção de providência por parte da Instituição.">
                    <div class="block-manifestação">
                        <div class="circle-manifestação">
                            <img class="circle-manifestação" src="_img/icons-document.png" alt="">
                        </div>
                        <h3 class="block-manifestação">SOLICITAÇÃO</h3>
                        <span class="block-manifestação">Quero solicitar</span>
                    </div>
                </button>

                <button name="sugestao" class="block-manifestação" data-toggle="tooltip" data-placement="bottom" title="Proposição de ideias ou propostas para melhoramento de políticas e serviços públicos.">
                    <div class="block-manifestação">
                        <div class="circle-manifestação">
                            <img class="circle-manifestação" src="_img/icons-speech.png" alt="">
                        </div>
                        <h3 class="block-manifestação">SUGESTÃO</h3>
                        <span class="block-manifestação">Quero sugerir</span>
                    </div>
                </button>

                <button name="elogio" class="block-manifestação" data-toggle="tooltip" data-placement="bottom" title="Demonstração, reconhecimento ou satisfação de políticas ou serviços públicos prestados ou serviços recebidos.">
                    <div class="block-manifestação">
                        <div class="circle-manifestação">
                            <img class="circle-manifestação" src="_img/icons-thumbs-up.png" id="thumb-up" alt="">
                        </div>
                        <h3 class="block-manifestação">ELOGIO</h3>
                        <span class="block-manifestação">Quero elogiar</span>
                    </div>
                </button>

            </div>
            </form>
        </div>
    </div>

    <div class="napne-index-section">
        <h1>Núcleo de Apoio Pessoas com Necessidades Especificas</h1>
        <hr>
        <p>A grosso modo, a língua de sinais brasileira ou Libras é uma língua distinta(assim como o português) não oral utilizada pela comunidade surda, ela reconhecida como a segunda língua oficial do país desde 2002. Vale lembrar que essa língua é exclusivamente nacional e devido a diversidade brasileira, muitos sinais são dados de acordo a região do país, o que trazendo para o português como exemplo, é conhecido como sotaque. O Instituo Federal Baiano Campus Guanambi é dotado de políticas inclusivas que permitem a plena participação do surdo ás atividades estudantis.</p>
        <a href="_sites/napne.php">Saber mais</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <script>     
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
    </script>


</body>
</html>