<?php
    include '../conexao.php';
    $sql = "SELECT cd_desenvolvedora, nm_desenvolvedora FROM desenvolvedora";
    $resultado = mysqli_query($conexao, $sql);
?>

<html>
    <head>
        <title>Tabela desenvolvedoras - ExJoin</title>
        <meta charset="utf-8">
        <link rel=stylesheet href="../estilo.css">
    </head>
    <body>
        <?php
            $pagina = "listadev";
            include "../topo.php";
        ?>

        <table>
            <tr>
                <th>Código</th>
                <th>Desenvolvedora</th>
                <th>Ações</th>
            </tr>
            <?php
                while ($linha = mysqli_fetch_array($resultado)) {
                    echo "<tr>";
                    echo "<td>$linha[cd_desenvolvedora]</td>";
                    echo "<td>$linha[nm_desenvolvedora]</td>";
                    echo "<td>";

                    echo "<a href='../formdev?cd_desenvolvedora=$linha[cd_desenvolvedora]'><img src='../edit.svg' title='Editar'></a>";
                    echo "<a href='excluir.php?cd_desenvolvedora=$linha[cd_desenvolvedora]'><img src='../delete.svg' title='Excluir'></a></td>";

                    echo "</tr>";
                }
            ?>
        </table>
    </body>
</html>