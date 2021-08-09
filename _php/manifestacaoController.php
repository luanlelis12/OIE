<?php

if (isset($_POST['denuncia'])) {
    $_SESSION['titulo'] = 'DENÚNCIA';
    $_SESSION['tipo'] = 'Denúncia';
    header('Location: _sites/passo1.php');
}

if (isset($_POST['reclamacao'])) {
    $_SESSION['titulo'] = 'RECLAMAÇÃO';
    $_SESSION['tipo'] = 'Reclamação'; 
    header('Location: _sites/passo1.php');
}

if (isset($_POST['solicitacao'])) {
    $_SESSION['titulo'] = 'SOLICITAÇÃO';
    $_SESSION['tipo'] = 'Solicitação'; 
    header('Location: _sites/passo1.php');
}

if (isset($_POST['sugestao'])) {
    $_SESSION['titulo'] = 'SUGESTÃO';
    $_SESSION['tipo'] = 'Sugestão'; 
    header('Location: _sites/passo1.php');
}

if (isset($_POST['elogio'])) {
    $_SESSION['titulo'] = 'ELOGIO';
    $_SESSION['tipo'] = 'Elogio'; 
    header('Location: _sites/passo1.php');
}

if (isset($_POST['passo1'])) {
    if(isset($_POST['identificar'])) {
        $_SESSION['identificar'] = $_POST['identificar'];
        header('Location: passo2.php');    
    } else {
        echo '<script>alert("Por favor, escolha se você quer se identificar ou não.");</script>';
    }
}

if (isset($_POST['passo2'])) {
    if(isset($_POST['orgao']) && isset($_POST['assunto'])) {
        $_SESSION['orgao'] = $_POST['orgao'];
        $_SESSION['assunto'] = $_POST['assunto'];
        header('Location: passo3.php'); 
    } else {
        echo '<script>alert("Por favor, escolha o assunto e o orgão destinatário da manifestação.");</script>';
    }
    
}

if (isset($_POST['enviar'])) {

    $descricao = $_POST['descricao'];
    $tipo = $_SESSION['tipo'];
    $identificar = $_SESSION['identificar'];
    $orgao = $_SESSION['orgao'];
    $assunto = $_SESSION['assunto'];
    $id_user = $_SESSION['id'];
    $status = "Enviada";
    $resposta = "Sem resposta";

    function crypto_rand_secure($min, $max)
    {
        $range = $max - $min;
        if ($range < 1) return $min;
        $log = ceil(log($range, 2));
        $bytes = (int) ($log / 8) + 1;
        $bits = (int) $log + 1;
        $filter = (int) (1 << $bits) - 1;
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter;
        } while ($rnd > $range);
        return $min + $rnd;
    }

    $length = 6;
    $chave = "";
    $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $codeAlphabet.= "0123456789";
    $max = strlen($codeAlphabet);

    for ($i=0; $i < $length; $i++) {
        $chave .= $codeAlphabet[crypto_rand_secure(0, $max-1)];
    }

    $sql = "INSERT INTO manifestacao (chave, tipo, orgao, assunto, descricao, identificar, status, resposta, id_user) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conexao->prepare($sql);
    $stmt->bind_param('sssssissi', $chave, $tipo, $orgao, $assunto, $descricao, $identificar, $status, $resposta, $id_user);

    if ($stmt->execute()) {
        unset($_SESSION['tipo']);
        unset($_SESSION['identificar']);
        unset($_SESSION['orgao']);
        unset($_SESSION['descricao']);
        unset($_SESSION['assunto']);
        
        echo("<script type='text/javascript'>alert('A chave de sua manifestação é ". $chave .". Com ela você poderá acessar-lá para verificar a manifestação.'); location.href='http://localhost/oie/index.php';</script>");
    } else {
        $errors['db_error'] = "Database error: falha ao enviar manifestação";
    }

}


?>