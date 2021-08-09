<?php

if (isset($_POST['atualizar'])) {

    $chave = $_POST['atualizar'];

    if (isset($_POST['status'])) {
        $status = $_POST['status'];

        $sql = "UPDATE manifestacao SET status=(?) WHERE chave = '{$chave}'";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('s', $status);
        $stmt->execute();
    }

    if (isset($_POST['resposta'])) {
        $resposta = $_POST['resposta'];

        $sql = "UPDATE manifestacao SET resposta=(?) WHERE chave = '{$chave}'";
        $stmt = $conexao->prepare($sql);
        $stmt->bind_param('s', $resposta);
        $stmt->execute();
    }

    if (isset($_POST['excluir'])) {
        $sql = "DELETE FROM manifestacao WHERE chave = '{$chave}'";
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
    }

}

?>