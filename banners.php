<?php

    //Banner Home
?>

    <?php if($banner == 'home'){?>

      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner banner_padrao">
        <div class="carousel-item active banner_padrao" data-interval="5000">
          <img src="img/banners/home/banner_espaco_feng_shui_01.webp" alt="Consultoria Feng Shui" class="d-block w-100 banner_padrao" alt="Alt Banner 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Consultoria Feng Shui</h5>
            <p class="p_banner";>Atraía harmonia e prosperidade com o Feng Shui</p>
          </div>
        </div>
        <div class="carousel-item banner_padrao" data-interval="5000">
          <img src="img/banners/home/banner_espaco_feng_shui_02.webp" alt="Consultoria Astrologia" class="d-block w-100 banner_padrao" alt="Alt Banner 2">
          <div class="carousel-caption d-none d-md-block">
          <h5>Consultoria Feng Shui</h5>
            <p class="p_banner";>Utilize os benefícios da ciência do baguá com o Feng Shui</p>
          </div>
        </div>
        <div class="carousel-item banner_padrao" data-interval="5000">
          <img src="img/banners/home/banner_espaco_feng_shui_03.webp" alt="Feng Shui" class="d-block w-100 banner_padrao" alt="Alt Banner 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Consultoria Astrologia</h5>
            <p class="p_banner";>Obtenha autoconhecimento através do Mapa Astral</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próximo</span>
      </a>
      </div>

    <?php }?>