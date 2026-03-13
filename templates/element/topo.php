<div class="topo">
    <?= $this->Html->link($this->Html->image('logotop.png', ['alt' => 'logo']), '/', ['escape' => false]) ?>
    <!-- <h1 class="titulo-cursivo">Maior site de top 10 do mundo</h1> -->
    <ul class="nav-links">
        <li><?= $this->Html->link("homie", "/", ["id" => "homie", "class" => "link"]); ?></li>
        <li><?= $this->Html->link("bout", "/sobre", ["class" => "link"]); ?></li>
        <li><?= $this->Html->link("aura", "/aura", ["class" => "link"]); ?></li>
    </ul>
</div>

