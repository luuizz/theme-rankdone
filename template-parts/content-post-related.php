<?php
    $categories = get_the_category();
    $category_ids = array();

    foreach ($categories as $category) {
        $category_ids[] = $category->term_id;
    }

    $args = array(
        'post_type' => 'post',
        'order' => 'DESC',
        'posts_per_page' => 6,
        'category__in' => $category_ids,
        'post__not_in' => array(get_the_ID()),
    );

    $the_query = new WP_Query($args);
?>

<?php if($the_query->have_posts()) : ?>
    <section class="s-post-rel">
        <div class="container">
            <div class="left-content">
                <span class="category">Rankdone recomenda</span>
                <h2>Conteúdos para elevar o seu Recrutamento e Seleção!</h2>
                <p>Separamos os principais artigos sobre R&S para você!</p>
            </div>
            <div class="swiper-posts-rel">
                <div class="swiper-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="swiper-slide">
                            <a class="card-post-default" title="Acessar post"  href="<?php the_permalink(); ?>">
                                <div class="image">
                                    <?php the_post_thumbnail('full', array('class' => 'post-thumbnail')); ?>
                                </div>
                                <div class="info">
                                    <?php 
                                        $category = get_the_category( $post->ID );
                                        if ( !empty( $category ) ) {
                                            $first_category = $category[0];
                                            echo '<span class="category">' . $first_category->name . '</span>';
                                        }
                                    ?>
                                    <h6><?php the_title(); ?></h6>
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
                    <?php endwhile; ?>
                </div>
                <div class="navigation">
                    <div class="swiper-pagination"></div>
                    <div class="btns">
                        <button class="btn btn-prev">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/icon-arrow-left.svg" alt="">
                        </button>
                        <button class="btn btn-next">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/icon-arrow-left.svg" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif; ?>
