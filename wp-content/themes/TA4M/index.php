<?php get_header(); ?>

<main class="post-index">
    <?php get_sidebar( 'left' ); ?>
    <?php the_widget('Logo_Widget'); ?>
<?php 
    while(have_posts()){
        the_post();?>
        <article class="post">
            <div class="post-wrapper">
                <div class="post-container">    
                    <div class="post-details">    
                        <a href="<?php the_permalink(); ?>">
                            <h3><?php the_title(); ?></h3>
                        </a>
                        <div>
                            <p>
                                <?php
                                    if(has_excerpt()){
                                        echo get_the_excerpt();
                                    }
                                    else{
                                        echo wp_trim_words(get_the_content(), 20); 
                                    }
                                ?>
                            <p>
                                <a href="<?php the_permalink(); ?>">Continue reading &raquo;</a>
                            </p>
                        </div>
                    </div>
                    <div class="post-image">
                        <?php echo get_the_post_thumbnail(); ?>    
                    </div>
                </div>
            </div>
        </article>
    <?php } ?>
    </main>

<?php get_footer(); ?>