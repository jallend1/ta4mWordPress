<?php get_header(); ?>
<div class="container">
    <?php get_template_part('./inc/template-sidebar'); ?>
    <main class="post-index">
        <?php 
        while(have_posts()){
            the_post();?>
            <article class="post">
                <div class="post-wrapper">
                    <div class="post-container">    
                        <div class="post-details">    
                            <h3><?php the_title(); ?> </h3>
                            <p><?php the_content(); ?> </p>
                        </div>
                    </div>
                </div>
                <div>
                    <?php 
                        if(comments_open() || get_comments_number()) : comments_template(); 
                        endif;
                    ?>
                </div>
                <!-- Previous / Next Post Navigation -->
                <?php
                    the_post_navigation(array(
                        'next_text' => '<span class="meta-nav" aria-hidden="true">Next article: </span> <span class="post-title">%title</span>',
                        'prev_text' => '<span class="meta-nav" aria-hidden="true">Previous article: </span><span class="post-title">%title</span>',
                    ));
                    ?>
            </article>
        <?php } ?>
    </main>
</div>

<?php get_footer(); ?>