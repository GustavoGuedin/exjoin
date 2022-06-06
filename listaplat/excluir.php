<?php
    include '../conexao.php';

    $codigo = $_GET['cd_plataforma'];

    $sql = "DELETE FROM plataforma WHERE cd_plataforma = " . $codigo;

    mysqli_query ($conexao, $sql);

    header ("location: .");
?>