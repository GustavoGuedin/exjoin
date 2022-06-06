<?php
    include '../conexao.php';

    $nome = $_POST['nm_desenvolvedora'];

    if (isset($_POST['cd_desenvolvedora'])) {
        $sql = "UPDATE desenvolvedora SET nm_desenvolvedora='$nome'
        WHERE cd_desenvolvedora = $_POST[cd_desenvolvedora]";
    }

    else {
        $sql = "INSERT INTO desenvolvedora (nm_desenvolvedora) VALUES ('$nome')";
    }

    mysqli_query($conexao, $sql);

    header("location: ../listadev");
?>