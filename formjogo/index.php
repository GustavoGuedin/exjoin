<?php
    include "../conexao.php";
    $plat = "SELECT cd_plataforma, nm_plataforma FROM plataforma ORDER BY nm_plataforma";
    $resultadoPlat = mysqli_query($conexao, $plat);

    $dev = "SELECT cd_desenvolvedora, nm_desenvolvedora FROM desenvolvedora ORDER BY nm_desenvolvedora";
    $resultadoDev = mysqli_query($conexao, $dev);

    $dist = "SELECT cd_distribuidora, nm_distribuidora FROM distribuidora ORDER BY nm_distribuidora";
    $resultadoDist = mysqli_query($conexao, $dist);

    if(isset($_GET['cd_jogo'])) {
        $sqlJogo = "SELECT cd_jogo, nm_jogo, cd_plataforma, cd_desenvolvedora, cd_distribuidora FROM jogo 
        WHERE cd_jogo = " . $_GET['cd_jogo'];
        $resultadoJogo = mysqli_query($conexao, $sqlJogo);
        $jogo = mysqli_fetch_array($resultadoJogo);
    }
?>

<html>
    <head>
        <meta charset="utf-8">
        <title>Cadastrar jogos - ExJoin</title>
        <link rel=stylesheet href='../estilo.css'>
    </head>
    <body>
        <?php
            $pagina = "formjogo";
            include "../topo.php";
        ?>

        <div class="formulario">
        <h2>Cadastrar jogos</h2>
        <form method="post" action="recebe.php">
            <?php
                if(isset($_GET['cd_jogo'])) {
                    echo "<h5>Código</h5>";
                    echo "<input type='text' name='cd_jogo' value='$_GET[cd_jogo]' readonly='readonly'>";
                }
            ?>

            <h5>Nome do jogo</h5>
            <input type="text" name="nm_jogo" placeholder="Digite..." value="<?php if(isset($jogo['nm_jogo'])) { echo $jogo['nm_jogo']; } ?>">
            
            <h5>Plataforma</h5>
            <select name="cd_plataforma">
                <option>Selecione...</option>
                <?php
                    while ($linha = mysqli_fetch_array($resultadoPlat)) {
                        if($linha['cd_plataforma'] == $jogo['cd_plataforma']) {
                            echo "<option selected value='$linha[cd_plataforma]'>";
                        }
                        else {
                            echo "<option value='$linha[cd_plataforma]'>";
                        }
                        echo $linha['nm_plataforma'];
                        echo "</option>";
                    }
                    ?>
            </select>
            
            <h5>Desenvolvedora</h5>
            <select name="cd_desenvolvedora">
                <option>Selecione...</option>
                <?php
                    while ($linha = mysqli_fetch_array($resultadoDev)) {
                        if($linha['cd_desenvolvedora'] == $jogo['cd_desenvolvedora']) {
                            echo "<option selected value='$linha[cd_desenvolvedora]'>";
                        }
                        else {
                            echo "<option value='$linha[cd_desenvolvedora]'>";
                        }
                        echo $linha['nm_desenvolvedora'];
                        echo "</option>";
                    }
                    ?>
            </select>
            
            <h5>Distribuidora</h5>
            <select name="cd_distribuidora">
                <option>Selecione...</option>
                <?php
                    while ($linha = mysqli_fetch_array($resultadoDist)) {
                        if($linha['cd_distribuidora'] == $jogo['cd_distribuidora']) {
                            echo "<option selected value='$linha[cd_distribuidora]'>";
                        }
                        else {
                            echo "<option value='$linha[cd_distribuidora]'>";
                        }
                        echo $linha['nm_distribuidora'];
                        echo "</option>";
                    }
                    ?>
            </select>
            <?php
                if(isset($_GET['cd_jogo'])) {
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
