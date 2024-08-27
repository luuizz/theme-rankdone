<?php get_header(); ?>

<?php 
$total_posts = $wp_query->found_posts;

?>

    <?php
        global $query_string;
        $query_args = explode("&", $query_string);
        $search_query = array();

        foreach($query_args as $key => $string) {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        }
        $the_query = new WP_Query($search_query);
        if ( $the_query->have_posts() ) : 
    ?>
    <section class="s-search-results">
        <div class="container">
        <div class="top-area">
            <h4>Resultados de sua busca</h4>
            <?php
            if (have_posts()) {
                echo '<p>Nós encontramos ' . $total_posts . ' artigos para "' . esc_html(get_search_query('s')) . '"</p>';
            } else {
                echo '<p>Nenhum resultado encontrado para "' . esc_html(get_search_query('s')) . '"</p>';
            }
            ?>
        </div>

            <div class="main-area">
                <div class="top-filters">
                    <h2><?php echo $total_posts; ?> Artigos</h2>
    
                </div>
                <div class="all">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
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
                    <?php endwhile; ?>
                </div>
                <div class="pagination">
                <?php the_posts_pagination( array( 
                        'mid_size' => 2,
                        'prev_text' => __( '&laquo', 'textdomain' ),
                        'next_text' => __( '&raquo', 'textdomain' ),
                        )); 
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>

                <?php else : ?>

                    <?php echo get_template_part('template-parts/content', 'search-notfound'); ?>

                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/content', 'rankdone') ?>

<?php get_footer(); ?>