<?php get_header(); ?>
<main class="contenedor seccion">
    <ul class=" listado-grid blog ">
        <?php while (have_posts()) {
            the_post();
            get_template_part("template-parts/blog");
        } ?>
    </ul>
</main>


<?php get_footer(); ?>