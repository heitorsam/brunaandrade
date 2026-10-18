<?php 
    session_start();	

    //CABECALHO
    include 'cabecalho.php';

?>

<!--BANNER HOME-->
<?php
    $banner = 'home';
    include 'banners.php';
?>

<div class="bloco-site" id="sobre">

    <!--A EMPRESA-->
    <div class="div_br"></div>            
    <h11><i class="fa fa-walking" aria-hidden="true"></i> Sobre</h11>
    <div class="div_br"></div>
    <div class="div_br"></div>
    Arquiteta formada pela Belas Artes, focada em arquitetura e design de interiores
    tanto residencial como comercial. Realizo consultorias presenciais e a distância, projetos de interiores, arquitetônicos, design de moveis e comunicação visual.
    <div class="div_br"></div>
    Trabalho com o alinhamento entre o gosto do cliente e a orientação do arquiteto de forma que o projeto seja único, esteticamente harmônico e funcional.
    <div class="div_br"></div>
    CAU: Nº A136398-0


</div>

<!--SERVICOS-->

<div style="width: 100%; padding-top:5px; padding-bottom: 5px;">

        <div class="bloco-site" id="servicos">
            <?php include 'servicos.php'; ?>
        </div>   
</div>

<!--GALERIA-->
<div class="bloco-site" id="galeria">
    <?php include 'galeria.php'; ?>
</div>    


<!--EQUIPE-->
<div class="bloco-site" id="equipe">
    <?php include 'equipe.php'; ?>
</div>       

<!--CONTATO-->
<div class="bloco-site" id="contato"> 
    <?php include 'contato.php'; ?>
</div>


<!--QUALIFICACOES-->
<div class="bloco-site" id="qualificacoes">
    <?php include 'qualificacoes.php'; ?>
</div>   

<?php
    //RODAPE
    include 'rodape.php';
?>

