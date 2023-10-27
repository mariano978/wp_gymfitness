<?php
while (have_posts()) :
    the_post();

    the_title("<h1 class='text-center'>", "</h1>");

    if (has_post_thumbnail()) {
        //si hay imagen la mostramos
        the_post_thumbnail("full", ["class" => "imagen-destacada"]);
    }

?>
    <h4 class="informacion-clase"><?php the_field("dias_clase"); //funcion de ACF 
        ?> - <?php the_field("hora_inicio"); ?> a <?php the_field("hora_fin"); ?></h4>
<?php

    the_content();
endwhile;
