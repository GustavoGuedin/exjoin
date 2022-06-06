<div id="topo">
<?php
    echo "<div class='index'>";
    if($pagina == "index") {
        echo "<a href='/exjoin' class='paginaAtual' style='border-radius: 8px;'>Início</a>";
    }
    else {
        echo "<a href='/exjoin' class='paginaBg'>Início</a>";
    }
    echo "</div>";

    echo "<div class='forms'>";
    echo "<label>Cadastar:</label>";
    if($pagina == "formjogo") {
        echo "<a href='/exjoin/formjogo' class='paginaAtual'>Jogos</a>";
    }
    else {
        echo "<a href='/exjoin/formjogo' class='paginaBg'>Jogos</a>";
    }

    if($pagina == "formplat") {
        echo "<a href='/exjoin/formplat' class='paginaAtual'>Plataformas</a>";
    }
    else {
        echo "<a href='/exjoin/formplat' class='paginaBg'>Plataformas</a>";
    }

    if($pagina == "formdev") {
        echo "<a href='/exjoin/formdev' class='paginaAtual'>Desenvolvedoras</a>";
    }
    else {
        echo "<a href='/exjoin/formdev' class='paginaBg'>Desenvolvedoras</a>";
    }

    if($pagina == "formdist") {
        echo "<a href='/exjoin/formdist' class='paginaAtual' style='border-radius: 0 8px 8px 0;'>Distribuidoras</a>";
    }
    else {
        echo "<a href='/exjoin/formdist' class='paginaBg'>Distribuidoras</a>";
    }
    echo "</div>";

    echo "<div class='listas'>";
    echo "<label>Tabelas:</label>";
    if($pagina == "listajogo") {
        echo "<a href='/exjoin/listajogo' class='paginaAtual'>Jogos</a>";
    }
    else {
        echo "<a href='/exjoin/listajogo' class='paginaBg'>Jogos</a>";
    }

    if($pagina == "listaplat") {
        echo "<a href='/exjoin/listaplat' class='paginaAtual'>Plataformas</a>";
    }
    else {
        echo "<a href='/exjoin/listaplat' class='paginaBg'>Plataformas</a>";
    }

    if($pagina == "listadev") {
        echo "<a href='/exjoin/listadev' class='paginaAtual'>Desenvolvedoras</a>";
    }
    else {
        echo "<a href='/exjoin/listadev' class='paginaBg'>Desenvolvedoras</a>";
    }

    if($pagina == "listadist") {
        echo "<a href='/exjoin/listadist' class='paginaAtual' style='border-radius: 0 8px 8px 0;'>Distribuidoras</a>";
    }
    else {
        echo "<a href='/exjoin/listadist' class='paginaBg'>Distribuidoras</a>";
    }
    echo "</div>";
?>
</div>