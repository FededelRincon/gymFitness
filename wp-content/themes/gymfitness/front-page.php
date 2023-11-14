<?php
    get_header();
?>

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida'); ?>
        </h2>
        <p><?php the_field('texto_bienvenida'); ?></p>
    </section>

    <!-- seccion de bienvenida -->
    <?php
        get_template_part('template-parts/bienvenida');
    ?>

    <main class="contenedor seccion">
    </main>

<?php
    get_footer();
?>