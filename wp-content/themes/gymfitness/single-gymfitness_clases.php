<!-- Este es el estilo para las entradas del tipo de post "gymfitness_clases" osea las clases -->
<?php get_header(); ?>

<main class="contenedor seccion con-sidebar">
    <section class="contenido-principal">
        <?php
        //esto imprime lo de siempre (titulo, contenido, imagen destacada)
        get_template_part("template-parts/clase");
        ?>
    </section>
    <?php
    //cuando se usa una funcion get_x lo que se pase como nombre ej "get_sidebar("clases")"
    //este buscara el archivo que se llame en este caso sidebar-clases.php,
    //igual para los otros get
    get_sidebar("clases"); ?>
</main>
</div>

<?php get_footer(); ?>