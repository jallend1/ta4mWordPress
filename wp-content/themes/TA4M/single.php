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
                        <?php 
                            // There Are Four Mics doesn't have a first name and is also useless as a tag, so only display author if there's an actual author
                            if(the_author_meta('first_name')){
                                echo 'Posted by:' . the_author_meta('first_name') . ' on '; 
                            }
                            else{
                                echo 'Posted on ';
                            }
                        ?>
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