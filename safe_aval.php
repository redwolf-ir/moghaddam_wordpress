<?php
/*
     * Template Name: Main Page - RedwolF
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
    <nav class="top-nav">
        <div class="container">
            <h1 class="logo"><a href="#intro">مهدی مقدم</a></h1>
            <ul class="links">
                <li><a href="#biography">بیوگرافی</a></li>
                <li><a href="#photos">عکس‌ها</a></li>
                <li><a href="#musics">ترانه‌ها</a></li>
                <li><a href="#videos">ویدیوها</a></li>
                <li><a href="#memories">خاطرات شما</a></li>
                <li><a href="#contact-us">تماس با ما</a></li>
            </ul>
            <ul class="menu">
                <button onclick="openNav();"><span>MENU</span> &#9776;</button>
            </ul>
        </div>
    </nav>
    <div id="redwolf">
        <section class="section intro" data-anchor="intro">
            <div class="container">
                <div class="about_him">
                    <picture>
                        <div class="fadein">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moghaddam-1.jpg" alt="مهدی مقدم">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mr_moghaddam_colorized.jpg" alt="مهدی مقدم">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moghaddam-3.jpg" alt="مهدی مقدم">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/moghaddam-4.jpg" alt="مهدی مقدم">
                        </div>
                    </picture>
                    <aside>
                        <div class="about_him_note">
                            <h2>مهدی مقدم <span>( 1400 - 1314 )</span></h2>
                            <h3>Mehdi Moghaddam <span>( 1935 - 2021 )</span></h3>

                            <ul class="about_him_works">
                                <li>
                                    بازیگر نمایشنامه
                                </li>
                                <li>
                                    نوازنده و سازنده جاز
                                </li>
                                <li>
                                    خواننده
                                </li>
                                <li>
                                    عکاسباشی
                                </li>
                                <li>
                                    هتل‌دار
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <aside class="social-medias">
                <ul>
                    <li><a href="https://youtube.com/user/avinin"><span class="icon-youtube"></span> یوتوب</a></li>
                    <li><a href="https://t.me/Moghaddam1400"><span class="icon-telegram"></span> تلگرام</a></li>
                </ul>
            </aside>
            <div class="go-down-please">
                <div class="mouse_scroll">
                    <div class="mouse">
                        <div class="wheel"></div>
                    </div>
                    <div>
                        <span class="m_scroll_arrows unu"></span>
                        <span class="m_scroll_arrows doi"></span>
                        <span class="m_scroll_arrows trei"></span>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <section class="section biography" data-anchor="biography">
            <div class="container">
                <h2>بیوگرافی</h2>
                <div class="biography_section">
                    <aside>
                        <?php $args = array('post_type' => 'biography', 'posts_per_page' => 1);
                        $the_query = new WP_Query($args); ?><?php if ($the_query->have_posts()) : ?><?php while ($the_query->have_posts()) : $the_query->the_post(); ?><p><?php the_content(); ?></p><?php endwhile;wp_reset_postdata(); ?><?php else :  ?><?php endif; ?>
                        <svg version="1.0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 751.000000 1280.000000" preserveAspectRatio="xMidYMid meet">
                            <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)" stroke="none">
                                <path d="M4104 11920 c-249 -81 -489 -399 -672 -890 -162 -435 -204 -853 -141
                            -1404 25 -220 56 -401 135 -775 52 -245 62 -307 52 -316 -397 -362 -631 -591
                            -826 -810 -478 -536 -765 -1061 -872 -1593 -85 -429 -65 -796 65 -1172 174
                            -503 569 -961 1070 -1237 259 -143 548 -239 845 -279 207 -27 526 -15 733 29
                            50 11 69 12 72 3 11 -32 206 -974 214 -1032 37 -266 15 -546 -61 -764 -84
                            -239 -234 -432 -403 -515 -144 -72 -373 -111 -589 -102 -211 9 -353 57 -447
                            153 l-43 44 74 0 c354 1 638 274 657 630 6 121 -13 218 -66 325 -115 231 -327
                            366 -576 367 -259 1 -477 -134 -590 -367 -111 -229 -81 -518 84 -799 173 -294
                            445 -490 764 -551 91 -17 335 -20 442 -5 167 24 332 81 471 163 120 70 290
                            238 362 356 132 216 192 452 192 753 0 221 -17 327 -144 911 l-112 518 89 46
                            c450 233 789 731 893 1313 28 156 26 457 -4 597 -57 264 -159 448 -371 666
                            -257 265 -525 417 -835 472 -79 14 -133 17 -272 13 -96 -3 -174 -4 -174 -1 0
                            3 -223 1038 -235 1089 -3 14 18 48 77 120 754 924 1104 1794 1075 2674 -12
                            354 -75 643 -196 896 -110 230 -243 379 -407 456 -61 29 -80 33 -169 35 -78 2
                            -113 -1 -161 -17z m446 -802 c36 -19 50 -34 73 -79 45 -93 68 -200 74 -349 14
                            -335 -78 -683 -294 -1115 -87 -174 -140 -257 -240 -376 -68 -81 -468 -479
                            -482 -479 -8 0 -87 375 -106 505 -56 381 -41 699 49 1010 100 347 279 618 519
                            783 166 115 308 149 407 100z m-749 -4034 c54 -258 99 -474 99 -481 0 -6 -17
                            -17 -37 -24 -144 -46 -358 -185 -506 -328 -214 -207 -338 -411 -413 -682 -37
                            -135 -44 -345 -16 -480 69 -335 302 -613 672 -803 134 -69 309 -141 319 -130
                            3 3 -12 20 -34 37 -185 147 -309 271 -369 366 -65 104 -92 259 -83 494 7 203
                            43 340 128 485 47 78 170 200 254 250 72 43 192 92 223 92 16 0 47 -134 244
                            -1062 124 -585 224 -1064 222 -1066 -4 -6 -117 -34 -198 -48 -45 -8 -142 -18
                            -216 -21 -518 -22 -1018 186 -1335 557 -297 346 -454 758 -455 1189 0 288 68
                            545 209 783 92 156 161 236 687 803 148 160 320 348 383 418 63 70 116 125
                            118 123 3 -2 49 -215 104 -472z m656 -1189 c333 -54 623 -263 763 -550 69
                            -141 91 -230 97 -401 7 -168 -10 -287 -63 -455 -79 -250 -169 -390 -336 -523
                            -77 -62 -175 -122 -184 -114 -5 5 -444 2027 -444 2046 0 16 53 15 167 -3z" />
                            </g>
                        </svg>
                    </aside>
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mr_moghaddam_colorized.jpg" alt="مهدی مقدم">
                    </picture>
                </div>
            </div>
        </section>
        <section class="section photos" data-anchor="photos">
            <div class="container">
                <h2>عکس‌ها</h2>
                <aside class="photo-gallery">
                    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="true" data-transition="slide" data-clicktransition="crossfade" data-arrows="true" data-click="true" data-swipe="true" data-navposition="bottom" data-thumbwidth="32" data-width="100%" data-height="350">
                        <?php $args = array('post_type' => 'photos', 'posts_per_page' => 100);
                        $the_query = new WP_Query($args); ?><?php if ($the_query->have_posts()) : ?><?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <img data-caption="<?php the_title(); ?>" src="<?php $fields = get_fields();if ($fields) : ?><?php foreach ($fields as $name => $value) : ?><?php echo $value; ?><?php endforeach; ?><?php endif; ?>" alt="" loading="lazy"><?php endwhile;wp_reset_postdata(); ?><?php else :  ?><?php endif; ?>
                    </div>
                </aside>
            </div>
        </section>
        <section class="section musics" data-anchor="musics">
            <div class="container">
                <h2>ترانه‌ها</h2>
                <div class="music-playlist">
                    <div class="music-part">
                        <figure>
                            <audio id="audioarea" controls src="">
                                Your browser does not support the
                                <code>audio</code> element.
                            </audio>
                        </figure>
                        <ul id="mplaylist">
                            <?php $args = array('post_type' => 'musics', 'tag' => 'top', 'posts_per_page' => 8);
                            $the_query = new WP_Query($args); ?><?php if ($the_query->have_posts()) : ?><?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <li musicurl="<?php $fields = get_fields();if ($fields) : ?><?php foreach ($fields as $name => $value) : ?><?php echo $value; ?><?php endforeach; ?><?php endif; ?>">
                                <i><span class="icon-play2"></span></i>
                                <h6><?php the_title(); ?></h6>
                            </li><?php endwhile;wp_reset_postdata(); ?><?php else :  ?><?php endif; ?>
                        </ul>
                    </div>
                    <picture>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/mehdi_moghaddam.jpg" alt="">
                    </picture>
                </div>
                <ul class="see_more_music_version">
                    <li><a href="<?php echo home_url(); ?>/musics/">بیشتر گوش کنید</a></li>
                    <li><a href="<?php echo home_url(); ?>/collaborationwithehsan/">هم‌صدایی با نوه‌اش امیر احسان</a></li>
                    <li><a href="<?php echo home_url(); ?>/amirehsan/">ترانه‌های امیر احسان</a></li>
                </ul>
            </div>
        </section>        
        <section class="section videos" data-anchor="videos">
            <div class="container">
                <h2>ویدیوها</h2>
                <div class="video-playlist">
                    <video id="videoarea" controls="controls" poster="" src=""></video>
                    <ul id="playlist">
                        <?php $args = array('post_type' => 'videos', 'tag' => 'top', 'posts_per_page' => 8);
                        $the_query = new WP_Query($args); ?><?php if ($the_query->have_posts()) : ?><?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <li movieurl="<?php $fields = get_fields();if ($fields) : ?><?php foreach ($fields as $name => $value) : ?><?php echo $value; ?><?php endforeach; ?><?php endif; ?>">
                            <i><span class="icon-play2"></span></i>
                            <h6><?php the_title(); ?></h6>
                        </li><?php endwhile;wp_reset_postdata(); ?><?php else :  ?><?php endif; ?>
                    </ul>
                </div>
                <div class="see_more">
                    <a href="<?php echo home_url(); ?>/videos/">بیشتر ببینید</a>
                </div>
            </div>
        </section>        
        <section class="section memories" data-anchor="memories">
            <div class="container">
                <h2>خاطرات شما</h2>
                <div class="memories-part">
                    <span>شما هم اگر خاطره‌ای با مهدی مقدم دارید خوشحال می‌شویم آن را با ما به اشتراک بگذارید.</span>
                    <aside>
                        <ul>
                            <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?><?php comments_template(); ?><?php endwhile; ?><?php endif ?>
                </div>
            </div>
        </section>
        <section class="section contact" data-anchor="contact-us">
            <div class="container">
                <h2>تماس با ما</h2>
                <aside>
                    <div class="contact_form">
                        <?php echo do_shortcode('[contact-form-7 html_id="contactForm" id="23" title="moghaddam"]'); ?>
                        <ul>
                            <li><a href="https://youtube.com/user/avinin"><span class="icon-youtube"></span> یوتوب</a></li>
                            <li><a href="https://t.me/Moghaddam1400"><span class="icon-telegram"></span> تلگرام</a></li>
                        </ul>
                        <a class="contact-form-email" href="mailto:info@mehdimoghaddam.com">info@mehdimoghaddam.com</a>
                    </div>
                </aside>
                <i class="redwolf">
                    <a href="http://redwolf.ir" target="_blank">
                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 192.1 231.3" style="enable-background:new 0 0 192.1 231.3;" xml:space="preserve">
                            <g id="Layer_2_1_">
                                <polygon class="st0" points="44.6,104.4 59.7,111.4 63.3,122.8 66.7,115.7 78.2,120.5 84.4,139.8 73,129.9 52.7,125.4 	" />
                                <polygon class="st0" points="146.6,104.4 131.5,111.4 127.9,122.8 124.5,115.7 113.1,120.5 106.8,139.8 118.3,129.9 138.6,125.4 	
                      " />
                            </g>
                            <g id="Layer_3">
                                <path class="st1" d="M161.4,64l9.4-33.3L137.4,0l-28.1,42.2L96,32.8l-14.8,8.8L55.2,0L22.4,30.7l7.3,31.8L0,134.8l59.9,47.9
                      l4.2,33.8l31.8,14.8L128,216l2.6-31.8l61.4-50L161.4,64z M167.1,144.7l-26.8,21.9l25-50.9l-32,50.9l2.1-30.7L121,211.1l-25.2,10.1
                      l-24.2-10.7l-15.4-72.9l1.3,28.9l-31.5-50l24.5,50l-27.9-24l-6.5-15.1l0.8,12.2l-8.3-8.6l22.4-64.8l3.9,12.8L27,31.5l7.3-6.2
                      l7.5,30.7L40.6,20l14-9.9l24.7,32.3l-17.2,8.8l-10.9-9.6l8.6,12l-7.5,26l13-25.2l30.5-14.3l30.7,15.1l12.2,23.9l-7-26.3l7.3-10.7
                      L128,51.8l-15.4-9.9l24.7-31.8l14,10.7l-1.3,34.1l6.8-29.2l7.5,5.2l-6.8,49.4l2.9-13.5l22.4,64.6l-8.9,6.8l1.8-12.8L167.1,144.7z" />
                                <polygon class="st1" points="76.6,164 93.8,169.7 98.8,169.7 115.4,164 96.4,182.2 	" />
                                <polygon class="st1" points="77.3,199.6 78.8,202.5 112.2,202.5 114.8,199.6 	" />
                            </g>
                        </svg>
                        <span>REDWOLF</span>
                    </a>
                </i>
            </div>
        </section>
    </div>

    <div id="myNav" class="overlay">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="overlay-content">
            <a href="#biography" onclick="closeNav();">بیوگرافی</a>
            <a href="#photos" onclick="closeNav();">عکس‌ها</a>
            <a href="#musics" onclick="closeNav();">ترانه‌ها</a>
            <a href="#videos" onclick="closeNav();">ویدیوها</a>
            <a href="#memories" onclick="closeNav();">خاطرات شما</a>
            <a href="#contact-us" onclick="closeNav();">تماس با ما</a>
        </div>
    </div>

    <div class="gototop">
        <a href="#intro">
            <i><span class="icon-arrow-up2"></span></i>
            <em>UP</em></a>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h4>هموطن هنردوست</h4>
            <p>ما گردآورندگان این مجموعه برای کامل کردن آرشیو خود دست یاری بسوی شما دراز کرده و استدعا داریم اگرهریک از شما عزیزان از هنرمند فقید "مهدی مقدم" فایلی دارید به آدرس تلگرامی زیر ارسال
نمایید.</p>
            <p>بدلیل برخی مشکلات و اتفاقات روزگار ، ما ضبط اصلی (مستر) ترانه‌های پدرمان را نداشته و امیدواریم با کمک شما بتوانیم کیفیت و کمیت آرشیو خود را ارتقا دهیم. </p>
            <p>فایل شما می‌تواند : عکس یادگاری با دوستان، فایل ترانه، عکس ازصفحات گرامافون، عکس روزنامه و مجلات، عکس کاور کاست‌های نواری، خاطره‌ای از ایشان بصورت نوشتاری یا صوتی ویا هرآنچه که به نظرشخص شما برای این مجموعه مناسب و پسندیده است باشد. </p>
            <p style="text-align: center;">قدردان همیاری و همکاری شما عزیزان می‌باشیم.</p>
            <p class="sonsofhispast">
            فرزندان مهدی مقدم 
            </p>
            <i><a href="https://t.me/Moghaddam1400"><span class="icon-telegram"></span>لینک تلگرام</a></i>
        </div>
    </div>    
    <?php wp_footer(); ?>
</body>

</html>