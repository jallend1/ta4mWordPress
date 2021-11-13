<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header class='header-top'>
      <div>
        <div class='blue-bar x1'>11</div>
        <h1>
            <a class="header-title" href="/blog">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </h1>
        <div class='blue-bar x3'>28</div>
        <div class='blue-bar x5 hide-me'>61</div>
        <div class='orange-bar x2'>98</div>
        <div class='flavor-text-1 x2'>
            <span>ESTABLISHING SECURE CONNECTION</span>
            <span>SECURE CONNECTION ENABLED</span>
            <span>
                ...Welcome, &#123;GUEST &#125; to Starfleet Archive Museum
            </span>
            <span>...My name is INDEX, how may I assist you today?</span>
        </div>
        <div class='blue-bar x1'>71</div>
      </div>
      <div class='narrow-bar'>
        <div class='blue-bar x8'></div>
        <div class='orange-bar x2'></div>
        <div class='blue-bar x4'></div>
    </div>
</header>
<nav class='header-bottom'>
    <div class="orange-bar lcars-fixed">85</div>    
    <?php wp_nav_menu(array(
        'theme_location' => 'headerMenu',
        'after' => '<div class="orange-bar x1"></div>')); ?>
    <div class='orange-bar x1 hide-me'>67</div>
    <div class='orange-bar x1'>72</div>
    <div class='orange-bar x1'>47</div>
    <div class='orange-bar x1'>01</div>
    <div class='orange-bar x9'>13</div>
</nav>
