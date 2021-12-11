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
    <div class='enter-site'>
        <a href="<?php echo get_ta4m_posts_page_URL(); ?>">Enter Site</a>
    </div>
        <!-- <audio controls>
            <source src="https://traffic.libsyn.com/secure/therearefourmics/TAFM_071_-_Star_Trek_Enterprise_03x14_-_Stratagem.mp3" />
        </audio> -->
    <div class="fake-player">
        <button class="fake-play"></button>
        <span class="fake-title">Star Trek Enterprise 03x14 - Stratagem (TAFM 071)</span>
        <audio controls>
            <source src="https://traffic.libsyn.com/secure/therearefourmics/TAFM_071_-_Star_Trek_Enterprise_03x14_-_Stratagem.mp3" />
        </audio>
    </div>
</main>