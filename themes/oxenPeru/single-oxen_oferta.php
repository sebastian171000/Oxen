<?php get_header() ?>
<section class="contenedor site-detalle" >
<div class="efecto-h1">
        <h1><?php the_title() ?></h1>

</div>


    <div class="contenido-detalle">
        <div>
            <div>
                <h3><?php the_field('sub_titulo_detalle') ?></h3>
                <div class="detalles">
                    <?php if (get_field('detalle1')) : ?>
                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>
                            <p><?php the_field('detalle1') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle2')) : ?>
                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle2') ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle3')) : ?>

                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle3') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle4')) : ?>

                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle4') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle5')) : ?>

                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle5') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle6')) : ?>

                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle6') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle7')) : ?>

                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle7') ?></p>

                        </div>
                    <?php endif; ?>
                    <?php if (get_field('detalle8')) : ?>


                        <div>
                            <i class="fas <?php the_field('icono1') ?>"></i>

                            <p><?php the_field('detalle8') ?></p>

                        </div>
                    <?php endif; ?>



                </div>

            </div>
        </div>


        <div class="swiper-container">

            <div class="swiper-wrapper">
                <?php if (get_field('imagen-detalle1')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle1') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle2')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle2') ?>" alt=""></div>
                <?php endif; ?>

                <?php if (get_field('imagen-detalle3')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle3') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle4')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle4') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle5')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle5') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle6')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle6') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle7')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle7') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle8')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle8') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle9')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle9') ?>" alt=""></div>
                <?php endif; ?>
                <?php if (get_field('imagen-detalle10')) : ?>
                    <div class="swiper-slide"><img src=" <?php the_field('imagen-detalle10') ?>" alt=""></div>
                <?php endif; ?>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>
<hr class="contenedor" style="margin: 4rem auto">
<main class="contenedor">
    <h2><?php the_field('sub_titulo') ?></h2>
    <div class="beneficios-oferta">
        <div class="beneficio-ofer">
            <h3><?php the_field('beneficio1') ?></h3>
            <p><?php  the_field('texto_beneficio1') ?></p>
        </div>
        <div class="beneficio-ofer">
            <h3><?php the_field('beneficio2') ?></h3>
            <p><?php  the_field('texto_beneficio2') ?></p>
        </div>
        <div class="beneficio-ofer">
            <h3><?php the_field('beneficio3') ?></h3>
            <p><?php  the_field('texto_beneficio3') ?></p>
        </div>
        <div class="beneficio-ofer">
            <h3><?php the_field('beneficio4') ?></h3>
            <p><?php  the_field('texto_beneficio4') ?></p>
        </div>
        <div class="beneficio-ofer">
            <h3><?php the_field('beneficio5') ?></h3>
            <p><?php  the_field('texto_beneficio5') ?></p>
        </div> 
    </div>
</main>
<hr class="contenedor">
<section class="contenedor">

    <h2><?php the_field('subtitulo_funcionamiento') ?></h2>
    <div class="contenido-funcionamiento">

        
                
        <div class="detalles">
            <?php if (get_field('funcionamiento1')) : ?>
                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>
                    <p><?php the_field('funcionamiento1') ?></p>

                </div>
            <?php endif; ?>
            <?php if (get_field('funcionamiento2')) : ?>
                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>

                    <p><?php the_field('funcionamiento2') ?></p>
                </div>
            <?php endif; ?>
            <?php if (get_field('funcionamiento3')) : ?>

                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>

                    <p><?php the_field('funcionamiento3') ?></p>

                </div>
            <?php endif; ?>
            <?php if (get_field('funcionamiento4')) : ?>

                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>

                    <p><?php the_field('funcionamiento4') ?></p>

                </div>
            <?php endif; ?>
            <?php if (get_field('funcionamiento5')) : ?>

                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>

                    <p><?php the_field('funcionamiento5') ?></p>

                </div>
            <?php endif; ?>
            <?php if (get_field('funcionamiento6')) : ?>

                <div>
                    <i class="fas <?php the_field('icono1') ?>"></i>

                    <p><?php the_field('funcionamiento6') ?></p>

                </div>
            <?php endif; ?>
            



        </div>
        <div class="imagen-beneficios funcionamiento">
            <img src=" <?php the_field('imagen_funcionamiento') ?>" alt="">
           
        </div>
    </div>
</section>
<hr class="contenedor">
<section class="contenedor site-aplicaciones">
        <h2><?php the_field('subtitulo_aplicaciones') ?></h2>
        <img src="<?php the_field('imagen-aplicaciones') ?>" alt="">
</section>
<?php get_footer() ?>