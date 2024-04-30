<?php

get_header();
?>

    <main class="error-404">

        <section class="error-404__wrapper">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/404.svg" class="logo"
                 alt="Page not found"/>
            <h1 class="error-404__title">
                <?php esc_html_e('Page not found'); ?>
            </h1>
            <button>Try free for 30 days</button>
        </section>

    </main>

<?php
get_footer();