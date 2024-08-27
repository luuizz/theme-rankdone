<div class="all">
    <?php
        $sticky_posts = get_option('sticky_posts');
        $config = array(
            'posts_per_page' => '9',
            'post_type' => 'post',
            'order' => 'DESC',
            'status' => 'publish',
            'post__not_in' => $sticky_posts
        );

        $query_posts = new WP_Query( $config )
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