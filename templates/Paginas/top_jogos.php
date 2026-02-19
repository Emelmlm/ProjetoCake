<?= $this->html->css("inicio") ?>
<?= $this->html->css("modal") ?>
<?= $this->html->script("inicio", ["defer" => true]) ?>

<main class="corpo">
    <h1>Top 10 melhores jogos do mundo</h1>
    <p>Lista de melhores jogos da última decada na minha opnião</p>
    <ul class="container-jogos">
        <?php foreach ($games as $game) {  ?>
            <li>
                <a id="open-modal">
                    <h2><?= $game->title ?></h2>
                </a>
                <p><?= $game->description ?></p>
            </li>
            <div id="fade" class="hide"></div>
            <div id="modal" class="hide">
                <div class="modal-header">
                    <h2><?= $game->title ?></h2>
                    <button id="close-modal">Fechar</button>
                </div>
                <div class="modal-body">
                    <p><?= $game->description ?></p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat nemo quaerat porro maxime, aut cum voluptates earum asperiores minus vitae ipsam voluptatem sequi inventore, recusandae rerum sed corrupti obcaecati repellendus.</p>
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

    <?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>
</main>