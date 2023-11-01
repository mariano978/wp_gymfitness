<!-- Este es el estilo para las paginas mas generales como nosotros, blog -->
<?php get_header(); ?>
<section class="bienvenida seccion contenedor">
    <h2 class="text-center"><?php the_field("encabezado"); ?></h2>
    <p class="text-center"><?php the_field("texto_bienvenida"); ?></p>
</section>
<section class="areas">
    <?php for ($i = 1; $i <= 4; $i++) : ?>
        <div class="area">
            <?php $area_i =  get_field("area_" . $i); ?>
            <p> <?php echo esc_html($area_i["texto"]); ?></p>

            <img src="<?php echo esc_attr($area_i["imagen"]["sizes"]["medium_large"])  ?>" alt="<?php echo esc_attr($area_i["imagen"]["alt"])  ?>">
        </div>
    <?php endfor; ?>
</section>
<main class="contenedor seccion inicio">
    <h2 class="text-center">Nuestras Clases</h2>
    <?php gymfitness_listar_clases(4); ?>
    <div class="contenedor-boton">
        <a class="boton boton-primario" href="<?php echo esc_url(get_permalink(get_page_by_path("clases"))); ?>">Ver Todas las Clases</a>
    </div>
</main>

<section class="contenedor seccion">
    <?php gymfitness_instructores(); ?>
</section>

<section class="section-testomoniales">
    <h2 class="text-center">Testimoniales</h2>
    <?php gymfitness_testimoniales(); ?>
</section>



</div>

<?php get_footer(); ?>