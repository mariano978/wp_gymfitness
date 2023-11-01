<?php get_header(); ?>
<main class="contenedor seccion">
<h2 class="text-center"><?php single_cat_title(); ?></h2>
    <ul class=" listado-grid blog ">
        <?php while (have_posts()) {
            the_post();
            get_template_part("template-parts/blog");
        } ?>
    </ul>
</main>


<?php get_footer(); ?>