<?php require_once '../_php/authController.php';
require_once '../_php/adminController.php';

if ($_SESSION['id']!='4') {
    header('Location: ../index.php');    
}

$query = sprintf("SELECT * FROM manifestacao");
$result = mysqli_query($conexao, $query);
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
                <span><a class="barra-nav" href="#">Admin</a></span>
            </div>
        </div>
    </div>

    <div class="admin-div">

    <form action="" method="post">
        <table>
            <tr>
                <th class="td1">Chave</th>
                <th class="td1">Usuário</th>
                <th class="td1">Status</th>
                <th class="td1">Resposta</th>
                <th class="td1">Excluir</th>
                <th class="td1">Atualização</th>
            </tr>
            <?php while($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <form method="post">
                    <td class="td2"><a target="blank" href="consulta.php?chave=<?php echo $row['chave'] ?>"><?php echo $row['chave']; ?></a></td>
                    <td class="td2">
                        <?php if($row['identificar']==1){
                            $queryUser = sprintf("SELECT username FROM user WHERE id = '{$row['id_user']}'");
                            $resultUser = mysqli_query($conexao, $queryUser);
                            $user = mysqli_fetch_array($resultUser);
                            echo $user['username'];
                        } else {
                            echo 'Anônimo';
                        } ?>
                    </td>
                    <td class="td2"><select name="status"><option disabled selected value="<?php echo $row['status'] ?>"><?php echo $row['status'] ?></option><option value="Enviada">Enviada</option><option value="Respondida">Respondida</option></select></td>
                    <td class="td2"><textarea name="resposta"><?php echo $row['resposta']; ?></textarea></td>
                    <td class="td2"><input type="checkbox" name="excluir" value="1"></td>
                    <td class="td2"><button name="atualizar" value="<?php echo $row['chave']; ?>">Atualizar</button></td>
                    </form>
                </tr>
            <?php } ?>
        </table>
    
    </form>

    </div>

</body>
</html>