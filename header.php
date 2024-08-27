<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ) ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:image" content="<?php echo get_the_post_thumbnail_url(); ?>" />
    <meta property="og:title" content="<?php bloginfo( 'name' ); ?> <?php wp_title( '-' ) ?>" />
    <meta property="og:url" content="<?php bloginfo( 'url' ) ?>" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title><?php bloginfo( 'name' ); ?> <?php wp_title( '-' ); ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <header>
        <div class="container">
            <a href="<?php echo get_home_url(); ?>" class="logo" title="Ir para página inicial">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo-blog.svg" alt="Logo da Rankdone">
            </a>

            <nav>
                <?php
                    $args = array(
                        'menu' => 'menu-principal',
                        'theme_location' => 'menu-principal',
                        'container' => false,
                        'fallback_cb' => 'fallback_menu'
                    );
                    wp_nav_menu( $args );
                ?>

                <form action="<?php echo home_url(); ?>" class="search">
                    <input type="text" placeholder="Pesquise por artigo ou tema" name="s">
                    <button type="submit">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-search.svg" alt="Ícone de uma lupa" title="Pesquisar">
                    </button>
                </form>

                <button class="hamburger hamburger--collapse" id="js-btn-mobile" type="button">
                    <span class="hamburger-box">
                      <span class="hamburger-inner"></span>
                    </span>
                </button>
            </nav>
        </div>

        <div class="menu-mobile">
            <?php
                $args = array(
                    'menu' => 'menu-principal',
                    'theme_location' => 'menu-principal',
                    'container' => false
                );
                wp_nav_menu( $args );
            ?>

            <form action="<?php echo home_url(); ?>" class="search">
                <input type="text" placeholder="Pesquise por artigo ou tema" name="s">
                <button type="submit">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-search.svg" alt="Ícone de uma lupa" title="Pesquisar">
                </button>
            </form>
        </div>
    </header>