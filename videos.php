<?php
    /*
     * Template Name: Videos Page - RedwolF
     */
?>


<!DOCTYPE html>
<html dir="rtl" lang="fa">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/img/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-W7S5ZJ81PT"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-W7S5ZJ81PT');
    </script>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="top-nav single_page_nav">
        <div class="container">
            <h1 class="logo"><a href="<?php echo home_url(); ?>">مهدی مقدم</a></h1>
            <ul class="links">
                <li><a href="<?php echo home_url(); ?>/#biography">بیوگرافی</a></li>
                <li><a href="<?php echo home_url(); ?>/#photos">عکس‌ها</a></li>
                <li><a href="<?php echo home_url(); ?>/#videos">ویدیوها</a></li>
                <li><a href="<?php echo home_url(); ?>/#musics">ترانه‌ها</a></li>
                <li><a href="<?php echo home_url(); ?>/#memories">خاطرات شما</a></li>
                <li><a href="<?php echo home_url(); ?>/#contact-us">تماس با ما</a></li>
            </ul>
            <ul class="menu">
                <button onclick="openNav();"><span>MENU</span> &#9776;</button>
            </ul>
        </div>
    </nav>

    <section class="musics_single_page">
        <div class="container">
            <div class="single-title">
                <h2>ویدیوها</h2>
                <form id="live-search" action="">
                    <input type="text" id="filter" placeholder="نام ویدیو را اینجا وارد کنید...">
                </form>
            </div>
            <div class="video-playlist-singlepage">
                <video id="videoarea" controls="controls" poster="" src=""></video>

                <ul id="playlist-singlepage">
                <?php $args = array( 'post_type' => 'videos', 'posts_per_page' => 8 );$the_query = new WP_Query( $args ); ?><?php if ( $the_query->have_posts() ) : ?><?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li movieurl="<?php $fields = get_fields(); if( $fields ): ?><?php foreach( $fields as $name => $value ): ?><?php echo $value; ?><?php endforeach; ?><?php endif; ?>">
                        <i><span class="icon-play2"></span></i>
                        <h6><?php the_title(); ?></h6>
                    </li>
                    <?php endwhile;wp_reset_postdata(); ?><?php else:  ?><?php endif; ?>
                </ul>
            </div>
        </div>
        <div class="backtohome">
        <a href="<?php echo home_url(); ?>/#videos">بازگشت به صفحه قبل</a>
        </div>
    </section>

    <footer class="footer_single_page">
        <i class="redwolf-single_page">
            <a href="http://redwolf.ir" target="_blank">
              <!-- Generator: Adobe Illustrator 25.0.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 192.1 231.3" style="enable-background:new 0 0 192.1 231.3;" xml:space="preserve">
              <g id="Layer_2_1_">
                <polygon class="st0" points="44.6,104.4 59.7,111.4 63.3,122.8 66.7,115.7 78.2,120.5 84.4,139.8 73,129.9 52.7,125.4 	"/>
                <polygon class="st0" points="146.6,104.4 131.5,111.4 127.9,122.8 124.5,115.7 113.1,120.5 106.8,139.8 118.3,129.9 138.6,125.4 	
                  "/>
              </g>
              <g id="Layer_3">
                <path class="st1" d="M161.4,64l9.4-33.3L137.4,0l-28.1,42.2L96,32.8l-14.8,8.8L55.2,0L22.4,30.7l7.3,31.8L0,134.8l59.9,47.9
                  l4.2,33.8l31.8,14.8L128,216l2.6-31.8l61.4-50L161.4,64z M167.1,144.7l-26.8,21.9l25-50.9l-32,50.9l2.1-30.7L121,211.1l-25.2,10.1
                  l-24.2-10.7l-15.4-72.9l1.3,28.9l-31.5-50l24.5,50l-27.9-24l-6.5-15.1l0.8,12.2l-8.3-8.6l22.4-64.8l3.9,12.8L27,31.5l7.3-6.2
                  l7.5,30.7L40.6,20l14-9.9l24.7,32.3l-17.2,8.8l-10.9-9.6l8.6,12l-7.5,26l13-25.2l30.5-14.3l30.7,15.1l12.2,23.9l-7-26.3l7.3-10.7
                  L128,51.8l-15.4-9.9l24.7-31.8l14,10.7l-1.3,34.1l6.8-29.2l7.5,5.2l-6.8,49.4l2.9-13.5l22.4,64.6l-8.9,6.8l1.8-12.8L167.1,144.7z"
                  />
                <polygon class="st1" points="76.6,164 93.8,169.7 98.8,169.7 115.4,164 96.4,182.2 	"/>
                <polygon class="st1" points="77.3,199.6 78.8,202.5 112.2,202.5 114.8,199.6 	"/>
              </g>
              </svg>
              <span>REDWOLF</span>
            </a>
          </i>
    </footer>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
        <a href="<?php echo home_url(); ?>/#biography" onclick="closeNav();">بیوگرافی</a>
    <a href="<?php echo home_url(); ?>/#photos" onclick="closeNav();">عکس‌ها</a>
        <a href="<?php echo home_url(); ?>/#musics" onclick="closeNav();">ترانه‌ها</a>
        <a href="<?php echo home_url(); ?>/#videos" onclick="closeNav();">ویدیوها</a>
        <a href="<?php echo home_url(); ?>/#memories" onclick="closeNav();">خاطرات شما</a>
        <a href="<?php echo home_url(); ?>/#contact-us" onclick="closeNav();">تماس با ما</a>
        </div>
    </div>

    <?php wp_footer(); ?>
</body>

</html>