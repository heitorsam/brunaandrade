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
    O <b style="color: #3d3d3d;">Feng Shui</b> é uma ciência e arte Chinesa de origem filosófica Taoista, que têm por objetivo organizar os espaços a fim de atrair influências benéficas da Natureza.
    <div class="div_br"></div>

    Com o <b style="color: #3d3d3d;">Feng Shui</b> é possível melhorar várias áreas da sua vida, como: família, amigos, prosperidade, relacionamentos, saúde, sabedoria, sucesso, criatividade e trabalho.
    <div class="div_br"></div>

    Ao aplicar o <b style="color: #3d3d3d;">Feng Shui</b>, é perceptível a melhora no ânimo/disposição dos moradores e o surgimento de oportunidades na vida pessoal e profissional, descoberta de talentos, melhoras na saúde e bem estar.
    <div class="div_br"></div>

    O <b style="color: #ed6a6e;">Espaço Feng Shui</b> conta com profissionais arquitetos especializados em <b style="color: #3d3d3d;">Feng Shui</b> e em outras áreas do autoconhecimento. Possibilitando assim a excelência de nossos serviços.

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

