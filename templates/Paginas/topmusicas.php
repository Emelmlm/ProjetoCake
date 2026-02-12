<?= $this->html->css("inicio") ?>

<main class="corpo">
    <h1>Minhas músicas favoritas</h1>
    <ul class="lista-musica">
        <?php foreach($songs as $song): ?>
            <li>
                <?= $this->Html->image($song->image ?$song->image :"MAGAGO.png", ["alt"=> "capa". $song->title]) ?>
                <p><?= $song->title ?></p>
            </li>
        <?php endforeach ?>
        <!-- <div class="item-musica">
            <img src="img/monochrome.jpg" alt="capa monochrome">
            <p>Monochrome</p>
        </div>
        <div class="item-musica">
            <img src="img/lonelyday.jpg" alt="">
            <p>Lonely Day</p>
        </div>
        <div class="item-musica">
            <img src="img/mothermother" alt="">
            <p>Oh Ana</p>
        </div>
        <div class="item-musica">
            <img src="img/hozier.jpg" alt="">
            <p>Eat your young </p>
        </div>
        <div class="item-musica">
            <img src="img/fable.jpg" alt="">
            <p>Fable</p>
        </div>
        <div class="item-musica">
            <img src="img/chico.jpg" alt="">
            <p>Apesar de você</p>
        </div>
        <div class="item-musica">
            <img src="img/miku.jpg" alt="">
            <p>World is Mine</p>
        </div>
        <div class="item-musica">
            <img src="img/arcane.jpg" alt="">
            <p>Hellfire</p>
        </div>
        <div class="item-musica">
            <img src="img/usher.jpg" alt="">
            <p>Yeah!</p>
        </div>
        <div class="item-musica">
            <img src="img/190.png" alt="">
            <p>190</p>
        </div>
        <div class="item-musica">
            <img src="img/terracelta.jpg" alt="">
            <p>gaia</p>
        </div> -->
</ul>

    <?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>
</main>