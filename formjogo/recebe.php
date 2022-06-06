<?php
    include '../conexao.php';

    $nmJogo = $_POST['nm_jogo'];
    $cdPlat = $_POST['cd_plataforma'];
    $cdDev = $_POST['cd_desenvolvedora'];
    $cdDist = $_POST['cd_distribuidora'];

    if(isset($_POST['cd_jogo'])) {
        $sql = "UPDATE jogo SET nm_jogo = '$nmJogo', cd_plataforma = '$cdPlat',
                cd_desenvolvedora = '$cdDev', cd_distribuidora = '$cdDist'
                WHERE cd_jogo = $_POST[cd_jogo]";
    }
    else {
        $sql = "INSERT INTO jogo (nm_jogo, cd_plataforma, cd_desenvolvedora, cd_distribuidora) 
        VALUES ('$nmJogo', '$cdPlat', '$cdDev', '$cdDist')";
    }

    mysqli_query ($conexao, $sql);
    header ("location: ../listajogo");
?>