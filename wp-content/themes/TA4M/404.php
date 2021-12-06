<?php get_header(); ?>
<div class="container">
    <div>
        <?php get_template_part('./inc/template-sidebar'); ?>
    </div>
    <main>
        <header class="lcars-404">
            <div class='red-bar x2'></div>
            <h2>404</h2>
            <div class='red-bar x7'></div>
        </header>
        <p class="error-text">Page Not Found.</p>
        <p>Let's go back <a href="<?php echo site_url() . "/home" ?>"">Home</a>.</p>
        <footer class="lcars-404">
            <div class='red-bar x7'></div>
            <h2>404</h2>
            <div class='red-bar x2'></div>
        </footer>
    </main>
</div>

<?php get_footer(); ?>

body > div:nth-child(3) > main > p