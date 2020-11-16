<?php get_header() ?>
<section class="hero-segmentos">
    <div class="contenedor contenido-clinica efecto-h1">
        <h1>
            <?php the_title() ?>

        </h1>

    </div>

</section>

<main class="contenedor site-beneficios">
    <h2><?php the_field('titulo-beneficios'); ?></h2>
    <div class="contenido-beneficios">
        <div>
            <div class="beneficio">
                <h3><?php the_field('subtitulo-beneficios1') ?></h3>
                <p><?php the_field('texto1') ?></p>
            </div>
            <div class="beneficio">
                <h3><?php the_field('subtitulo-beneficios2') ?></h3>
                <p><?php the_field('texto2') ?></p>
            </div>
            <div class="beneficio">
                <h3><?php the_field('subtitulo-beneficios3') ?></h3>
                <p><?php the_field('texto3') ?></p>
            </div>
            <div class="beneficio">
                <h3><?php the_field('subtitulo-beneficios4') ?></h3>
                <p><?php the_field('texto4') ?></p>
            </div>
            <div class="beneficio">
                <h3><?php the_field('subtitulo-beneficios5') ?></h3>
                <p><?php the_field('texto5') ?></p>
            </div>
            <div class="beneficio"> 
                <h3><?php the_field('subtitulo-beneficios6') ?></h3>
                <p><?php the_field('texto6') ?></p>
            </div>
        </div>

        <div class="imagen-beneficios">
            <img src=" <?php the_field('imagen-beneficios') ?>" alt="">
           
        </div>
    </div>

</main>
<hr class="contenedor">
<section class="contenedor site-operaciones">
    <h2><?php the_field('subtitulo-operacion') ?></h2>
    <div class="contenido-beneficios operaciones">
        <div>
        <p><?php the_field('t1-operacion1') ?></p>
        <p><?php the_field('t2-operacion1') ?></p>
        <p><?php the_field('t3-operacion1') ?></p>
        <p><?php the_field('t4-operacion1') ?></p>
        <p><?php the_field('t5-operacion1') ?></p>
        </div>
        <div class="imagen-beneficios">
            <img src=" <?php the_field('imagen-operacion1') ?>" alt="">
           
        </div>
        
    </div>
    <hr>
    <div class="contenido-beneficios operaciones" style="margin-top:4rem;">
        <div>
        <p><?php the_field('t1-operacion2') ?></p>
        <p><?php the_field('t2-operacion2') ?></p>
        <p><?php the_field('t3-operacion2') ?></p>
        <p><?php the_field('t4-operacion2') ?></p>
        <p><?php the_field('t5-operacion2') ?></p>
        </div>
        <div class="imagen-operacion2">
            <img src=" <?php the_field('imagen-operacion 2') ?>" alt="">
           
        </div>
        
    </div>
    <?php if(get_field('imagen-operacion3')): ?>
    <hr>
    <div class="contenido-beneficios operaciones" style="margin-top:4rem;">
        <div>
        <p><?php the_field('t1-operacion3') ?></p>
        <p><?php the_field('t2-operacion3') ?></p>
        <p><?php the_field('t3-operacion3') ?></p>
        <p><?php the_field('t4-operacion3') ?></p>
        <p><?php the_field('t5-operacion3') ?></p>
        </div>
        
        <div class="imagen-beneficios">
            <img src=" <?php the_field('imagen-operacion3') ?>" alt="">
           
        </div>
        
    </div>
    <?php endif ?>
    <?php if(get_field('imagen-operacion4')): ?>
    <hr>
    <div class="contenido-beneficios operaciones" style="margin-top:4rem;">
        <div>
        <p><?php the_field('t1-operacion4') ?></p>
        <p><?php the_field('t2-operacion4') ?></p>
        <p><?php the_field('t3-operacion4') ?></p>
        <p><?php the_field('t4-operacion4') ?></p>
        <p><?php the_field('t5-operacion4') ?></p>
        </div>
        
        <div class="imagen-beneficios">
            <img src=" <?php the_field('imagen-operacion4') ?>" alt="">
           
        </div>
        
    </div>
    <?php endif ?>
</section>

<?php get_footer() ?>