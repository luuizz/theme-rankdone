<?php
$title = $args['title'];
?>

<div class="main">
    <div class="top-filters">
        <h2><?php echo $title; ?></h2>
        <?php get_template_part( 'template-parts/components/filter-order' ); ?>
    </div>

    <div class="all">
        
    <?php
        $category = get_queried_object();
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $orderby = isset($_GET['orderby']) ? $_GET['orderby'] : 'date';
        $order = isset($_GET['order']) ? $_GET['order'] : 'desc';
        $category = get_queried_object();
        $sticky_posts = get_option('sticky_posts');
        $config = array(
            'post_status' => 'publish',
            'posts_per_page' => '9',
            'orderby' => $orderby,
            'post_type' => 'post',
            'paged' => $paged,
            'post__not_in' => $sticky_posts,
            'order' => $order,
            
            'cat' => $category->term_id
        );

        if ($orderby === 'views') {
            $config['meta_key'] = 'post_views_count';
            $config['orderby'] = 'meta_value_num';
        }

        $the_query = new WP_Query( $config )
    ?>
    <?php if($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
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
        <?php 
        wp_reset_postdata();
        endwhile; else : endif ?>
    </div>

    <div class="pagination">
        <?php the_posts_pagination( array( 
            'mid_size' => 2,
            'prev_text' => __( '&laquo', 'textdomain' ),
            'next_text' => __( '&raquo', 'textdomain' ),
            )); 
            ?>
    </div>
</div>