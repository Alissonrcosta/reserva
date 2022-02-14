<?php
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $sql = "INSERT INTO usuario(login,senha) VALUES ('$login','$senha')";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro inserido com sucesso!');
            window.location.href='visuusuario.php'
            </script>";
    }
    else {
        echo "<script language='javascript' type='text/javascript'>
            alert('Registro não foi inserido!');
            window.location.href='visuusuario.php'
            </script>";
    }
    mysqli_close($conn);
?>