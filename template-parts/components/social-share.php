<div class="socials-share">
    <span>Compartilhar</span>
    <ul class="socials">
        <li>
            <a href="https://api.whatsapp.com/send?text=<?php the_title(); ?>%20<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-whats.svg" alt="Ícone do WhatsApp">
            </a>
        </li>
        
        <li>
            <a href="https://www.facebook.com/sharer.php?u=<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-face.svg" alt="Ícone do Facebook">
            </a>
        </li>

        <li>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php the_permalink(); ?>" title="Compartilhar" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-x-twitter-1.svg" alt="Ícone do LinkedIn">
            </a>
        </li>

        <li>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" title="Compartilhar" target="_blank">
                <img src="<?php echo get_template_directory_uri() ?>/assets/icon-x-twitter.svg" alt="Ícone do X/Twitter">
            </a>
        </li>
    </ul>
</div>