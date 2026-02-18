<?= $this->html->css("inicio") ?>

<main class="corpo">
    <h1 class="titulo-cursivo">Maior site de top 10 do mundo</h1>
    <p>Confira os vários top deises de várias coisas</p>
    <div class="lista-tops">
        <div class="tops">
            <img src="img/miau.png" class="img-link" alt="Foto de gato">
            <h2>Top 10 melhores Jogos</h2>
            <p>Lista dos 10 melhores Jogos da última decada.</p>
            <?= $this->html->link("Conferir", "/topJogos", ["id" => "linkMassa1", "class" => "link-show"]) ?>
        </div>
        <div class="tops">
            <img src="img/magago.png" class="img-link" alt="um macaco">
            <h2>Top 10 melhores Músicas</h2>
            <p>Lista das 10 melhores músicas de todas as décadas seila</p>
            <?= $this->html->link("Conferir", "/topmusicas", ["id" => "linkMassa2", "class" => "link-show"]) ?>
        </div>
    </div>


    <!-- <?= $this->html->link("Concordo", "/topJogos", ["id" => "linkMassa2", "class" => "link-show"]); ?> -->

</main>