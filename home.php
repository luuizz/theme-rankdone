<?php 

get_header(); ?>

<section class="s-categories">
    <div class="container">
        <div class="top-area">
            <h4>Navegue por categorias</h4>
            <div class="arrows">
                <div class="prev-filter">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-arrow-filter-left-active.svg" alt="Ícone de seta para direita">
                </div>
                <div class="next-filter">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/icon-arrow-filter-left-active.svg" alt="Ícone de seta para esquerda">
                </div>
            </div>
        </div>
        <?php  get_template_part('template-parts/components/filters-category') ?>
        <?php get_template_part('template-parts/content', 'articles-post', ['title' => 'Todos os artigos']) ?>
    </div>
</section>

<?php get_footer(); ?>