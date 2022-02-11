<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>markenstolz.net</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/fontawesome-all.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <link rel="shortcut icon" href="<?php mfn_opts_show( 'favicon-img', THEME_URI .'/images/favicon.ico' ); ?>" />  
    <?php if( mfn_opts_get('apple-touch-icon') ): ?>
    <link rel="apple-touch-icon" href="<?php mfn_opts_show( 'apple-touch-icon' ); ?>" />
    <?php endif; ?> 
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> id="landing-page">
    <header class="site-header">
        <div class="container">
            <a href="<?php if(!empty(get_field('link_header','option'))) { echo get_field('link_header','option'); } else { echo home_url(); } ?>" class="logo">
                <?php if(!empty(get_field('logo_landing','option'))) {
                    echo '<img src="'.esc_url(get_field('logo_landing','option')['url']).'" alt="Logo">';
                } ?>
                
            </a>
        </div>
    </header>