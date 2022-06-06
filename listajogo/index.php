<?php
    include "../conexao.php";
    $sql = "SELECT jogo.cd_jogo, jogo.nm_jogo,
                   plat.cd_plataforma, plat.nm_plataforma,
                   dev.cd_desenvolvedora, dev.nm_desenvolvedora,
                   dist.cd_distribuidora, dist.nm_distribuidora 
            FROM   jogo jogo, plataforma plat, desenvolvedora dev, distribuidora dist 
            WHERE  jogo.cd_plataforma = plat.cd_plataforma 
            AND    jogo.cd_desenvolvedora = dev.cd_desenvolvedora 
            AND    jogo.cd_distribuidora = dist.cd_distribuidora";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <?php
            $pagina = "listajogo";
            include "../topo.php";
        ?>

        <meta charset="utf-8">
        <title>Tabela jogos - ExJoin</title>
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <table>
            <tr>
                <th>Código</th>
                <th>Jogo</th>
                <th>Plataforma</th>
                <th>Desenvolvedora</th>
                <th>Distribuidora</th>
                <th>Ações</th>
            </tr>
            <?php
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$linha[cd_jogo]</td>";
                    echo "<td>$linha[nm_jogo]</td>";
                    echo "<td>$linha[nm_plataforma]</td>";
                    echo "<td>$linha[nm_desenvolvedora]</td>";
                    echo "<td>$linha[nm_distribuidora]</td>";
                    echo "<td>";
                    echo "<a href='../formjogo?cd_jogo=$linha[cd_jogo]'><img src='../edit.svg' title='Editar'></a>";
                    echo "<a href='excluir.php?cd_jogo=$linha[cd_jogo]'><img src='../delete.svg' title='Excluir'></a>";
                    echo "</td>";
                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>