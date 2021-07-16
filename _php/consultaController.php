<?php

if (isset($_POST['consultar'])) {
    $chave = $_POST['chave'];
    header('Location: http://localhost/OIE/_sites/consulta.php?chave=' . $chave . '');
}

?>