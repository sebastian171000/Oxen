<!-- llamamos a la inf de la bd. Para consultar la base de datos es necesario crear este while -->
<?php get_header() ?>

<main class="contenedor">
<?php while (have_posts()) : the_post();?> 
<div class="efecto-h1 h1-contacto">
<h1><?php the_title() ?></h1>
</div>
<p><?php the_content() ?></p>


<?php endwhile;?>
</main>
<?php get_footer() ?>

