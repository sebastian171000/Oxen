<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oxen Perú | Te brindaremos las mejores soluciones para tu negocio!</title>
    <meta name="description" content="OXEN, cuenta con la representación de Syscall en Perú, en calidad de Distribuidor. Nuestra representada, es uno de los principales fabricantes de sistemas de localización con base en Corea y con presencia en todos los continentes.">
    <?php wp_head(); ?>
    <script>
        let contador = 0;
        window.onload = function() {
            var contenedor = document.getElementById('contenedor_carga');
            contenedor.style.visibility = 'hidden';
            
            contador++;
            console.log(contador);
            if (contador == 1) {
                document.querySelector('body').removeAttribute('id');

            }
        }
    </script>

</head>

<body <?php body_class(); ?> id="noscroll">

<div id="contenedor_carga">


        <div class="loader">
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__bar"></div>
            <div class="loader__ball"></div>

        </div>
    </div>

    <header>
        <div class="nav-principal contenedor">
             <div class="logo-barra">
             <a href="<?php echo esc_url(site_url('/')) ?>">
                 <p>OX<span>EN</span></p>

                </a>
                <i class="fas fa-bars"></i>
            </div> 
            <!-- <img src="<?php echo get_template_directory_uri()?>/img/logo_oxen.png" alt=""> -->
            <?php
            $args = array(
                'theme_location' => 'menu-principal',
                'container' => 'nav',
                'container_class' => 'navegacion-principal'
            );
            wp_nav_menu($args);
            ?>
        </div>
        <div class="hero-nav">
            <div class="nav-secundario contenedor">
                <p>OX<span>EN</span></p>

                <!-- navegacion -->
                <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-secundario'
                );
                wp_nav_menu($args);

                ?>
                <!-- fin navegacion -->
            </div>

        </div>

    </header>