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
    <h2 class="text-center text-primary">Nuestras Clases</h2>
    <?php gymfitness_lista_clases(4) ?>

    <div class="contenedor-boton">
        <a href="<?php echo esc_url(get_permalink(get_page_by_path('clases'))); ?>" class="boton boton-primario">
            Ver todas las clases
        </a>
    </div>
</main>

<?php
    get_footer();
?>