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
          <img src="img/banners/home/bruna_andrade_arquitetura_01.webp" alt="Consultoria Feng Shui" class="d-block w-100 banner_padrao" alt="Alt Banner 1">
          <div class="carousel-caption d-none d-md-block">
            <h5>Arquitetura</h5>
            <p class="p_banner";>Projetos alinhados ao propósito do cliente</p>
          </div>
        </div>
        <div class="carousel-item banner_padrao" data-interval="5000">
          <img src="img/banners/home/bruna_andrade_arquitetura_02.webp" alt="Consultoria Astrologia" class="d-block w-100 banner_padrao" alt="Alt Banner 2">
          <div class="carousel-caption d-none d-md-block">
          <h5>Design de Interiores</h5>
            <p class="p_banner";>Traga conforto e bem-estar para sua casa</p>
          </div>
        </div>
        <div class="carousel-item banner_padrao" data-interval="5000">
          <img src="img/banners/home/bruna_andrade_arquitetura_03.webp" alt="Feng Shui" class="d-block w-100 banner_padrao" alt="Alt Banner 3">
          <div class="carousel-caption d-none d-md-block">
            <h5>Projetos Comerciais</h5>
            <p class="p_banner";>Melhore seu ambiente de trabalho e atraia novos clientes</p>
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