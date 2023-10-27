<?php

//includes
require get_template_directory() . "/includes/widgets.php";

function gymfitness_setup()
{
    //imagenes destacadas
    add_theme_support("post-thumbnails");
    //titulos para SEO
    add_theme_support("title-tag");
}
//se ejecuta cuando se activa un tema
add_action("after_setup_theme", "gymfitness_setup");

function gymfitness_menus()
{
    register_nav_menus([
        "menu-principal" => __("Menu principal", "gymfitness"),
        //aqui van mas menus si lo quieres 
    ]);
}
//cuando worpress se inicializa ejecuta esta funcion
add_action("init", "gymfitness_menus"); //esto es un hook

//add_filter() es para modificar la informacion
//add_action() es para agregar informacion


function gymfitness_scripts_styles()
{
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", [], "8.0.1");
    wp_enqueue_style("style", get_stylesheet_uri(), ["normalize"], "1.0.0");
}

add_action("wp_enqueue_scripts", "gymfitness_scripts_styles");

//Definir zona de widgets
function gymfitness_widgets()
{
    register_sidebar([
        "name" => "Sidebar 1",
        "id" => "sidebar_1",
        "befor_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "befor_title" => "<h3 class='text-center'>",
        "after_title" => "</h3>"
    ]);
    register_sidebar([
        "name" => "Sidebar 2",
        "id" => "sidebar_2",
        "befor_widget" => "<div class='widget'>",
        "after_widget" => "</div>",
        "befor_title" => "<h3 class='text-center'>",
        "after_title" => "</h3>"
    ]);
}
add_action("widgets_init", "gymfitness_widgets");

function debuguear($valor)
{
    echo "<pre>";
    var_dump($valor);
    echo "</pre>";
}
