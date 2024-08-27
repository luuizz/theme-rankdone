<?php get_header(); ?>

    <section class="s-hero-author">
        <div class="container">

            <div class="top-details">
                <ul class="breadcrumbs">
                    <li>
                        <a href="<?php echo get_home_url() ?>" title="Voltar para início">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-home.svg" alt="Ícone de uma casa">
                        </a>
                    </li>
                    <li>
                        <a href="#">Autores</a>
                    </li>
                    <li>
                        <span>Página atual</span>
                    </li>
                </ul>
                <div class="btns">
                    <a href="<?php echo get_home_url() ?>" title="Voltar para o início">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-arrow.svg" alt="Ícone de uma seta">
                        <span>Voltar para o início</span>
                    </a>
                </div>
            </div>

            <div class="box-main">
                <div class="image-author">
                <?php echo get_avatar(get_the_author_meta('user_email'), 215, '', 'Avatar do autor'); ?>
                </div>

                <div class="infos">
                    <div class="title">
                        <h1><?php echo get_the_author_meta('display_name') ?></h1>
                        <?php
                        
                        $author_id = get_the_author_meta('ID');

                        $post_count = count_user_posts( $author_id );

                        echo '<span class="count-posts">' . $post_count . ' posts</span>';
                        ?>

                        <h6>Escreve artigos sobre:</h6>

                        <div class="tags">
                            <?php
                            $author_id = get_the_author_meta('ID');

                            $posts = get_posts( array(
                                'author' => $author_id,
                                'numberposts' => -1,
                            ) );

                            $categories = array();

                            foreach ( $posts as $post ) {
                                $post_categories = wp_get_post_categories( $post->ID );
                                $categories = array_merge($categories, $post_categories);
                            }

                            $categories = array_unique( $categories );

                            foreach( $categories as $category_id ) {
                                if ($category_id != 1) {
                                    $category = get_category( $category_id );
                                    echo '<span class="chips">' . $category->name . '</span>';
                                }
                            }
                            
                            ?>
                        </div>
                    </div>
                    <?php if (get_the_author_meta('description')): ?>
                    <p><?php echo get_the_author_meta('description') ?></p>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part( 'template-parts/content', 'author-posts' ) ?>

<?php get_footer(); ?>
