<?php

//includes
require get_template_directory() . "/includes/widgets.php";
require get_template_directory() . "/includes/queries.php";

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
{   //css
    wp_enqueue_style("normalize", "https://necolas.github.io/normalize.css/8.0.1/normalize.css", [], "8.0.1");
    wp_enqueue_style("photoswipe", get_template_directory_uri() . '/css/photoswipe.css', [], "1.0.0");
    wp_enqueue_style("style", get_stylesheet_uri(), ["normalize"], "1.0.0");
    wp_enqueue_style("font-awesome", "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css", [], "1.0.0");

    //js
    if (is_page("galeria")) {
        wp_enqueue_script("photoswipe", get_template_directory_uri() . '/js/photoswipe.esm.min.js', [], "5.4.2", true);
        wp_enqueue_script("photoswipe-lightbox", get_template_directory_uri() . '/js/photoswipe-lightbox.esm.min.js', [], "5.4.2", true);
        wp_enqueue_script("gallery", get_template_directory_uri() . '/js/gallery.js', ["photoswipe-lightbox", "photoswipe"], "1.0.0", true);
    }
}

add_action("wp_enqueue_scripts", "gymfitness_scripts_styles");

//cargar script como modulos
function add_module_type_to_photoswipe_lightbox($tag, $handle)
{
    if ($handle === 'photoswipe-lightbox') {
        $tag = str_replace('<script', '<script type="module"', $tag);
    }
    if ($handle === 'photoswipe') {
        $tag = str_replace('<script', '<script type="module"', $tag);
    }
    if ($handle === 'gallery') {
        $tag = str_replace('<script', '<script type="module"', $tag);
    }
    return $tag;
}

add_filter('script_loader_tag', 'add_module_type_to_photoswipe_lightbox', 10, 2);


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


//crear shortcode

function gymfitness_ubicacion_shortcode()
{
?>
    <div class="mapa">
        <?php if (is_page("contacto")) {
            the_field("ubicacion");
        } ?>
    </div>
<?php
}

add_shortcode("gymfitness_ubicacion", "gymfitness_ubicacion_shortcode");


function mailtrap($phpmailer) {
    $phpmailer->isSMTP();
    $phpmailer->Host = 'sandbox.smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = 'd8ce14d4a68471';
    $phpmailer->Password = '6a09e5b908f5f2';
  }
  
  add_action('phpmailer_init', 'mailtrap');