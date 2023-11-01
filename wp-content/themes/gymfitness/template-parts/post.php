<?php
while (have_posts()) :
    the_post();

    the_title("<h1 class='text-center'>", "</h1>");

    if (has_post_thumbnail()) {
        //si hay imagen la mostramos
        the_post_thumbnail("full", ["class" => "imagen-destacada"]);
    }

?>
    <div class="meta-info">
        
        <div class="categorias">
            <p class="meta">
                <span>Categoria/s: </span>
            </p>
            <?php the_category(); ?>
        </div>
        <p class="meta">
            <span>Por: </span>
            <a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>">
                <?php echo get_the_author_meta("display_name"); ?>
            </a>
        </p>
        <p class="meta">
            <span>Publicado: </span>
            <?php the_time(get_option("date_format")); ?>
        </p>
    </div>
<?php

    the_content();
endwhile;
