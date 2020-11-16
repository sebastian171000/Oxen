<!-- llamamos a la inf de la bd. Para consultar la base de datos es necesario crear este while -->
<?php get_header() ?>


<main class="hero-inicio">
    <div class="contenedor contenido-inicio efecto-h1">
        <h2><?php the_field('frase') ?></h2>
        <h1><?php the_field('texto-hero') ?></h1>
    </div>
</main>
<div class="hero-inicio-descripcion">
    <div class="contenedor">
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; ?>
    </div>
</div>
<section class="contenedor " >
    <h2 class="sub_titulo1"><?php the_field('sub_titulo1') ?></h2>
    <div class="site-segmentos">
        <?php oxen_lista_segmentos() ?>
    </div>
</section>
<hr class="contenedor" style="margin: 4rem auto">

<section class="contenedor">
    <h2 class="sub_titulo1"><?php the_field('sub_titulo2') ?></h2>
    <div class="site-ofertas">
        <?php oxen_lista_oferta() ?>
    </div>
</section>
<?php get_footer() ?>