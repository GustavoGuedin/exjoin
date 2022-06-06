<html>
    <head>
        <meta charset="utf-8">
        <title>Início - ExJoin</title>
        <link rel=stylesheet href="estilo.css">
    </head>
    <body>
        <?php
            $pagina = "index";
            include "topo.php";
        ?>

        <div class="inicio">
            <h2>Bem-vindo(a)</h2>
            <p>Neste site você poderá testar quatro formulários e tabelas que ligam-se entre si. Você pode cadastrar uma plataforma, uma desenvolvedora, e uma distribuidora e então cadastrar um jogo ligando com as entidades que cadastrou anteriormente.</p>
            <p>É possível editar as entradas, mesmo que já estejam em uso na tabela de jogos. Isso resultará em uma edição em cascata. Caso tente apagar uma desenvolvedora, distribuidora ou plataforma que esteja em uso na tabela jogos, resultará em um erro, pois esta ação deixaria buracos na tebela "Jogos".</p>

            <h2>Estrutura do Banco de Dados</h2>
            <img class="modelo" src="modelo.png">

            <h2>Criado por...</h2>
                <div class="cardGui">
                    <img id="gui" src="go.png">
                    <div class="espaco"></div>
                    <div id="gui">
                        <h3>Guilherme Machado</h3>
                        <p class="bio">Cursando ADS no Senac. Tenho interesse em front-end!</p>
                        <div class="sociais">
                            <a href="https://www.instagram.com/guilherme_lineburger/">Instagram</a>
                            <div class="espaco"></div>
                            <a href="https://github.com/lineburgerguilherme">GitHub</a>
                            <div class="espaco"></div>
                            <a href="https://www.linkedin.com/in/guilherme-machado-lineburger-1b6912218/">LinkedIn</a>
                        </div>
                    </div>
                </div>
                <div class="cardGu">
                    <div id="gu">
                        <h3>Gustavo Guedin</h3>
                        <p class="bio">Cursando ADS no Senac. Gosto de mexer com Linux e CSS!</p>
                        <div class="sociais">
                            <a href="https://github.com/GustavoGuedin">GitHub</a>
                            <div class="espaco"></div>
                            <a href="https://www.linkedin.com/in/gustavo-guedin-009016237/">LinkedIn</a>
                        </div>
                    </div>
                    <div class="espaco"></div>
                    <img id="gu" src="ruby.jpg">
                </div>
        </div>
    </body>
</html>
