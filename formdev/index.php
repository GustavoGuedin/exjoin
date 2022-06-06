<?php
    if (isset($_GET['cd_desenvolvedora'])) {
        include "../conexao.php";
        $sql = "SELECT cd_desenvolvedora, nm_desenvolvedora FROM desenvolvedora WHERE cd_desenvolvedora = $_GET[cd_desenvolvedora]";
        $dev = mysqli_fetch_array(mysqli_query($conexao, $sql));
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar desenvolvedoras - ExJoin</title>
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "formdev";
            include "../topo.php";
        ?>

        <div class="formulario">
        <h2>Cadastrar desenvolvedoras</h2>

        <form method="post" action="recebe.php">

        <?php
            if (isset($_GET['cd_desenvolvedora'])) {
                echo "<h5>Código</h5>";
                echo "<input type='text' name='cd_desenvolvedora' value='$_GET[cd_desenvolvedora]' readonly='readonly'>";
            }
        ?>

        <h5>Nome da desenvolvedora</h5>
        <input type="text" name="nm_desenvolvedora" placeholder="Digite..." value="<?php if(isset($dev['nm_desenvolvedora'])) { echo $dev['nm_desenvolvedora']; } ?>">

        <?php
            if(isset($_GET['cd_desenvolvedora'])) {
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