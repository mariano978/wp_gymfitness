<?php

function gymfitness_listar_clases($cantidad = -1)
{
?>
    <ul class="listado-grid ">
        <?php
        $args = [
            "post_type" => "gymfitness_clases",
            "posts_per_page" => $cantidad
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
<?php
}

function gymfitness_instructores()
{
?>
    <ul class="listado-grid instructores">
        <?php
        $args = [
            "post_type" => "instructores"
        ];
        $instructores = new WP_Query($args);
        while ($instructores->have_posts()) {
            $instructores->the_post();
        ?>
            <li class="card">
                <?php the_post_thumbnail("large"); ?>
                <div class="contenido-instructor">
                    <p class="instructor-nombre"><?php the_title(); ?></p>
                    <div class="instructor-bio"> <?php the_content(); ?></div>
                    <div class="especialidades">
                        <?php $especialidades =  get_field("especialidad"); ?>
                        <?php foreach ($especialidades as $especialidad) : ?>
                            <span><?php echo $especialidad; ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>

            </li>
        <?php
        }
        wp_reset_postdata();
        ?>

    </ul>
<?php
}

function gymfitness_testimoniales()
{
?>
    <ul class="listado-grid testimoniales">
        <?php
        $args = [
            "post_type" => "testimoniales"
        ];
        $instructores = new WP_Query($args);
        while ($instructores->have_posts()) {
            $instructores->the_post();
        ?>

            <li class="testimonial text-center">
                <div class="testimonial-imagen">
                    <div class="testimonial-ball-1"></div>
                    <div class="testimonial-ball-2"></div>
                    <?php the_post_thumbnail("thumbnail") ?>
                </div>

                <div class="testimonial-text">

                    <blockquote>
                        <i class="fa-solid fa-quote-left"></i>
                        <?php the_content(); ?>
                        <i class="fa-solid fa-quote-right"></i>
                    </blockquote>
                    <div class="testimonal-author">
                        <?php the_post_thumbnail("thumbnail") ?>
                        <p class="testimonial-nombre"><?php the_title(); ?></p>
                    </div>

                </div>
            </li>


        <?php
        }
        wp_reset_postdata();
        ?>

    </ul>
<?php
}


?>