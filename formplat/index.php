<?php
    if (isset($_GET['cd_plataforma'])) {
        include "../conexao.php";
        $sql = "SELECT cd_plataforma, nm_plataforma FROM plataforma WHERE cd_plataforma = $_GET[cd_plataforma]";
        $plat = mysqli_fetch_array(mysqli_query($conexao, $sql));
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar plataformas - ExJoin</title>
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "formplat";
            include "../topo.php";
        ?>

        <div class="formulario">
        <h2>Cadastrar plataformas</h2>

        <form method="post" action="recebe.php">

            <?php
                if (isset($_GET['cd_plataforma'])) {
                    echo "<h5>Código</h5>";
                    echo "<input type='text' name='cd_plataforma' value='$_GET[cd_plataforma]' readonly='readonly'>";
                }
            ?>

            <h5>Nome da plataforma</h5>
            <input type="text" name="nm_plataforma" placeholder="Digite..." value="<?php if(isset($plat['nm_plataforma'])) { echo $plat['nm_plataforma']; } ?>">

            <?php
                    if(isset($_GET['cd_plataforma'])) {
                        echo "<input type='submit' value='Atualizar'>";
                    }
                    else {
                        echo "<input type='submit' value='Cadastrar'>";
                    }
            ?>
        </form>
        </div>
    </body>
</html>