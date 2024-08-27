<?php
get_header(); ?>

<section class="s-prev-rankdone">
    <div class="container">
        <h1>Muito além de um sistema de recrutamento e seleção (ATS)</h1>
        <h4>A mais completa plataforma de testes online para processos seletivos com uso intensivo de IA.</h4>
    </div>
</section>

    <section class="s-hero-post">
        <div class="container">
            <div class="left-container">
                <div class="title">
                    <span class="category">Blog da Rankdone</span>
                    <h2>Em destaque</h2>
                </div>
                <?php
                    $sticky_post_id = get_option( 'sticky_posts' );
					if ( $sticky_post_id ) {
						$config = array(
							'posts_per_page' => 1,
							'post__in' => $sticky_post_id,
							'ignore_sticky_posts' => 1,
							'post_status' => 'publish',
							'post_type' => 'post',
							'order' => 'DESC',
						);
					} else {
						$config = array(
							'posts_per_page' => 1,
							'post_status' => 'publish',
							'post_type' => 'post',
							'order' => 'DESC',
						);
					}

                    $query_posts = new WP_Query( $config )
                ?>
                <?php if(have_posts()) : while ($query_posts -> have_posts()) : $query_posts -> the_post(); ?>
                <a class="card-post-lg" href="<?php the_permalink(); ?>" title="Ir para o post">
                    <div class="image">
                        <?php the_post_thumbnail('full', array('class' => 'post-thumbnail')); ?>
                    </div>
                    <div class="info">
                        <div class="top-info">
                        <?php 
                            $category = get_the_category( $post->ID );

                            if ( !empty( $category ) ) {
                                $first_category = $category[0];
                                echo '<span class="category">' . $first_category->name . '</span>';
                            }
                        ?>
                            
                            <ul>
                                <li>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-calendar.svg" alt="Ícone de um calendário">
                                    <span class="date"><?php echo get_the_date( 'd, M Y' ) ?></span>
                                </li>
                
                                <li>
                                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-alarm.svg" alt="Ícone de um relógio">
                                    <span><?php echo get_reading_time(); ?></span>
                                </li>
                            </ul>
                        </div>
                        <h3><?php the_title(); ?></h3>
                    </div>
                </a>
                <?php endwhile; endif; wp_reset_query(); ?>
            </div>

            <div class="right-container">
                <h4>Mais populares</h4>
                <div class="all-populars">
                    <?php
                    $sticky_posts = get_option('sticky_posts');
                    $args = array(
                        'meta_key' => 'post_views_count',
                        'posts_per_page' => 3,
                        'post_status' => 'publish',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC',
                        'post__not_in' => $sticky_posts
                    );
                    $top_views_post = new WP_Query($args);
                    ?>
                    <?php if(have_posts()) : while ($top_views_post -> have_posts()) : $top_views_post -> the_post(); ?>
                    <div class="item-post">
                        <a class="card-post-xs" href="<?php the_permalink(); ?>">
                            <div class="image">
                                <?php the_post_thumbnail('thumb'); ?>
                            </div>
                            <div class="info">
                            <?php 
                                $category = get_the_category( $post->ID );

                                if ( !empty( $category ) ) {
                                    $first_category = $category[0];
                                    echo '<span class="category">' . $first_category->name . '</span>';
                                }
                            ?>
                                <h6 class="txt-white"><?php the_title(); ?></h6>
                                <ul>
                                    <li>
                                        <span class="date"><?php echo get_the_date( 'd, M Y' ) ?></span>
                                    </li>
                                    <li>
                                        <span><?php echo get_reading_time(); ?></span>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <?php endwhile; endif; wp_reset_query(); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="s-all-posts">
        <div class="container">
            <div class="top-info">
                <h2>Novos artigos</h2>
                <a href="<?php bloginfo( 'url' ) ?>/artigos/" title="Ver todos os posts">Explorar mais artigos</a>
            </div>
            <?php get_template_part('template-parts/components/list-posts') ?>
            <a href="<?php bloginfo( 'url' ) ?>/artigos/" class="btn-primary lg" title="Ver todos os artigos">Ver todos os artigos</a>
        </div>
    </section>

    <?php echo get_template_part( 'template-parts/content', 'rankdone' ) ?>

    <div class="modal js-modal">
        <div class="overlay">
            <div class="box">
                <button class="js-btn-close" title="Fechar">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-close.svg" alt="Ícone de fechar">
                </button>
                <div class="content">
                    <div class="form">
                        <h3>Inscreva-se para receber uma dose semanal de conteúdos grátis no seu e-mail!</h3>
                        <?php echo do_shortcode('[mautic type="form" id="5" lazy="true"]') ?>
                    </div>
                </div>
                <img class="illustration-modal" src="<?php echo get_template_directory_uri(); ?>/assets/illustra-modal.svg" alt="Illustração do modal">
            </div>
        </div>
    </div>

<?php get_footer(); ?>