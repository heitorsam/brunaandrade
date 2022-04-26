<?php

    //CORRIGE PROBLEMAS DE HEADER (LIMPAR O BUFFER)
    ob_start();
    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/logo/bruna_andrade_arquitetura.webp">

    <!--SEO-->
    <title>Bruna Andrade Arquitetura</title>   
    <meta name="author" content="Heitor Scalabrini">
    <meta name="keywords" content="arquiterura, arquiteta, arquiteto, arquitetura sjc, arquitetura sp, arquiteta sp, arquiteta sjc, design de interiores">
    <meta name="description" content="Projetos residenciais e comerciais personalizados presenciais ou a distância." />
    
    <!--CSS-->
    <?php 
        include 'css/style.php';
        include 'css/style_mobile.php';
    ?>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/a3000fd09d.js" crossorigin="anonymous"></script>

    <!--JQUERY-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

</head>
<body>
    <header>    

        <nav class="navbar navbar-expand-md navbar-dark bg-color" style="width: 100% !important; background-color: #ffffff;">
            <a class="navbar-brand" href="index.php" style="font-size: 15px; color: #3d3d3d; font-family: 'sans-serif', 'arial';">
                <img class="logo_site" src="img/logo/bruna_andrade_arquitetura.webp" alt="Bruna Andrade Arquitetura" class="d-inline-block align-top">
                 Bruna Andrade
            </a>

            <div class="justify-content-end menu_largura" style="padding-top: 10px; padding-bottom: 10px;">

            <div class="menu_site">
                <a class="link_menu_site" href="#sobre">Sobre</a>
                <a class="link_menu_site" href="#servicos">Serviços</a>
                <a class="link_menu_site" href="#galeria">Galeria</a>
                <a class="link_menu_site" href="#equipe">Equipe</a>
                <a class="link_menu_site" href="#contato">Contato</a>
                <a class="link_menu_site" href="#qualificacoes">Qualificações</a>

                <span class="espaco_pequeno" style="width: 10px;" ></span>
                
                <h32><a class="div-social" href="https://www.instagram.com/bruna_arqui/" target="_blank"><i class="fab fa-instagram"></i></a></h32>
                <h32><a class="div-social" href="https://www.facebook.com/arquitetabruna/" target="_blank"><i class="fab fa-facebook"></i></a></h32>
                
                <a class="div-social" href="https://api.whatsapp.com/send?phone=5512981428757&text=Ol%C3%A1!%20Gostaria%20de%20entra%20em%20contato!" target="_blank">
                <i class="fab fa-whatsapp"></i> (12) 98142-8757
                </a>            
            
            </div>         

        </div>
                

        </nav>
        
    </header>
    
    <main>

        <div class="conteudo">
            <div class="container">