<?php get_header(); ?>

<section class="s-404">
    <div class="container">
        <div class="left">
            <h1><span>Ops!</span> Não encontramos a página que você estava buscando.</h1>
            <p>Esta página não está disponível, o link é inválido ou foi removido. Mas você pode continuar navegando e encontrar o que procura!</p>
            <a href="<?php echo get_home_url(); ?>" class="btn-primary lg" title="Voltar para Página Principal">Voltar para página principal</a>
        </div>
        <div class="right">
            <div class="image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/404-1.webp" alt="Imagem 404">
            </div>
        </div>
    </div>
</section>

<?php get_template_part('template-parts/content', 'rankdone') ?>

<?php get_footer() ?>