<?php
    get_header();
?>
    <main class="seccion contenedor">
        <ul class="listado-grid">
            <?php
                while( have_posts() ){ //es una variante a la otra forma
                    the_post();
                    get_template_part('template-parts/blog');
                }
            ?>
        </ul>
    </main>

<?php
    get_footer();
?>