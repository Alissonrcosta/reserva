<?php
    include 'conecta.php';
    $id = $_GET['id'];
    $sql = "DELETE FROM reserva WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        echo "<script language='javascript' type/text='javascript'>window.location.href='visures.php'</script>";
    }
    else {
        echo "<script language='javascript' type/text='javascript'>window.location.href='visures.php'</script>";
    }
?>