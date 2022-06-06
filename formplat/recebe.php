<?php
    include '../conexao.php';

    $nome = $_POST['nm_plataforma'];

    if (isset($_POST['cd_plataforma'])) {
        $sql = "UPDATE plataforma SET nm_plataforma='$nome'
        WHERE cd_plataforma = $_POST[cd_plataforma]";
    }

    else {
        $sql = "INSERT INTO plataforma (nm_plataforma) VALUES ('$nome')";
    }

    mysqli_query($conexao, $sql);

    header("location: ../listaplat");
?>