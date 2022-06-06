<?php
    include "../conexao.php";
    $sql = "DELETE FROM jogo WHERE cd_jogo = " . $_GET['cd_jogo'];
    mysqli_query($conexao, $sql);
    header ("location: .");
?>