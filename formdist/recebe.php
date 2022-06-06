<?php
    include '../conexao.php';

    $nome = $_POST['nm_distribuidora'];

    if (isset($_POST['cd_distribuidora'])) {
        $sql = "UPDATE distribuidora SET nm_distribuidora='$nome'
        WHERE cd_distribuidora = $_POST[cd_distribuidora]";
    }

    else {
        $sql = "INSERT INTO distribuidora (nm_distribuidora) VALUES ('$nome')";
    }

    mysqli_query($conexao, $sql);

    header("location: ../listadist");
?>