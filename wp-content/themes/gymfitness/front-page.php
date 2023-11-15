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

    <!-- seccion de instructores -->
    <section class="contenedor seccion">
        <h2 class="text-center text-primary">Nuestros Instructores</h2>
        <p class="text-center">Instructores profesionales que te ayudaran a lograr tus objetivos</p>
        <?php gymfitness_instructores() ?>
    </section>

    <!-- seccion de testimoniales -->
    <section class="testimoniales">
        <h2 class="text-center text-blanco">Testimoniales</h2>

        <div class="contenedor-testimoniales swiper">
            <?php gymfitness_testimoniales(); ?>
        </div>
    </section>

<?php
    get_footer();
?>