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
        <ul class="galeria-imagenes" id="gallery">
            <?php
            foreach ($galeria_imagenes_id as $id) {
                //obtenemos los src
                $imagen_small = wp_get_attachment_image_src($id, "large");
                $imagen_full = wp_get_attachment_image_src($id, "full");
                $alt_text = get_post_meta($id, '_wp_attachment_image_alt', true);
             
                $width = $imagen_full[1];
                $height = $imagen_full[2] ;
            ?>

                <li>
                    <a href="<?php echo $imagen_full[0]; ?>" data-pswp-width="<?php echo $width; ?>" data-pswp-height="<?php echo $height; ?>" target="_blank">
                        <img src="<?php echo $imagen_small[0]; ?>" alt="<?php echo empty($alt_text) ? "Imagen Galeria" :  $alt_text; ?>">
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