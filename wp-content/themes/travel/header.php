<!doctype html>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>My blog</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <?php wp_head(); ?>
    </head>
    <body>
     <header>  
        <div class="container header__content">
            <div class="row">
                <div class="col-4 header__logo">
                   <?php the_custom_logo(); ?>
                </div>
                <!--Navbar-->
                <nav class="col-8">
                    <div  class="open">
                        <span class="cls"></span>
                        <span>
                            <div class="sub-menu ">
                                <?php wp_nav_menu( array(
                                'theme_location' => 'main_menu',
                                'class' => 'sub-menu' )); ?>
                            </div>
                        </span>
                        <span class="cls"></span>
                    </div>
                </nav>
                <!--/.Navbar-->
            </div>
        </div>
    </header> 