<?php get_header(); ?>
<div class="container">
    <div>
        <?php get_template_part('./inc/template-sidebar'); ?>
    </div>
    <main class="page-not-found">
        <header class="lcars-404">
            <div class='red-bar x2'></div>
            <h2>404</h2>
            <div class='red-bar x7'></div>
        </header>
        <div>
            <p class="error-text">Page Not Found.</p>
            <p class="error-text">Set a new course for <a href="<?php echo site_url() . "/home" ?>"">Home</a>?</p>
        </div>
        <footer class="lcars-404">
            <div class='red-bar x7'></div>
            <h2>404</h2>
            <div class='red-bar x2'></div>
        </footer>
    </main>
</div>

<?php get_footer(); ?>