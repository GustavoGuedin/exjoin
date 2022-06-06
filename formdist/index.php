<?php
    if (isset($_GET['cd_distribuidora'])) {
        include "../conexao.php";
        $sql = "SELECT cd_distribuidora, nm_distribuidora FROM distribuidora WHERE cd_distribuidora = $_GET[cd_distribuidora]";
        $dist = mysqli_fetch_array(mysqli_query($conexao, $sql));
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar distribuidoras - ExJoin</title>
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "formdist";
            include "../topo.php";
        ?>

        <div class="formulario">
        <h2>Cadastrar distribuidoras</h2>
        <form method="post" action="recebe.php">

            <?php
                if (isset($_GET['cd_distribuidora'])) {
                    echo "<h5>Código</h5>";
                    echo "<input type='text' name='cd_distribuidora' value='$_GET[cd_distribuidora]' readonly='readonly'>";
                }
            ?>

            <h5>Nome da distribuidora</h5>
            <input type="text" name="nm_distribuidora" placeholder="Digite..." value="<?php if(isset($dist['nm_distribuidora'])) { echo $dist['nm_distribuidora']; } ?>">

            <?php
                if(isset($_GET['cd_distribuidora'])) {
                    echo "<input type='submit' value='Atualizar'>";
                }
                else {
                    echo "<input type='submit' value='Cadastrar'>";
                }
            ?>
            </div>
        </form>
    </body>
</html>