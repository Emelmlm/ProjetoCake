<?= $this->html->css("inicio")?>
<?= $this->html->css("style")?>
<?= $this->html->script("script")?>


<main class="corpo">
    <h1>Contatos</h1>

    <body>
    <ul class="slides" id="slides">
		<li class="slide">
			<img src="https://picsum.photos/id/10/700/600/" alt="Image #10" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/10/700/600/"><span>IMG </span>1</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/11/700/600/" alt="Image #11" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/11/700/600/"><span>IMG </span>2</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/12/700/600/" alt="Image #12" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/12/700/600/"><span>IMG </span>3</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/13/700/600/" alt="Image #13" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/13/700/600/"><span>IMG </span>4</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/14/700/600/" alt="Image #14" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/14/700/600/"><span>IMG </span>5</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/15/700/600/" alt="Image #15" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/15/700/600/"><span>IMG </span>6</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/16/700/600/" alt="Image #16" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/16/700/600/"><span>IMG </span>7</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/17/700/600/" alt="Image #17" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/17/700/600/"><span>IMG </span>8</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/18/700/600/" alt="Image #18" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/18/700/600/"><span>IMG </span>9</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/19/700/600/" alt="Image #19" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/19/700/600/"><span>IMG </span>10</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/20/700/600/" alt="Image #20" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/20/700/600/"><span>IMG </span>11</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/21/700/600/" alt="Image #21" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/21/700/600/"><span>IMG </span>12</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/22/700/600/" alt="Image #22" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/22/700/600/"><span>IMG </span>13</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/23/700/600/" alt="Image #23" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/23/700/600/"><span>IMG </span>14</a>
		</li>
		<li class="slide">
			<img src="https://picsum.photos/id/24/700/600/" alt="Image #24" draggable="false" />
			<a target="_blank" href="https://picsum.photos/id/24/700/600/"><span>IMG </span>15</a>
		</li>
	</ul>
</body>

<?= $this->html->link(
        $this->html->image("voltar.png", ["class" => "img-voltar"]),
        "/",
        ["class" => "link-voltar", "escape" => false]
    ) ?>
</main>