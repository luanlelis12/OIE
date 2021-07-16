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
                <span><a class="barra-nav" id="a1" href="../index.php">#Início</a></span>
                <span>></span>
                <span><a class="barra-nav" href="#">Consulta</a></span>
            </div>
        </div>
    </div>

    <div class="section-consulta">

        <h1>Consulta de manifestação</h1>

        <hr>

        <div class="article-consulta">

            <?php while($row = mysqli_fetch_array($result)) { ?>

            <table>
                <tr>
                    <td class="td1">Remetente:</td>
                    <td class="td2">
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
                    </td>
                </tr>
                <tr>
                    <td class="td1">Status:</td>
                    <td class="td2"><?php echo $row['status']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Tipo de manifestação:</td>
                    <td class="td2"><?php echo $row['tipo']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Chave da manifestação:</td>
                    <td class="td2"><?php echo $row['chave']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Destinatário:</td>
                    <td class="td2"><?php echo $row['orgao']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Assunto:</td>
                    <td class="td2"><?php echo $row['assunto']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Descrição:</td>
                    <td class="td2"><?php echo $row['descricao']; ?></td>
                </tr>
                <tr>
                    <td class="td1">Resposta do Destinatário:</td>
                    <td class="td2"><?php echo $row['resposta']; ?></td>
                </tr>
            </table>

            <?php } ?>

            <div class="btns-form">
                <a class="btn-voltar" href="../index.php">Voltar</a>
            </div>

        </div>

    </div>


</body>
</html>