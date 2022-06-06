<?php
    include '../conexao.php';

    $codigo = $_GET['cd_distribuidora'];

    $sql = "DELETE FROM distribuidora WHERE cd_distribuidora = " . $codigo;

    mysqli_query ($conexao, $sql);

    header ("location: .");
?>