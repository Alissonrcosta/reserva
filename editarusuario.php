<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "UPDATE usuario SET login=?, senha=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização: ".$conn->errno." - ".$conn->error;
    }
    $stmt->bind_param('ssi', $login, $senha, $id);
    $stmt->execute();
    $conn->close();
    header("Location: visuusuario.php");
?>