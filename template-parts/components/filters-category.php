<div class="swiper-filter">
    <div class="swiper-wrapper">
    <?php
        $categories = get_categories();

        foreach ($categories as $category) {
            if ($category->term_id != 1) {
                $category_link = get_category_link($category->term_id);
                $current_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $active_class = ($current_url == $category_link) ? 'active' : '';
    ?>
        <div class="swiper-slide">
            <a class="btn-category <?php echo $active_class; ?>" href="<?php echo $category_link; ?>"><?php echo $category->name; ?></a>
        </div>
    <?php
            }
        }
    ?>
    </div>
</div>