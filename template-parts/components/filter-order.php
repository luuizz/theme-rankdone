<div class="order">
    <span>Ordenar por</span>
    <div class="select-custom js-dropdown-filter">
        <div class="item-selected">
            <span>Selecione</span>
            <img src="<?php echo get_template_directory_uri() ?>/assets/icon-selected.svg" alt="Ícone de seleção. Representa um triângulo para baixo">
        </div>
        <ul class="dropdown">
        <li>
            <a href="?orderby=date&order=DESC" class="item-list">Mais recentes</a>
            </li>
            <li>
                <a href="?orderby=date&order=ASC" class="item-list">Mais antigos</a>
            </li>
            <li>
                <a href="?orderby=views&order=DESC" class="item-list">Mais vistos</a>
            </li>
            <li>
                <a href="?orderby=title&order=ASC" class="item-list">A - Z</a>
            </li>
            <li>
                <a href="?orderby=title&order=DESC" class="item-list">Z - A</a>
            </li>
        </ul>
    </div>
</div>