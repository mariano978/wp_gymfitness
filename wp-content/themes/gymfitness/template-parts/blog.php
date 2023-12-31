<li class="card">
    <?php the_category(); ?>
    <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
    </a>
    <div class="contenido">
        <a href="<?php the_permalink(); ?>">
            <h3> <?php echo the_title(); ?></h3>
        </a>
        <p class="meta">
            <span>Por: </span>
            <a href="<?php echo get_author_posts_url(get_the_author_meta("ID")); ?>">
                <?php echo get_the_author_meta("display_name"); ?>
            </a>
        </p>
        <p class="meta">
            <span>Publicado: </span>
            <?php the_time(get_option("date_format")); ?>
        </p>
    </div>
</li>