<?= $this->html->css("inicio") ?>
<?= $this->html->css("modal") ?>
<?= $this->html->script("inicio", ["defer" => true]) ?>

<main class="corpo">
    <div class="titulo-wrapper">
        <h1>Top 10 melhores jogos do mundo</h1>
    </div>
    <p>Lista de melhores jogos da última decada na minha opnião</p>

    <ul class="container-jogos">
        <?php foreach ($games as $index => $game) {
            $rank = $index + 1;
            $rankClass = $rank <= 3 ? "top-$rank" : "standard-rank";
        ?>
            <li class="game-card open-modal" data-modal-index="<?= $game->id ?>">
                <div class="rank-badge <?= $rankClass ?>"><?= $rank ?></div>
                <div class="game-content">
                    <div class="img-game">
                        <?= $this->Html->image($game->image ? $game->image : "MAGAGO.png", ["alt" => "capa " . $game->title]) ?>
                    </div>
                    <div class="game-info">
                        <h2><?= $game->title ?></h2>
                        <p class="game-description"><?= $game->description ?></p>
                    </div>
                </div>
            </li>
            <div id="" class="hide fade"></div>
            <div id="modal<?= $game->id ?>" class="hide modal">
                <div class="modal-header">
                    <h2><?= $game->title ?></h2>
                    <button class="close-modal">Fechar</button>
                </div>
                <div class="modal-body">
                    <p><?= $game->description ?></p>
                    <div class="modal-img">
                        <?= $this->Html->image($game->image ? $game->image : "MAGAGO.png", ["alt" => "capa " . $game->title]) ?>
                    </div>
                </div>
            </div>
        <?php } ?>


        <!-- <?php foreach ($games as $game) { ?>
            <li>
                <a href="#modal<?= $game->id ?>">
                    <h2><?= $game->title ?></h2>
                </a>
                <p><?= $game->description ?></p>

                <div id="modal<?= $game->id ?>" class="modal">
                    <div class="modal-content">
                        <a href="#" class="closeBtn">&times;</a>
                        <p><?= $game->description ?></p>
                    </div>
                </div>
            </li>
        <?php } ?> -->

        <!-- <li>
            <h2>1 - Baldurs Gate 3</h2>
            <p>O melhor jogo do mundo</p>
        </li>
        <li>
            <h2>2 - The Last Of Us I</h2>
            <p>bem legal e emocionante um belo jogo muito legal matar zumbis e humanos tambem</p>
        </li>
        <li>
            <h2>3 - Minecraft</h2>
            <p>é mais por nostalgia mesmo</p>
        </li>
        <li>
            <h2>4 - Pokemon White</h2>
            <p>mulhe mandou eu colocar</p>
        </li>
        <li>
            <h2>5 - Life is Strange</h2>
            <p>Mudou minha vida </p>
        </li>
        <li>
            <h2>6 - Assassins Creed</h2>
            <p>nao vou dizer qual</p>
        </li>
        <li>
            <h2>7 - Stardew Valley</h2>
            <p>joguei muitas horas seria injusto nao colocar</p>
        </li>
        <li>
            <h2>8 - Amor Doce</h2>
            <p>...</p>
        </li>
        <li>
            <h2>9 - Mineirinho</h2>
            <p>Mineirinho</p>
        </li>
        <li>
            <h2>10 - Roblox</h2>
            <p>pq e muito legal tipo tem vários mini jogos em um jogao e ai da pra jogar com os amigos, por exemplo: steal a brainrot onde voce rouba varios tung tung sahurs</p>
        </li> -->
    </ul>
    <div class="center-container">
        <div class="loader">
            <div class="pac-man"></div>
            <div class="point p1"></div>
            <div class="point p2"></div>
            <div class="point p3"></div>
            <div class="point p4"></div>
            <div class="point p5"></div>
        </div>
    </div>

    <?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>

    
</main>