<h1>Meu Portfólio</h1>
<?php foreach($portfolio as $item): ?>
<div class="portfolio_item">
    <img src="<?php echo BASE_URL; ?>assets/images/portfolio/<?php echo $item['imagem']; ?>" border="0" width="200" height="150" />
</div>
<?php endforeach; ?>
<div style="clear:both"></div><!-- Para acompanhar o layout do float:left da classe portfolio_item para a classe home_portifolio acompanhar junto -->
