<?php

function gymfitness_lista_clases($cantidad = -1) {
    // si la cantidad es -1 me va a tomar todo lo posible
    ?>

    <ul class="listado-grid">
        <?php
            $args = array(
                'post_type' => 'gymfitness_clases',
                'posts_per_page' => $cantidad
        );

        $clases = new WP_Query($args);

        while ($clases->have_posts()) {
            $clases->the_post();
        ?>

            <li class="card">
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail() ?>
                    <div class="contenido">
                        <h3><?php the_title() ?></h3>

                        <?php
                            $hora_inicio = get_field('hora_inicio');
                            $hora_fin = get_field('hora_fin');
                        ?>
                        <p>
                            <?php the_field('dias_clase'); ?> -
                            <?php echo $hora_inicio . " a " . $hora_fin; ?>
                        </p>
                    </div>
                </a>
            </li>

        <?php
        }
            wp_reset_postdata();
        ?>
    </ul>

    <?php
}