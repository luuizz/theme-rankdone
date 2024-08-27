<?php get_template_part('template-parts/components/separator') ?>
<?php get_template_part('template-parts/content-newsletter') ?>

<footer>
        <div class="container">
            <div class="top">
                <a href="<?php bloginfo( 'url' ) ?>" title="Voltar para página inicial" class="logo-footer">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/logo-white-blog.svg" alt="Logo da Rankdone">
                </a>

                <div class="socials">
                    <span>Acompanhe nas redes</span>

                    <ul>
                        <li>
                            <a href="https://www.youtube.com/channel/UC1eZldLQ5_khaOmo_2dUF3Q" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-youtube.svg" alt="Ícone do Youtube">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.linkedin.com/company/rankdone/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-linkedin.svg" alt="Ícone do LinkedIn">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/RanKdoneCorp/" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-facebook.svg" alt="Ícone do Facebook">
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/rankdonecorp" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-instagram.svg" alt="Ícone do Instagram">
                            </a>
                        </li>
                        <li>
                            <a href="https://twitter.com/rankdone" target="_blank">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-x.svg" alt="Ícone do X/Twitter">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="main">
                <nav class="left">
                <div class="item-nav">
                    <?php
                    if (is_active_sidebar('link-1')) {
                        dynamic_sidebar('link-1');
                    } else {
                        echo '<h6>Link 1</h6>';
                        echo '<ul>';
                        echo '<li><a href="#">Default Link 1</a></li>';
                        echo '<li><a href="#">Default Link 2</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </div>

                <div class="item-nav">
                    <?php
                    if (is_active_sidebar('link-2')) {
                        dynamic_sidebar('link-2');
                    } else {
                        echo '<h6>Link 2</h6>';
                        echo '<ul>';
                        echo '<li><a href="#">Default Link 1</a></li>';
                        echo '<li><a href="#">Default Link 2</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </div>

                <div class="item-nav">
                    <?php
                    if (is_active_sidebar('link-3')) {
                        dynamic_sidebar('link-3');
                    } else {
                        echo '<h6>Link 3</h6>';
                        echo '<ul>';
                        echo '<li><a href="#">Default Link 1</a></li>';
                        echo '<li><a href="#">Default Link 2</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </div>

                <div class="item-nav">
                    <?php
                    if (is_active_sidebar('link-4')) {
                        dynamic_sidebar('link-4');
                    } else {
                        echo '<h6>Link 4</h6>';
                        echo '<ul>';
                        echo '<li><a href="#">Default Link 1</a></li>';
                        echo '<li><a href="#">Default Link 2</a></li>';
                        echo '</ul>';
                    }
                    ?>
                </div>
                </nav>

                <a href="https://api.whatsapp.com/send?phone=5511964290501&text=rankdone" class="btn-contact" target="_blank">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-whatsapp.svg" alt="Ícone do WhatsApp">
                    <strong>Fale agora com um de <br /> nossos especialistas</strong>
                </a>
            </div>

            <div class="bottom">
                <p><span id="current-year">©<?php echo date("Y"); ?></span> <?php bloginfo( 'name' ) ?> - Todos os direitos reservados</p>

                <p>Desenvolvido por <a href="https://luizricardodsgn.com.br/" title="Acessar site" target="_blank">Luiz Ricardo Design</a></p>
            </div>
        </div>

    </footer>
    <?php wp_footer() ?>
</body>
</html>