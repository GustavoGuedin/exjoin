<?php
    include '../conexao.php';
    $sql = "SELECT cd_distribuidora, nm_distribuidora FROM distribuidora";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <title>Tabela distribuidoras - ExJoin</title>
        <meta charset="utf-8">
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "listadist";
            include "../topo.php";
        ?>

        <table>
            <tr>
                <th>Código</th>
                <th>Distribuidora</th>
                <th>Ações</th>
            </tr>
            <?php
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$linha[cd_distribuidora]</td>";
                    echo "<td>$linha[nm_distribuidora]</td>";
                    echo "<td>";

                    echo "<a href='../formdist?cd_distribuidora=$linha[cd_distribuidora]'><img src='../edit.svg' title='Editar'></a>";
                    echo "<a href='excluir.php?cd_distribuidora=$linha[cd_distribuidora]'><img src='../delete.svg' title='Excluir'></a></td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>