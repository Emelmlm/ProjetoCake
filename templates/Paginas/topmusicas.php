<?= $this->html->css("inicio") ?>

<main class="corpo">
    <h1>Minhas músicas favoritas</h1>
    <div class="lista-musica">
        <div>
            <img src="img/monochrome.jpg" alt="capa monochrome">
            <p>Monochrome</p>
        </div>
        <div>
            <img src="img/lonelyday.jpg" alt="">
            <p>Lonely Day</p>
        </div>
        <div>
            <img src="img/mothermother" alt="">
            <p>Oh Ana</p>
        </div>
        <div>
            <img src="img/hozier.jpg" alt="">
            <p>Eat your young </p>
        </div>
        <div>
            <img src="img/fable.jpg" alt="">
            <p>Fable</p>
        </div>
        <div>
            <img src="img/chico.jpg" alt="">
            <p>Apesar de você</p>
        </div>
        <div>
            <img src="img/miku.jpg" alt="">
            <p>World is Mine</p>
        </div>
        <div>
            <img src="img/arcane.jpg" alt="">
            <p>Hellfire</p>
        </div>
        <div>
            <img src="img/usher.jpg" alt="">
            <p>Yeah!</p>
        </div>
        <div>
            <img src="img/190.png" alt="">
            <p>190</p>
        </div>
    </div>

    <?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>
</main>