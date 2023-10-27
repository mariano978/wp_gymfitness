<?php
/*
* Template Name: Listado de clases
*/
get_header(); ?>

<main class="contenedor seccion">
    <?php
    get_template_part("template-parts/pagina");
    ?>
    <ul class="listado-grid">
        <?php
        $args = [
            "post_type" => "gymfitness_clases"
        ];
        $clases = new WP_Query($args);
        while ($clases->have_posts()) {
            $clases->the_post();
        ?>
            <li class="card">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
                <div class="contenido">
                    <a href="<?php the_permalink(); ?>">
                        <h3> <?php echo the_title(); ?></h3>
                    </a>
                    <p><?php the_field("dias_clase"); //funcion de ACF 
                        ?> - <?php the_field("hora_inicio"); ?> a <?php the_field("hora_fin"); ?></p>
                </div>
            </li>
        <?php
        }
        wp_reset_postdata();
        ?>

    </ul>

</main>


<?php get_footer(); ?>