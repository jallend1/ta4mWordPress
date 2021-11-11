<?php wp_head(); ?>

<main class='hero'>
    <div class='banner' 
        style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/4mics-1920.png');">
    </div>
    <div class='titles'>
        <h1><?php echo get_bloginfo('name'); ?></h1>
        <span class='separator'></span>
        <span>A Star Trek Podcast</span>
    </div>
    <div className='read-more'>
        <a href="/blog">Enter Site</a>
    </div>
</main>