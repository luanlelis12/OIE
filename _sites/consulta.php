<?php require_once '../_php/authController.php';

if (isset($_GET['chave'])) {
    $chave = $_GET['chave'];
}

$query = sprintf("SELECT * FROM manifestacao WHERE chave = '{$chave}'");
$result = mysqli_query($conexao, $query);  
?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OIE - Ouvidoria Institucional Educacional</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

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
                <span><a class="barra-nav" href="#">Consulta</a></span>
            </div>
        </div>
    </div>

    <div class="section-consulta">

        <h1>Consulta de manifestação</h1>

        <div class="article-consulta">

            <hr>

            <?php while($row = mysqli_fetch_array($result)) { ?>

            <ul>
                <li><span>Remetente: 
                    <?php
                    if($row['identificar']==1){
                        $queryUser = sprintf("SELECT username FROM user WHERE id = '{$row['id_user']}'");
                        $resultUser = mysqli_query($conexao, $queryUser);
                        $user = mysqli_fetch_array($resultUser);
                        echo $user['username'];
                    } else {
                        echo 'Anônimo';
                    } 
                    ?>
                </span></li>
                <li><span>Status: <?php echo $row['status']; ?></span> </li>
                <li><span>Tipo de manifestação: <?php echo $row['tipo']; ?></span><span></span></li>
                <li><span>Chave da manifestação: <?php echo $row['chave']; ?></span></li>
                <li><span>Destinatário: <?php echo $row['orgao']; ?></span></li>
                <li><span>Assunto: <?php echo $row['assunto']; ?></span></li>
                <li><span>Descrição: <?php echo $row['descricao']; ?></span></li>
                <li><span>Resposta do Destinatário: <?php echo $row['resposta']; ?></span></li>
            </ul>

            <?php } ?>

            <hr>

        </div>

        <div class="btn-voltar"><a href="../index.php">Voltar para início</a></div>

    </div>


</body>
</html>