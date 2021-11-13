<?php get_header(); ?>
<div class="container">
    <aside class="sidebar">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/4MicsLogo.png">
        <div>
            <p>There Are Four Mics is a weekly podcast dedicated to group discussion of Star Trek.</p>
            <p>Join your hosts as they make their way through the Star Trek franchise episode by episode, movie by movie, in stardate order. Grab a beer and join us as we talk about the episodes we love and the occasional episode we love to hate.</p>
        </div>
    <!-- <?php get_sidebar( 'left' ); ?> -->
    </aside>
    <main class="post-index">
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
                                            echo wp_trim_words(get_the_content(), 100); 
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
</div>

<?php get_footer(); ?>