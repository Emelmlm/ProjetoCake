<?= $this->html->css("inicio") ?>

<div class="corpo">
    <h1>bout us</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce quis ipsum nibh. Cras laoreet ex velit, sed ullamcorper ligula molestie nec. Proin interdum, massa at mattis ornare, lectus lacus aliquet erat, id auctor risus purus auctor diam. In condimentum mollis dui. Pellentesque interdum suscipit quam non lacinia. Vivamus dictum metus quam, ac rutrum sapien hendrerit quis. Vestibulum bibendum sapien ut ipsum auctor aliquam. Quisque aliquet sollicitudin sem, eu molestie sem tincidunt malesuada. Phasellus et sem ut ex fringilla suscipit vel a odio. Cras feugiat ultrices varius. Aliquam augue velit, lacinia quis tempus eu, euismod eget nulla. Nam et efficitur ligula, ut aliquet magna. Cras fermentum lectus eu pharetra aliquet. Nulla a sem ex. Vestibulum elementum sapien at ex efficitur, vel condimentum magna varius. Quisque elementum leo nec tellus iaculis, at rhoncus tortor commodo. Vestibulum a mauris sed sapien viverra venenatis eu sed eros. Sed consectetur eget arcu eget sagittis. Aenean luctus ornare arcu ac vehicula. Etiam placerat sollicitudin libero id ultricies. Morbi sed elit vitae ex tempor volutpat. Vivamus euismod malesuada massa, et pretium lorem efficitur a.</p>
    <?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>

</div>