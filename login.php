<?php
    include 'conecta.php';
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $logar = mysqli_query($conn, "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'");
    if(mysqli_num_rows($logar)>0){
        header('Location: dash.php');
    }
    else {
        echo ("<script>alert('Login ou senha incorreto! Tente novamente!');</script>");
        echo ("<script>window.location.replace('index.php');</script>");
    }
?>