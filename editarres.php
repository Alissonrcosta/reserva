<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $id_funcionario = $_POST['funcionario'];
    $id_carro = $_POST['carro'];
    $data_inicial = $_POST['datainicial'];
    $data_final = $_POST['datafinal'];
    $descricao = $_POST['descricao'];
    $sql = "UPDATE reserva SET id_funcionario=?, id_carro=?, data_inicial=?, data_final=?, descricao=? WHERE id=?";
    $stmt = $conn->prepare($sql) or die($conn->error);
    if(!$stmt){
        echo "Erro na atualização: ".$conn->errno." - ".$conn->error;
    }
    $stmt->bind_param('iisssi', $id_funcionario, $id_carro, $data_inicial, $data_final, $descricao, $id);
    $stmt->execute();
    $conn->close();
    header("Location: visures.php");
?>