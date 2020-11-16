<footer class="site-footer ">
    <div class="contenedor">


        <div class="contenido-footer">
            <?php
            $args = array(
                'container' => 'nav',
                'container_class' => 'menu-principal-footer'
            );
            wp_nav_menu($args);
            ?>
            <?php while (have_posts()) : the_post(); ?>
                <p style="color: white;">todos los derechos reservados. Oxen <?php the_date('Y') ?>.</p>
            <?php endwhile; ?>
        </div>
    </div>
</footer>




</body>
<?php wp_footer() ?>

</html>