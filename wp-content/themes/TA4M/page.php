<?php get_header(); ?>
<div class="container">
    <?php get_template_part('./inc/template-sidebar'); ?>
    <main>
        <?php while(have_posts()){
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div>
                <?php the_content(); ?>
            </div>
        <?php } ?>
    </main>
</div>
<?php get_footer(); ?>