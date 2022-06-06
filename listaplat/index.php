<?php
    include '../conexao.php';
    $sql = "SELECT cd_plataforma, nm_plataforma FROM plataforma";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <title>Tabela plataformas - ExJoin</title>
        <meta charset="utf-8">
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "listaplat";
            include "../topo.php";
        ?>

        <table>
            <tr>
                <th>Código</th>
                <th>Plataforma</th>
                <th>Ações</th>
            </tr>
            <?php
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$linha[cd_plataforma]</td>";
                    echo "<td>$linha[nm_plataforma]</td>";
                    echo "<td>";

                    echo "<a href='../formplat?cd_plataforma=$linha[cd_plataforma]'><img src='../edit.svg' title='Editar'></a>";
                    echo "<a href='excluir.php?cd_plataforma=$linha[cd_plataforma]'><img src='../delete.svg' title='Excluir'></a></td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>