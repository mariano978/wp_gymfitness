<?php get_header(); ?>

<main class="contenedor seccion">
    <?php
    get_template_part("template-parts/pagina");
    ?>
</main>
</div>

<script>
    document.addEventListener('acf-osm-map-created', function(e) {
        const map = e.detail.map;
        map.eachLayer(function(layer) {
            layer.openPopup(); // optionally open this popup
        });
    });
</script>
<?php get_footer(); ?>