<section class="s-my-articles">
    <div class="container">
        <div class="top-filters">
            <h2>Meus artigos</h2>

            <?php get_template_part('template-parts/components/filter-order'); ?>
        </div>

        <div class="all">
        <?php
            $author_id = get_the_author_meta('ID');
            $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'date';
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $order = isset($_GET['order']) ? $_GET['order'] : 'desc';
            $config = array(
                'posts_per_page' => '9',
                'post_status' => 'publish',
                'post_type' => 'post',
                'paged' => $paged,
                'orderby' => $orderby,
                'order' => $order,
                'author' => $author_id,
            );

            if ($orderby === 'views') {
                $config['meta_key'] = 'post_views_count';
                $config['orderby'] = 'meta_value_num';
            }

            $query_posts = new WP_Query( $config );
        ?>
        <?php if(have_posts()) : while ($query_posts -> have_posts()) : $query_posts -> the_post(); ?>
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
            <?php endwhile; endif; wp_reset_query(); ?>
        </div>

        <div class="pagination">
            <?php the_posts_pagination( array( 
                'mid_size' => 1,
                'prev_text' => __( '&laquo', 'textdomain' ),
                'next_text' => __( '&raquo', 'textdomain' ),
                )); 
            ?>
        </div>
    </div>
</section>