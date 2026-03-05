<?= $this->html->css("inicio") ?>

<main class="corpo">
    <!-- <h1 class="titulo-cursivo">Maior site de top 10 do mundo</h1> -->
    <!-- <p>Confira os vários top deises de várias coisas</p> -->
    <div class="lista-tops">
        <?= $this->Html->link(
            '
        <div class="tops">
            <img src="img/capatopgames.jpeg" class="img-link" alt="Foto de gato">
            <div class="card-content">
                <h2>Top 10 melhores Jogos</h2>
                <p>Lista dos 10 melhores Jogos da última decada.</p>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <!-- <?= $this->html->link("<span>Conferir</span>", "/topJogos", ["id" => "linkMassa1", "class" => "link-show", "escape" => false]) ?> -->
            </div>
        </div>
        ',
            ['controller' => 'Paginas', 'action' => '/topJogos'], // rota
            ['class' => 'card-link', 'escape' => false]
        ); ?>
        <?= $this->Html->link(
            '
        <div class="tops">
            <img src="img/capatopmusgas.jpeg" class="img-link" alt="Foto de macaco">
            <div class="card-content">
                <h2>Top 10 melhores Músicas</h2>
                <p>Lista das 10 melhores músicas de todas as décadas seila.</p>
                <i class="fa-solid fa-arrow-up-right-from-square"></i>
                <!-- <?= $this->html->link("<span>Conferir</span>", "/topJogos", ["id" => "linkMassa1", "class" => "link-show", "escape" => false]) ?> -->
            </div>
        </div>
        ',
            ['controller' => 'Paginas', 'action' => '/topmusicas'], // rota
            ['class' => 'card-link', 'escape' => false]
        ); ?>

        <!-- <div class="tops">
            <img src="img/magago.png" class="img-link" alt="um macaco">
            <div class="card-content">
                <h2>Top 10 melhores Músicas</h2>
                <p>Lista das 10 melhores músicas de todas as décadas seila</p>
                <?= $this->html->link("Conferir", "/", ["id" => "linkMassa2", "class" => "link-show"]) ?>
            </div>
        </div> -->

    </div>


    <!-- <?= $this->html->link("Concordo", "/topJogos", ["id" => "linkMassa2", "class" => "link-show"]); ?> -->

</main>