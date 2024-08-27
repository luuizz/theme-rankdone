<?php 
get_header(); 
setPostViews(get_the_ID()); 


?>

<?php if( have_posts()) : while ( have_posts()) : the_post(); ?>
<section class="s-post-details">
    <div class="container">
        <div class="top-details">
            <ul class="breadcrumbs">
                <li>
                    <a href="<?php echo get_home_url() ?>" title="Voltar para início">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-home.svg" alt="Ícone de uma casa">
                    </a>
                </li>
                <li>
                    <?php 
                        $category = get_the_category( $post->ID );

                        if ( !empty( $category ) ) {
                            $first_category = $category[0];
                            echo '<a href="' .get_category_link($category[0]). '">' . $first_category->name . '</a>';
                        }
                    ?>
                </li>
                <li>
                    <span>Página atual</span>
                </li>
            </ul>
            <div class="btns">
                <a href="<?php echo get_home_url() ?>" title="Voltar para o início">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-arrow.svg" alt="Ícone de uma seta">
                    <span>Voltar para o início</span>
                </a>
            </div>
        </div>

        <div class="main">
            <div class="left-title">
                <h1><?php the_title(); ?></h1>
                <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" class="author">
                    <div class="avatar-author">
                        <?php echo get_avatar(get_the_author_meta('user_email'), 32, '', 'Avatar do autor'); ?>
                    </div>
                    <h6><?php echo get_the_author_meta('display_name'); ?></h6>
                </a>

                <ul>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-calendar-purple.svg" alt="Ícone de um calendário">
                        <h6 class="date"><?php echo get_the_date('j, M, Y'); ?></h6>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-time.svg" alt="Ícone de um relógio">
                        <h6><?php echo get_reading_time(); ?></h6>
                    </li>
                    <li>
                        <img src="<?php echo get_template_directory_uri() ?>/assets/icon-views.svg" alt="Ícone de uma visualização">
                        <h6><?php echo getPostViews(get_the_ID()); ?> Views</h6>
                    </li>
                </ul>
            </div>
            <div class="right-container">
                <div class="image">
                    <?php the_post_thumbnail('full', array('class' => 'post-thumbnail')); ?>
                </div>
            </div>
        </div>
    </div>
    </section>

<section class="s-content-post">
    <div class="container">
        <?php get_template_part('template-parts/components/sidebar-topics') ?>
        <div class="right-content">
            <div class="content">
                <?php the_content(); ?>
            </div>

        <?php get_template_part('template-parts/components/social-share') ?>
        </div>
    </div>
</section>
<?php endwhile; else: endif; ?>



<?php get_template_part('template-parts/content', 'post-related') ?>

<?php get_footer() ?>