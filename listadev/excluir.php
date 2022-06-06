<?php
    include '../conexao.php';

    $codigo = $_GET['cd_desenvolvedora'];

    $sql = "DELETE FROM desenvolvedora WHERE cd_desenvolvedora = " . $codigo;

    mysqli_query ($conexao, $sql);

    header ("location: .");
?>