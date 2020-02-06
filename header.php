<!DOCTYPE HTML>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:700|Vollkorn&display=swap" rel="stylesheet">
        <?php wp_head()?>
    </head>
    <body>
    <!--HEADER-->
        <nav id="desktop-menu" <?php if(!(is_front_page())){ ?> style="position:sticky" <?php }?>>
            <div class="container-fluid">
                <ul>
                    <li>
                        <a class="menu" href="<?php echo esc_url(site_url())?>">HOME</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo esc_url(site_url('/bio')); ?>">BIO</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo esc_url(site_url('/media')) ?>">MEDIA</a>
                    </li>
                    <li>
                        <a class="menu" href="<?php echo esc_url(site_url('/shows')) ?>">SHOWS</a>
                    </li>
                    <li>
                        <a id="contact-button" href="<?php echo esc_url(site_url('/contact')) ?>">CONTACT</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--mobile header-->
        <nav id="mobile-header">
            <div class="container-fluid">
                <button id="menu-btn">
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                    <div class="hamburger"></div>
                </button>
                
                <div id="dropdown-menu">
                    <hr>
                    <ul>
                        <li><a href="<?php echo esc_url(site_url())?>">HOME</a></li><hr>
                        <li><a href="<?php echo esc_url(site_url('/bio')) ?>">BIO</a></li><hr>
                        <li><a href="<?php echo esc_url(site_url('/media')) ?>">MEDIA</a></li><hr>
                        <li><a href="<?php echo esc_url(site_url('/events')) ?>">SHOWS</a></li><hr>
                        <li><a href="<?php echo esc_url(site_url('/contact')) ?>">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!--END HEADER-->