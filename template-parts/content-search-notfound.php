<div class="empty-search">
    <div class="container">
        <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icon-not-found-1.svg" alt="Ícone de simbolizando a pesquisa não encontrada">
        </div>
        <h2>Nenhum resultado encontrado para <strong>"<?php echo esc_html(get_search_query('s')) ?>"</strong></h2>
        <p>Não foram encontrados nenhum resultado com a palavra buscada. Tente novamente utilizando sinônimos ou termos mais abrangentes</p>
        <a class="btn-primary lg" href="<?php echo get_home_url(); ?>">Voltar para página principal</a>
    </div>
</div>