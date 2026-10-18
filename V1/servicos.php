<?php

    //SERVICOS
?>

            <h11><i class="far fa-bookmark" aria-hidden="true"></i> Serviços</h11>
            <div class="div_br"></div>
            <div class="div_br"></div>
            
            <div class="row justify-content-md-center">

                <!--ARQUITETURA-->
                <div class="col-md-3 caixa_servicos">

                    <img style="width: 60%" src="img/outros/bruna_andrade_arquitetura_01.webp" alt="Feng Shui">

                    <br>

                    <b>Arquitetura</b>

                    <div class="texto_servicos">

                        <p>Projetos Executivos, Paisagismo e Imagens 3D</p>
                   
                    </div>

                </div>

                <!--DESIGN-->
                <div class="col-md-3 caixa_servicos">

                    <img style="width: 60%" src="img/outros/bruna_andrade_arquitetura_02.webp" alt="Numerologia">

                    <br>

                    <b>Interiores</b>

                    <div class="texto_servicos">

                        <p>Consultorias, Projetos Executivos e Imagens 3D</p>
                    
                    </div>

                </div>

                <!--MARCENARIA-->
                <div class="col-md-3 caixa_servicos">

                    <img style="width: 60%" src="img/outros/bruna_andrade_arquitetura_03.webp" alt="Astrologia">

                    <br>

                    <b>Marcenaria</b>

                    <div class="texto_servicos">

                        <p>Design de moveis, Projetos Executivos e Imagens 3D</p>
                    
                    </div>
                
                </div>               

            </div>


<script>           
    // Lazy Youtube.js
    function setVideoFrames() {
        window.setTimeout(function () {
            let youtube_iframes = document.querySelectorAll('.lazy-youtube');

            if (youtube_iframes !== null) {
                for (let i = 0; i < youtube_iframes.length; i++) {
                    youtube_iframes[i].src = youtube_iframes[i].getAttribute('data-src');
                }
            }
        }, 2000);
    }

    if (window.addEventListener)  // W3C DOM
        window.addEventListener('load', setVideoFrames, false);
    else if (window.attachEvent) { // IE DOM
        window.attachEvent('onload', setVideoFrames);
    } else { //NO SUPPORT, lauching right now
        setVideoFrames();
    }
</script>