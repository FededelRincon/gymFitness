<?php
    get_header();
?>

    <section class="bienvenida seccion contenedor text-center">
        <h2 class="text-primary">
            <?php the_field('encabezado_bienvenida'); ?>
        </h2>
        <p><?php the_field('texto_bienvenida'); ?></p>
    </section>

    <section class="areas">
        <!-- imagen 1 -->
        <div class="area">
            <?php
                $area1 = get_field('area_1'); 
                $imagen = $area1['imagen1']['sizes']['medium_large'];
                $texto = $area1['texto1'];
            ?>
            <img src="<?php echo esc_attr( $imagen ); ?>" alt="<?php echo esc_attr( $texto) ?>" />
            <p> <?php echo esc_html( $texto ) ?> </p>
        </div>

        <!-- imagen 2 -->
        <div class="area">
            <?php
                $area2 = get_field('area_2'); 
                $imagen = $area2['imagen2']['sizes']['medium_large'];
                $texto = $area2['texto2'];
            ?>
            <img src="<?php echo esc_attr( $imagen ); ?>" alt="<?php echo esc_attr( $texto) ?>" />
            <p> <?php echo esc_html( $texto ) ?> </p>
        </div>

        <!-- imagen 3 -->
        <div class="area">
            <?php
                $area3 = get_field('area_3'); 
                $imagen = $area3['imagen3']['sizes']['medium_large'];
                $texto = $area3['texto3'];
            ?>
            <img src="<?php echo esc_attr( $imagen ); ?>" alt="<?php echo esc_attr( $texto) ?>" />
            <p> <?php echo esc_html( $texto ) ?> </p>
        </div>

        <!-- imagen 4 -->
        <div class="area">
            <?php
                $area4 = get_field('area_4'); 
                $imagen = $area4['imagen4']['sizes']['medium_large'];
                $texto = $area4['texto4'];
            ?>
            <img src="<?php echo esc_attr( $imagen ); ?>" alt="<?php echo esc_attr( $texto) ?>" />
            <p> <?php echo esc_html( $texto ) ?> </p>
        </div>





    </section>

    <main class="contenedor seccion">
    </main>

<?php
    get_footer();
?>