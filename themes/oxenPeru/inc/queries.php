<?php
function oxen_lista_segmentos()
{
    $args = array(
        'post_type' => 'oxen_segmentos',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
    );
    $segmentos = new WP_Query($args);
    while ($segmentos->have_posts()) : $segmentos->the_post(); ?>
        <div class="segmento ">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('mediano'); ?>
                <h3><?php the_title() ?></h3>
            </a>
            <?php the_content() ?>
        </div>
<?php endwhile;
    wp_reset_postdata();
} ?>
<?php
function oxen_lista_oferta()
{
    $args = array(
        'post_type' => 'oxen_oferta',
        'posts_per_page' => 10,
        'orderby' => 'menu_order',
    );
    $oferta = new WP_Query($args);
    while ($oferta->have_posts()) : $oferta->the_post(); ?>
        <div class="oferta <?php echo 'of' . get_the_ID()  ?>">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('blog'); ?>
                <h3><?php the_title() ?></h3>
            </a>
            <?php the_content() ?>
        </div>
<?php endwhile;
    wp_reset_postdata();
} ?>