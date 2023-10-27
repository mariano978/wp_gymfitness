<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body>
    <div class="ball_1"></div>
    <div class="ball_2"></div>
    <div class="ball_3"></div>
    <div class="glass_container">
        <header class="header">
            <div class="contenedor barra-navegacion">
                <div class="logo">
                    <!-- get_template_directory_uri() retorna la ubicacion raiz del tema en el que estamos -->
                    <img src="<?php echo get_template_directory_uri(); ?>/img/logo_black.png" alt="logotipo">
                </div>
                <?php
                //theme_location indica que menu de todos queremos renderizar
                $args = [
                    "theme_location" => "menu-principal",
                    "container" => "nav",
                    "container_class" => "menu-principal"
                ];

                wp_nav_menu($args); ?>
            </div>
        </header>