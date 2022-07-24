<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <?php wp_body_open();?>
    <!-- Header Area Start -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3">
                    <div class="site-logo">
                        <a href="<?php echo esc_url(home_url('/')); ?>"><img
                                src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png" alt="logo"></a>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9">
                    <nav class="mainmenu-area text-end">

                        <?php

                            wp_nav_menu([
                                'theme_location' => 'mainmenu',
                                'menu_class'     => 'mainmenu',

                            ]);
                        ?>
                    </nav>

                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->