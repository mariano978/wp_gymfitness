<?php
/*
* Template Name: Galeria
*/
get_header(); ?>

<main class="contenedor seccion">
    <?php
    while (have_posts()) :
        the_post();

        the_title("<h1 class='text-center'>", "</h1>");

        //obtener la galeria
        $galeria = get_post_gallery(get_the_ID(), false);
        //obtener los ids
        $galeria_imagenes_id = explode(",", $galeria["ids"]);
    ?>
        <ul class="galeria-imagenes">
            <?php
            foreach ($galeria_imagenes_id as $id) {
                //obtenemos los src
                $imagen_small = wp_get_attachment_image_src($id, "large")[0];
                $imagen_full = wp_get_attachment_image_src($id, "full")[0];
                $alt_text = get_post_meta($id, '_wp_attachment_image_alt', true);
            ?>
                <li>
                    <a href="<?php echo $imagen_full; ?>">
                        <img src="<?php echo $imagen_small; ?>" alt="<?php echo empty($alt_text) ? "Imagen Galeria" :  $alt_text; ?>">
                    </a>
                </li>

            <?php
            }
            ?>
        </ul>
    <?php
    endwhile;
    ?>
</main>


<?php get_footer(); ?>