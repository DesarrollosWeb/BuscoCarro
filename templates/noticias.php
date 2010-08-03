<div class="floatbox">
  <h1 class="titulo">Noticias</h1>
  <?php for($i=1; $i<=7; $i++ ):?>
  <div class="Noticia">
    <p class="<?php echo ($i % 2 == 0) ? 'icaption_left' : 'icaption_right'; ?>" style="max-width:15%"> <img src="images/<?php echo $i; ?>.jpg" alt=""/> </p>
    <div class="<?php echo ($i % 2 == 0) ? 'float_right' : 'float_left'; ?>" style="width:80%;">
      <h2 class="tituloNoticia">Titulo <?php echo $i; ?></h2>
      <p class="descripción">descripción del artículo</p>
      <a href="#" class="float_left">Ver más</a> </div>
  </div>
  <?php endfor; ?>
</div>
