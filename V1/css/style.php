<?php
	//ESTILO CSS	
	//echo '</br></br> ESTILO CSS OK';
?>

<style>

/********/
/*GERAIS*/
/********/

body{
    
    font-family: 'sans-serif', 'arial'; 
    background-color: #fbfbfb !important;
	margin:0;
}

.div_br{
    padding-top: 14px;
}

.row{
    margin: 0;
}

.container{
    padding-top: 0px;
    padding-left: 0px !important;
    padding-right: 0px !important;
    padding-bottom: 0px;
    min-height: 46vh;
    max-width: 100% !important;
}

p,li{
    color: #444444;
    font-size: 14px;
}

.conteudo{
    background-color: #fbfbfb;
}

.centralizar{
	text-align: center;
}

/*******/
/*LOGIN*/
/*******/

.conteudo_login{

    background-image: linear-gradient(#006aac, #03a1c0);

}

.col, .col-1, .col-2, .col-3, .col-4,.col-5, .col-6, 
.col-7, .col-8,.col-9, .col-10, .col-11, .col-12 {
    
    padding: 5px;
    text-align: center;
    background-color: rgba(255,255,255,.0) !important;
}

.col-lg, .col-lg-1, .col-lg-2, .col-lg-3, .col-lg-4,.col-lg-5, .col-lg-6, 
.col-lg-7, .col-lg-8,.col-lg-9, .col-lg-10, .col-lg-11, .col-lg-12 {
    
    padding: 5px;
    text-align: center;
    background-color: rgba(255,255,255,.0) !important;
}


.img_redimensionada {
		width: 80%;
		height: 80%;
		object-fit: contain;
}
			
/********************/
/*BARRA DE NAVEGACAO*/
/********************/

.bg-color{

    background-color: #ffffff;

}

.navbar{
    padding: 0 !important;
}

.nav-link{
    color: #ffffff;
    font-size:15px;
}

.navbar-dark .navbar-nav .nav-link {
    padding: 16px !important;
    color: rgba(255,255,255.99) !important;
    
}

.navbar-dark:hover .navbar-nav:hover .nav-link:hover {
    color: rgba(255,255,255,.6) !important;
}

.navbar-brand {
    font-family: 'sans-serif', 'arial'; 
    padding-left: 14px;
    font-size:16x !important;

}

.navbar-brand :hover{
    font-family: 'sans-serif', 'arial'; 
    color: rgba(255,255,255,.6) !important;
}

.dropdown-item {
    color: #3d3d3d !important;  
}

/*MENU AZUL CLARO*/
.menu_azul_claro{

    background-color: #70aedc;
    /*border-left: 1px solid #ffffff;
    border-right: 1px solid #ffffff;*/
}

/*MENU PRETO*/
.menu_preto{
 
    background-color: #55594d;
     /*border-left: 1px solid #ffffff;
    border-right: 1px solid #ffffff;*/
    

}

/*MENU PERFIL*/
.menu_perfil{

    background-color: #70aedc;
}

.menu_sem_fundo{

background-color: none !important;;
}


/*AJUSTE BORDA MOBILE*/
@media (max-width: 768px) {
	.menu_azul_claro, .menu_preto, .menu_perfil { 
       border: 0; 
    }
}

.dropdown-menu-right {
    margin-bottom: 20px !important;
}


/*DIRETORIO*/
.diretorio{
    font-size: 13.5px;
    color: #33372b;
    height: 24px;
    background-color: #fffff7;
    border-top: 1px solid #ccd0c4;
    border-bottom: 1px solid #ccd0c4;
    padding-left: 16px;
}

.diretorio_link{
    font-size: 13.5px;
    color: #33372b;
    text-decoration: none;
}

.diretorio_link:hover{
    font-size: 13.5px;
    color: #33372b;
    text-decoration: none;
    opacity: 70%;
}

/********/
/*BOTOES*/
/********/

/*BOTAO HOME */

.botao_home { 
	width: 240px;
	
	padding-top: 20px;
	padding-bottom: 20px; 
    
    margin-top: 6px;
	margin-bottom: 6px; 
	
	border-style: solid;
	border-width: thin;
	border-radius: 5px;  
	border-color: #3185c1;
	
    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #3185c1;
	font-size: 14px;
	font-weight: bold;
	
	/*box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.2);*/
	
}

.botao_home:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #3185c1;
	font-size: 14px;
	font-weight: bold;
    background-color: #31b2d0; 
    border-color: #31b2d0;
}

/*BOTAO HOME ADM */

.botao_home_adm { 
	width: 240px;
	
    padding-top: 20px;
	padding-bottom: 20px;  
	
    margin-top: 6px;
	margin-bottom: 6px; 

	border-style: solid;
	border-width: thin;
	border-radius: 5px;  
	border-color: #e05757;
	
    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #e05757;	
	font-size: 14px;
	font-weight: bold;
	
	/*box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.2);*/	
}

.botao_home_adm:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;	

    color: rgba(255,255,255,.99);
	font-size: 14px;
	font-weight: bold;
    background-color: #e36767; 
    border-color: #e36767;
}

/*BOTAO FORM*/


.btn-primary { 
    font-size: 0.875rem !important;
    background-color: #3185c1 !important;
    border-color: #3185c1 !important;		
}

.btn-primary:hover{ 
    background-color: #31b2d0 !important; 
    border-color: #31b2d0 !important;		
}


.btn-adm { 
    font-size: 0.875rem !important;
    color: #ffffff !important;
    background-color: #e05757 !important;
    border-color: #e05757 !important;		
}

.btn-adm:hover{ 
    color: #ffffff !important;
    background-color: #e36767 !important; 
    border-color: #e36767 !important;		
}

/* ARQUIVO UPLOAD */
.arquivo_upload {

	font-size: 11px;
	color: #555555;
	
}

/*BOTAO HOME */

.botao_info { 

    text-align: center;
    text-decoration: none;
    display: inline-block;		
    color: #ffa700;
	font-size: 14px;

}

.botao_info:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;		
    color: #ffc148; 
	font-size: 14px;

}

.botao_verde{
    background-color: #30c669 !important;
    border-color: #30c669 !important;
}

.botao_verde:hover{
    background-color: #3bd274 !important;
    border-color: #3bd274 !important;
}

.botao_info_amarelo { 
    color: #ffffff !important;
    font-size: 0.875rem !important;
    background-color: #ffa700 !important;
    border-color: #ffa700 !important;		
}

.botao_info_amarelo:hover{ 
    color: #ffffff !important;
    background-color: #ffc148 !important; 
    border-color: #ffc148 !important;		
}

/*************/
/*FORMULARIOS*/
/*************/

.bloco_permissoes_setor{
    
    width: 50%;
    max-height: 260px;

    overflow: auto;
    overflow-x: hidden;
    padding: 0;
}

.table thead th {
    font-size: 14px;
    color: #ffffff;
    background-color: #3185c1;
    vertical-align: bottom;
    border: none;
    border-bottom: 1px solid #dee2e6 !important;
    padding: 5px !important;
}
.table td, .table th {
    font-size: 14px;
    padding: 5px !important;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}

/********/
/*TABELA*/
/********/

th.rotated-text {
    font-size: 0.75rem !important;
    height: 120px;
    white-space: nowrap;
    padding: 0 !important;
}

th.rotated-text > div {
    transform:
        translate(0px, 0px)
        rotate(270deg);
    width: 30px;
}

th.rotated-text > div > span {
    padding: 10px 10px;
}

.fonte_tabela_pequeno{
    font-size: 0.75rem !important;
    text-align: center;
    border-bottom: solid 1px #999999;
}

.fundo_amarelo{
    color: #000000 !important;
    background-color: #ffeeb8 !important;
}

.fundo_azul{
    color: #000000 !important;
    background-color: #c9e2ff !important;
}

.fundo_azul_escuro{
    color: #000000 !important;
    background-color: #8bc0fe !important;
}
  
.fundo_preto{
    color: #ffffff !important;
    background-color: #444444 !important;
}

.fundo_vermelho{
    color: #ffffff !important;
    background-color: #ff6262 !important;
}

.fundo_verde{
    color: #ffffff !important;
    background-color: #34c777 !important;
}

/*******/
/*FONTS*/
/*******/

/*LINK MENU*/
h10{
    font-family: 'sans-serif', 'arial'; 
    color: rgba(0,0,0);
    font-size:17px;
}

/*TITULO*/
h11{
    font-family: 'sans-serif', 'arial'; 
    font-size:22px;
    color: #3d3d3d;
    border-bottom: 1px solid #dadada;
    padding-bottom: 3px;
}

/*FONTE PADRAO*/
h12{
    font-family: 'sans-serif', 'arial'; 
    font-size:15px;
    color: #3d3d3d;
}

/*INFO LOGIN*/
h13{
    font-family: 'sans-serif', 'arial'; 
    font-size:16px;
    color: #3d3d3d;
    border-bottom: 1px solid #dadada;
    padding-bottom: 3px;
}

/*TITULO LOGIN*/
h14{
    font-family: 'sans-serif', 'arial'; 
    font-size:17px;
    color: #3d3d3d;
}

/*INFORMACOES HOME*/
.link_home_pend{
    font-family: 'sans-serif', 'arial'; 
    font-size:13px;
    color: #3d3d3d;
    text-decoration: none;
}

.link_home_pend:hover{
    color: #3185c1;
    text-decoration: none;
}

/*********/
/*ESPACOS*/
/*********/

.espaco{
	display: inline-block;
	width: 14px;	
}


.espaco_pequeno{
	display: inline-block;
	width: 4px;	
}


/********/
/*RODAPE*/
/********/

.footer-bs {
    background-color: #3c3d41;
	padding: 40px 110px;
	color: rgba(255,255,255,1.00);
	margin-bottom: 0px;
	border-bottom-right-radius: 0px;
	border-top-left-radius: 0px;
	border-bottom-left-radius: 0px;
}
.footer-bs .footer-brand, .footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { 
    padding:10px 25px; 
}

.footer-bs .footer-nav, .footer-bs .footer-social, .footer-bs .footer-ns { 
    border-left:solid 1px rgba(255,255,255,0.10);  
}
.footer-bs .footer-brand h2 { 
    margin:0px 0px 10px; 

}

.footer-bs .footer-brand p { 
    font-size:12px; color:rgba(255,255,255,0.70); 
}

.footer-bs .footer-nav ul.pages { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-nav ul.pages li { 
    padding:5px 0px;
}

.footer-bs .footer-nav ul.pages a { 
    color:rgba(255,255,255,1.00);
}

.footer-bs .footer-nav ul.pages a:hover { 
    color:rgba(255,255,255,0.80); text-decoration:none; 
}

.footer-bs .footer-nav h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}

.footer-bs .footer-nav ul.list { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-nav ul.list li { 
    padding:5px 0px;
}

.footer-bs .footer-nav ul.list a { 
    color:rgba(255,255,255,0.80); 
}

.footer-bs .footer-nav ul.list a:hover { 
    color:rgba(255,255,255,0.60); text-decoration:none;
}

.footer-bs .footer-social ul { 
    list-style:none; padding:0px; 
}

.footer-bs .footer-social h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
}

.footer-bs .footer-social li { 
    padding:5px 4px;
}

.footer-bs .footer-social a { 
    color:rgba(255,255,255,1.00);
}

.footer-bs .footer-social a:hover { 
    color:rgba(255,255,255,0.80); text-decoration:none; 
}

.footer-bs .footer-ns h4 {
	font-size: 11px;
	text-transform: uppercase;
	letter-spacing: 3px;
	margin-bottom:10px;
}
.footer-bs .footer-ns p { 
    font-size:12px; color:rgba(255,255,255,0.70);
}


/*SUBIR AO TOPO*/

#subirTopo {
    text-decoration: none;
    bottom: 20px;
    right: 20px;
    color: #3185c1;
    text-align: center;
    cursor: pointer;
    font-size: 34px;
    font-weight: bold;
    text-transform: uppercase;
    position: fixed;
    border: 0;
    opacity: .4;
    }
    
    #subirTopo:hover {
    opacity:1;
    }

/*********/
/*ALERTAS*/
/*********/

.alert{
    font-size: 14px;
}


/**********/
/*POPOVERS*/
/**********/

.popover{
    border: 1px solid rgba(0,0,0,.125) !important;
}

.popover-header{
    background-color: #f9f9f9 !important;
}

/***********/
/*DASHBOARD*/
/***********/

.dash_azul_escuro{
    
    font-size: 1.063rem !important;
    color: #ffffff;
    font-weight: bold;
    text-align: center;

    padding: 0.625rem !important;
    
    background-color: #366092 !important;
}

.dash_separador_claro{

  margin-top: 0.2 !important;
  margin-bottom: 0.2 !important;

  background-color: #f9f9f9 !important; 

}

.dash_azul_claro{
    
    font-size: 0.8rem !important;
    color: #ffffff;
    font-weight: bold;
    text-align: center;

    padding: 0.625rem !important;
    
    border-left: 0.625rem solid #f9f9f9 !important;
    border-right: 0.625rem solid #f9f9f9 !important;  
    
    background-color: #538dd5 !important;
}

.dash_resultado_claro{
    
    font-size: 0.875rem !important;
    color: black;
    /*font-weight: bold;*/
    text-align: center;

    padding: 0.625rem !important;

    border-left: 0.625rem solid #f9f9f9 !important;
    border-right: 0.625rem solid #f9f9f9 !important;
    
    background-color: #ffffff !important;
}

/*****************/
/*****************/
/*SITE RESPONSIVO*/
/*****************/
/*****************/

/*TAMANHO DOS BANNERS*/
.banner_padrao{

    height: 460px !important;
    object-fit: fill;

}

.carousel-caption{

    max-width: 100%;
    width:100%;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 3px;
    left: 0% !important;
    bottom: 0% !important;    

}

.p_banner{
    color: #ffffff;
    margin-bottom: 24px;
}

.bloco-site{

    width: 80%;    
    margin: 0 auto;
    text-align: center;
    padding-top: 0px;
    margin-top: 20px;
    margin-bottom: 20px;

}

.caixa_servicos{

    margin-top: 20px;
    margin-bottom: 20px;
    margin-left: 20px;
    margin-right: 20px;
    /*border-left: solid 1px #dadada;*/
    border-radius: 5px;   
    background-color: #ffffff  !important;

    -webkit-box-shadow: -3px 3px 5px rgba(50, 50, 50, 0.3);
	-moz-box-shadow:    -3px 3px 5px rgba(50, 50, 50, 0.3);
	box-shadow:         -3px 3px 5px rgba(50, 50, 50, 0.3);
}


.texto_servicos{

    width:80%; 
    margin: 0 auto; 
    margin-top: 10px; 
    margin-bottom: 10px;

}

h30{

    font-size: 50px;
    color: #b35afc;
    margin-bottom: 10px;
}

h30:hover{

    font-size: 56px;
    color: #984dd5;
    opacity: 90%;
    margin-bottom: 10px;

}

/*TITULO*/
h31{
    font-family: 'sans-serif', 'arial'; 
    font-size: 22px;
    color: #f6f6f6;
    border-bottom: 1px solid #f6f6f6;
    padding-bottom: 3px;
}

.link_servicos{

    color: #3d3d3d;
    font-size: 14px;
}

.link_servicos:hover{

    color: #3185c1;
    font-size: 15px;
    text-decoration: none;

}

.img_equipe{

    width: 160px;
    height: 160px; 
    margin: 0 auto;
    border: dotted 3px rgb(49, 133, 193, 0.7);
    /*background-color: rgb(49, 133, 193, 1);*/
    border-radius: 160px;
    margin-top: 20px;
    margin-bottom: 20px;
    padding: 2px;

}

.img_equipe:hover{

    width: 200px;
    height: 200px;
    border-radius: 200px;
    opacity: 90%;

}

/*EMAIL*/

.form_contato{
    width:60%; 
    margin: 0 auto;
}

/*BOTAO EMAIL*/

.botao_email { 
	width: 100%;
	
	padding-top: 20px;
	padding-bottom: 20px; 
    
    margin-top: 6px;
	margin-bottom: 6px; 
	
	border-style: solid;
	border-width: thin;
	border-radius: 5px;  
	border-color: #70aedc;
	
    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #70aedc;
	font-size: 14px;
	font-weight: bold;
	
	/*box-shadow: 1px 1px 1px 0px rgba(0,0,0,0.2);*/
	
}

.botao_email:hover {

    text-align: center;
    text-decoration: none;
    display: inline-block;	
	
    color: rgba(255,255,255,.99);
    background-color: #3185c1;
	font-size: 14px;
	font-weight: bold;
    background-color: #31b2d0; 
    border-color: #31b2d0;
}


/*QUALIFICACOES*/

.img_qualificacao{

width: 90px;
height: 90px; 
border: dashed 2px rgb(49, 133, 193, 0.7); 
border-radius: 80px;
margin-top: 20px;
margin-bottom: 20px;
margin-left: 20px;
padding: 2px;

}

.img_qualificacao:hover{

width: 100px;
height: 100px;
border-radius: 100px;
opacity: 90%;

}

.caixa_qualificacao_esquerda{

margin-top: 20px;
margin-bottom: 20px;
margin-left: 20px;
margin-right: 20px;
/*border-left: solid 1px #dadada;*/
border-radius: 5px;   
background-color: #fbfbfb !important;


}

.texto_qualificacao_esquerda{

    width:80%; 
    text-align: left !important;
    margin-top: 10px; 
    margin-bottom: 10px;

}

.caixa_qualificacao_direita{

margin-top: 20px;
margin-bottom: 20px;
margin-left: 20px;
margin-right: 20px;
/*border-left: solid 1px #dadada;*/
border-radius: 5px;   
background-color: #f9f9f9 !important;
border-top: solid 1px #dadada;
border-bottom: solid 1px #dadada;

padding-top: 20px;
padding-bottom: 20px;

}

.texto_qualificacao_direita{

    width:80%; 
    text-align: right !important;
    float: right !important;
    margin-top: 10px; 
    margin-bottom: 10px;

}

/*LINK SOCIAL*/
h32{
    font-family: 'sans-serif', 'arial'; 
    color: #3d3d3d !important;
    font-size:14px;
}

.navbar-brand:hover{

    opacity: 70%;
    text-decoration: none;

}

.div-social{

    color: #3d3d3d;
    text-decoration: none;
    font-size: 14px;

    padding-top: 18px !important;
    padding-bottom: 18px !important;
    padding-left: 7px !important;
    padding-right: 7px !important;
    
}

.div-social:hover{

    color: #70aedc;
    opacity: 100%;
    text-decoration: none;

}

/*WHASTSAPP*/

#whatsapp {
    text-decoration: none;
    bottom: 64px;
    left: 20px;
    color: #3185c1;
    text-align: center;
    cursor: pointer;
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
    position: fixed;
    border: 0;
    opacity: 0.6;
    }
    
#whatsapp:hover {
    opacity: 1;
}

/*INSTAGRAM*/

#instagram {
    text-decoration: none;
    bottom: 20px;
    left: 20px;
    color: #3185c1;
    text-align: center;
    cursor: pointer;
    font-size: 40px;
    font-weight: bold;
    text-transform: uppercase;
    position: fixed;
    border: 0;
    opacity: 0.6;
    }
    
#instagram:hover {
    opacity: 1;
}

/*GALERIA*/

.img_foto_pequena{

    width: 100%; 
    height: 100px; 
    object-fit:cover; 
    border-radius: 5px;
    cursor: pointer;

}

.img_foto_pequena:hover{

    height: 110px;
    cursor: pointer;

}

.modal-lg {
    max-width: 100% !important;
}

.modal-dialog{
    
    max-width: 90vw !important;
    max-height: 86vh !important;

}

.botoes_modal{

    font-size: 17px;
    color: #f6f6f6;
    margin-left: 10px;
    margin-right: 10px;
    text-decoration: none;
    cursor: pointer;

    text-shadow: 0.05em 0.05em 0.1em #3d3d3d;

}

.botoes_modal:hover{

    font-size: 17px;
    color: #70aedc;
}

.link_servicos:hover {
    cursor: pointer;
}

.texto_sobre{

    text-align: justify;
    padding-left: 40px;
    padding-right: 40px;
    font-size: 14px;
}

.menu_site{

    text-align: right !important;
    padding-bottom: 4px;
}

.link_menu_site{    
    
    font-size: 12px;
    margin-left: 6px;
    color: #3d3d3d;
}

.link_menu_site:hover{    
    
    color: #70aedc;
    text-decoration: none;

}

.link_menu_site_rodape{    
    
    font-size: 12px;
    margin-left: 6px;
    color: #3d3d3d;
}

.link_menu_site_rodape:hover{    
    
    color: #70aedc;
    text-decoration: none;

}

.logo_site{
    width: 28px;
    height: 28px;
}

.menu_largura{

    width: 100%;
    padding-top: 10px; 
    padding-bottom: 10px;
}

</style>