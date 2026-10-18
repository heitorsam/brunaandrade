//////////////////
//IR PARA O TOPO//
//////////////////

jQuery(document).ready(function(){

    jQuery("#subirTopo").hide();
    
    jQuery('a#subirTopo').click(function () {
             jQuery('body,html').animate({
               scrollTop: 0
             }, 800);
            return false;
    });
    
    jQuery(window).scroll(function () {
             if (jQuery(this).scrollTop() > 10) {
                jQuery('#subirTopo').fadeIn();
             } else {
                jQuery('#subirTopo').fadeOut();
             }
    });
});

///////////////////////
//HABILITANTO POPOVER//
///////////////////////

$(document).ready(function(){
    $('[data-toggle="popover"]').popover({
        trigger: 'hover',
        placement : 'top'
    });
});

/////////////
//MENU SITE//
/////////////

$("nav a").click(function(event){
    event.preventDefault();
    var dest=0;

    $valida_botao_div_social = this.classList.contains("div-social");
    //alert($valida_botao_div_social);

    if($valida_botao_div_social){

      //Se tiver a classe div-social abre link en nova guia
      //alert(this.href);

      //Coletando href do botão
      $link_site = this.href;

      //Abrindo site em nova aba
      window.open($link_site, '_blank');
      
    }else{   

      if($(this.hash).offset().top > $(document).height()-$(window).height()){
        dest=$(document).height()-$(window).height();
      }else{
        dest=$(this.hash).offset().top;
      }
      $('html,body').animate({scrollTop:dest}, 1000,'swing');

    }
  });