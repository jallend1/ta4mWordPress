<?php get_header(); ?>
<div class="container">
    <?php get_template_part('./inc/template-sidebar'); ?>
    <main class="post-index">
        <?php 
        while(have_posts()){
            the_post();?>
            <article class="post">
                <div>
                    <div>    
                        <div class="post-details">    
                            <h3><?php the_title(); ?> </h3>
                            <p><?php the_content(); ?> </p>
                        </div>
                    </div>
                </div>
                <div class="post-meta">
                    <div class="post-tags">
                        <?php echo the_tags(''); ?>
                    </div>
                    <div>
                        <?php 
                            $year = get_post_time('Y');
                            $month = get_post_time('m');
                            $day = get_post_time('j');
                        ?>
                        Posted by: <?php the_author(); ?> on 
                        <a href="<?php echo get_month_link($year, $month); ?>"/> <?php echo $month; ?></a>
                        <a href="<?php echo get_day_link($year, $month, $day); ?>"/> <?php echo $day; ?></a>
                        <a href="<?php echo get_year_link($year); ?>"/><?php echo $year; ?></a>
                    </div>
                    <?php
                        the_post_navigation(array(
                            'next_text' => '<span class="meta-nav" aria-hidden="true">Next article: </span> <span class="post-title">%title</span>',
                            'prev_text' => '<span class="meta-nav" aria-hidden="true">Previous article: </span><span class="post-title">%title</span>',
                        ));
                    ?>
                    <div>
            </article>
            <?php } ?>
        </main>
                <?php 
                    if(comments_open() || get_comments_number()) : comments_template(); 
                    endif;
                ?>
            </div>
        </div>
</div>

<?php get_footer(); ?>