<?= $this->html->css("inicio") ?>

<main class="corpo">
    <h1>Maior site de top 10 do mundo</h1>
    <p>Confira os vários top deises de várias coisas</p>
    <div class="tops">
        <div class="tops">
            <h2>Top 10 melhores Jogos</h2>
            <p>Lista dos 10 melhores Jogos da última decada.</p>
            <img src="img/miau.png" class="img-link" alt="Foto de gato">
            <a href="topJogos" id="linkMassa" class="link-massa">Conferir</a>
        </div>
        <div class="tops">
            <h2>Top 10 melhores Músicas</h2>
            <p>Lista das 10 melhores músicas de todas as décadas seila</p>
            <img src="img/magago.png" class="img-link" alt="um macaco">
            <a href="topmusicas" id="linkMassa" class="link-massa">Conferir</a>
        </div>
    </div>


    <!-- <?= $this->html->link("Concordo", "/topJogos", ["id" => "linkMassa2", "class" => "link-show"]); ?> -->

</main>