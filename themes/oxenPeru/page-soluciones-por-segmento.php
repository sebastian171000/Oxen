<!-- llamamos a la inf de la bd. Para consultar la base de datos es necesario crear este while -->
<?php get_header() ?>

<?php while (have_posts()) : the_post(); ?>

    <section class="contenedor">


        <h2 class="sub_titulo1"><?php the_title() ?></h2>



        <div class="site-segmentos">
            <?php oxen_lista_segmentos() ?>

        </div>





    <?php endwhile; ?>
    </section>
    <?php get_footer() ?>