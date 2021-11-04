<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Theme Title -->
    <title>GOX | Coming Soon Template</title>
    <meta name="description" content="G.O.X | Responsive Comingsoon Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript,countdown,themeforest,responsive,bootstrap4">
    <meta name="author" content="Mehmet Demiray">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500,700" rel="stylesheet">
    <!-- Google Fonts | Quicksand -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,900" rel="stylesheet">
    <!-- Google Fonts | Montserrat -->
    <link rel="stylesheet" href="dist/css/bootstrap.min.css"> <!-- Bootstrap -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- FontAwesome-->
    <link rel="stylesheet" href="dist/css/themeimports.min.css"> <!-- Imported Script Styles -->
    <link rel="stylesheet" href="dist/css/style.css"> <!-- CUSTOM STYLE !! (You can edit here ) -->
    <link rel="stylesheet" href="dist/css/styleselector.css">
    <!-- Global site tag (gtag.js) - Google Analytics -->


</head>
<!--
    1.  LOADING ANIMATION
    2.  CANVAS ANIMATIONS
    3.  OVERLAY
    4.  LEFT PANEL
        4.1. Left Panel | Center 
            4.1.1. Logo
            4.1.2. Loading Animation Text
            4.1.3. Subscribe Button
            4.1.4. Contact Button
        4.2. Left Panel | Bottom
            4.2.1. Scrolling Button
    5.  CENTER
        5.1. Countdown
    6. RIGHT PANEL
        6.1. About Section
            6.1.1. About Informations
            6.1.2. Carousel Animation
                6.1.2.1. Support
                6.1.2.2. Responsive
                6.1.2.3. Photography
                6.1.2.4. Documented
                6.1.2.5. Features
                6.1.2.6. Recycle
        6.2. Gallery
        6.3. Contact Section
            6.3.1. Contact Information
            6.3.2. Contact Form
            6.3.3. Contact Form Success Message
            6.3.4. Contact Form Error Message
        6.4. Social Section
            6.4.1. Facebook
            6.4.2. Twitter
            6.4.3. Google
            6.4.4. Dribbble
            6.4.5. Skype
        6.5. Map
        6.6. Back to Top Button
    7. SUBSCRIBE MODAL
        7.1. Modal Close Button 
        7.2. Modal Body 
            7.2.1. Mailchimp Subscription Form
    8. YOUTUBE BACKGROUND
        8.1. youtube Bg Buttons 
    9. SCRIPTS
    10.YOUTUBE SETTINGS

-->

<body data-overlay-type="dotted" data-theme-color="magentamix">
    <!-- ===================================
    You can change here:
    - - -
    data-overlay-type="dotted"
    data-overlay-type="gradient"
    - - -
    data-theme-color="purple"
    data-theme-color="red"
    data-theme-color="green"
    data-theme-color="blue"
    data-theme-color="magentamix"
    data-theme-color="orange"
    data-theme-color="dark"
    data-theme-color="white"
    ==================================== -->

    <!-- ==============================================================
        1. LOADING ANIMATION 
    =============================================================== -->
    <div class="loading-page">
        <svg xmlns="http://www.w3.org/2000/svg" width="80px" height="60px" viewBox="5 0 80 60">
            <path id="wave" fill="none" stroke-width="2" stroke-linecap="round" d=""></path>
        </svg>
    </div>

    <!-- ==============================================================
        2. CANVAS ANIMATIONS 
    =============================================================== -->
    <!-- This code for only spider animation -->
    <canvas id="canvas" class=""></canvas>
    <!-- This code for other particle animations (eg. Line, stars Nasa, Snow, Polygons) -->
    <div id="particles" class="particles-js none"></div>

    <!-- ============================================================== 
        3. OVERLAY 
    =============================================================== -->
    <div class="overlay"></div>

    <!-- ============================================================== 
        4. LEFT PANEL 
    =============================================================== -->
    <div id="left">
        <div class="outer">
            <div class="middle">
                <div class="inner text-center">

                    <!-- 4.1. Left Panel | Center 
                    -->
                    <div class="container">
                        <!-- 4.1.1. Logo -->
                        <a class="logo" href="javascript:void(0)"></a>
                        <!-- 4.1.2. Loading Animation Text -->
                        <h3 class="headline loading-bar">
                            <!-- This is static text <span>...</span> -->
                            <span>We are</span>
                            <span class="animated-words">
                                <!-- There are words. You can add more texts in <b></b> tag. -->
                                <b class="is-visible">creative.</b>
                                <b>SPRS !</b>
                                <b>awesome.</b>
                            </span>
                        </h3>
                        <!-- 4.1.3. Subscribe Button -->
                        <div class="btn-home" data-toggle="modal" data-target="#subscribeModal">
                            <span class="button__mask"></span>
                            <span class="button__text">SUBSCRIBE <i class="far fa-bell"></i></span>
                            <span class="button__text button__text--bis">SUBSCRIBE <i class="far fa-bell"></i></span>
                        </div>
                        <!-- 4.1.4. Contact Button -->
                        <a href="#contact" class="scrollLink smoth">
                            <div class="btn-home">
                                <span class="button__mask"></span>
                                <span class="button__text">CONTACT <i class="far fa-envelope"></i></span>
                                <span class="button__text button__text--bis">CONTACT <i
                                        class="far fa-envelope"></i></span>
                            </div>
                        </a>
                    </div>

                    <!-- 4.2. Left Panel | Bottom 
                    -->
                    <div class="container container-bottom">
                        <!-- 4.2.1. Scrolling Button -->
                        <a href="#about" class="smoth">
                            <div id="scrolling">
                                <div class="mouse">
                                    <div class="mouse-in"></div>
                                </div>
                                <div>
                                    <span class="down-arrow-1"></span>
                                    <span class="down-arrow-2"></span>
                                    <span class="down-arrow-3"></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== 
        5. CENTER
    =============================================================== -->
    <div id="center">
        <div class="rotate-text">

            <!-- 5.1. Countdown 
            -->
            <ul class="countdown">
                <li><span class="days">00</span>
                    <p class="days_ref">day</p>
                </li>
                <li><span class="hours">00</span>
                    <p class="hours_ref">hours</p>
                </li>
                <li><span class="minutes">00</span>
                    <p class="minutes_ref">minutes</p>
                </li>
                <li><span class="seconds">00</span>
                    <p class="seconds_ref">seconds</p>
                </li>
            </ul>
        </div>
    </div>

    <!-- ============================================================== 
        6. RIGHT PANEL
    =============================================================== -->
    <div id="right">
        <!-- 6.1. About Section 
        -->
        <section id="about" class="about">

            <!-- 6.1.1. About Informations-->
            <h3>About Us</h3>
            <h1 class="first">Just, Incredible.</h1>
            <p class="description">
                We have to a tendency to believe thes that smart looking website is the first impression, businesses...
                including many of the world’s.
                <!-- 6.1.2. Carousel Animation-->
            <div class="about-gox">
                <!-- 6.1.2.1. Support -->
                <div class="text-center">
                    <img src="dist/img/features/support.png" alt="Support">
                    <h4>7/24 Support</h4>
                    <p>We are always ready to support you on the time.</p>
                </div>
                <!-- 6.1.2.2. Responsive -->
                <div class="text-center">
                    <img src="dist/img/features/responsive.png" alt="Responsive">
                    <h4>Responsive</h4>
                    <p>Our responsiveness for any project are awasome than your expectations.</p>
                </div>
                <!-- 6.1.2.3. Photography -->
                <div class="text-center">
                    <img src="dist/img/features/photo.png" alt="Photography">
                    <h4>Professionals</h4>
                    <p>Our Professionals are really harder to break any unbreakable obstacle.</p>
                </div>
                <!-- 6.1.2.4. Documented -->
                <div class="text-center">
                    <img src="dist/img/features/documented.png" alt="Well Documented">
                    <h4>Documented</h4>
                    <p>Our all projects are well documented.</p>
                </div>
                <!-- 6.1.2.5. Features -->
                <div class="text-center">
                    <img src="dist/img/features/features.png" alt="Features">
                    <h4>Features</h4>
                    <p>Top notch features are here only.</p>
                </div>
            </div>
        </section>
        <!-- 6.2. Gallery 
        -->
        <div class="grid gallery">
            <a href="dist/img/portfolio/img1.png" data-lightbox="gallery">
                <figure class="portfolio-effect">
                    <img src="dist/img/portfolio/img1.png" alt="img1" />
                    <figcaption></figcaption>
                </figure>
            </a>
            <a href="dist/img/portfolio/img4.png" data-lightbox="gallery">
                <figure class="portfolio-effect">
                    <img src="dist/img/portfolio/img4.png" alt="img2" />
                    <figcaption></figcaption>
                </figure>
            </a>
            <a href="dist/img/portfolio/img3.png" data-lightbox="gallery">
                <figure class="portfolio-effect">
                    <img src="dist/img/portfolio/img3.png" alt="img3" />
                    <figcaption></figcaption>
                </figure>
            </a>
            <a href="dist/img/portfolio/img2.png" data-lightbox="gallery">
                <figure class="portfolio-effect">
                    <img src="dist/img/portfolio/img2.png" alt="img4" />
                    <figcaption></figcaption>
                </figure>
            </a>
        </div>

        <!-- 6.3. Contact Section 
        -->
        <section id="contact" class="contact">
            <!-- 6.3.1. Contact Information -->
            <h3>Contact</h3>
            <h1 class="first">Get in Touch With Us !</h1>
            <p class="description">
                We're open for any suggestion or just to hava a chat. Lorem ipsum dolor sit amet consectetur
                adipisicing elit.
                Totam atque veritatis praesentium mollitia laboriosam nesciunt ipsum repellat molestiae, doloremque
                natus.
            </p>

            <!-- 6.3.2. Contact Form -->
            <div class="contact-form">
                <form id="contact-form" name="contact-form" method="POST" data-name="Contact Form"
                    action="https://demiray.niyz.com/themeforest/gox/php/contact.php" autocomplete="off">
                    <div class="row">
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="name"><i class="far fa-user"></i></label>
                                <input id="name" class="form form-control" placeholder="Your Name" name="name"
                                    required="" type="text">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6">
                            <div class="form-group">
                                <label for="email"><i class="far fa-envelope"></i></label>
                                <input id="email" class="form form-control" placeholder="Your Email" name="email"
                                    required="" type="email">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-12">
                            <div class="form-group">
                                <label for="subject"><i class="far fa-bookmark"></i></label>
                                <input id="subject" class="form form-control" placeholder="Write the subject"
                                    name="subject" type="text">
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-lg-12 no-padding">
                            <div class="form-group">
                                <label for="message"><i class="far fa-edit"></i></label>
                                <textarea id="message" class="form textarea form-control"
                                    placeholder="Your message here... 10 characters Min." name="message" required=""
                                    rows="5"></textarea>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-send" id="btn-send">Send a message !<i
                                class="fas fa-plane"></i></button>
                    </div>
                </form>

                <!-- 6.3.3. Contact Form Success Message -->
                <div class="successForm">
                    <p>Thank You! Your message has been sent.</p>
                </div>

                <!-- 6.3.4. Contact Form Error Message -->
                <div class="errorForm">
                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                </div>
            </div>
        </section>

        <!-- 6.4. Social Section 
        -->
        <section id="social">
            <div class="social-btns">
                <!-- 6.4.1. Facebook -->
                <a class="btn-animation facebook" href="#"><i class="fab fa-facebook-f"></i></a>
                <!-- 6.4.2. Twitter -->
                <a class="btn-animation twitter" href="#"><i class="fab fa-twitter"></i></a>
                <!-- 6.4.3. Google -->
                <a class="btn-animation google" href="#"><i class="fab fa-google"></i></a>
                <!-- 6.4.4. Dribbble -->
                <a class="btn-animation dribbble" href="#"><i class="fab fa-dribbble"></i></a>
                <!-- 6.4.5. Skype -->
                <a class="btn-animation skype" href="#"><i class="fab fa-skype"></i></a>
            </div>
        </section>

        <!-- 6.5. Map
        -->
        <div id="map"></div>

        <!-- 6.6. Back to Top Button 
        -->
        <a id="backtoTop" class="btn-animation chevron" href="#"><i class="fas fa-chevron-up"></i></a>

    </div>

    <!-- ============================================================== 
        7. SUBSCRIBE MODAL
    =============================================================== -->
    <div class="modal fade" id="subscribeModal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- 7.1. Modal Close Button 
                -->
                <div class="modal-close" data-dismiss="modal" aria-label="Close">
                    <a href="#">
                        <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                            <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none" />
                            <path class="checkmark__check" fill="none" d="M16 16 36 36 M36 16 16 36" />
                        </svg>
                    </a>
                </div>
                <!-- 7.2. Modal Body 
                -->
                <div class="modal-body">
                    <h3>Subscribe Now</h3>
                    <span>Subscribe to our newsletter and we will send you a notification about the launch of our brand
                        new site</span>

                    <!-- 7.2.1. Mailchimp Subscription Form -->
                    <form id="mc-form" class="subscribe-form" name="subscribe-form" method="POST"
                        data-name="Subscription Form"
                        action="https://foog.us8.list-manage.com/subscribe/post-json?u=5273498a8cb820d982341e136&amp;id=50d1ff41bd&amp;c=?">
                        <div class="form-group">
                            <input type="email" name="EMAIL" id="mailInput" class="form form-control"
                                placeholder="Your Email" onfocus="this.placeholder=''"
                                onblur="this.placeholder='Your Email'" required>
                            <a id="mc-subscribe" class="btn button-subscribe">Subscribe</a>
                            <p id="mc-notification"></p>
                            <label>*We don't send spam email.</label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- ============================================================== 
        8. YOUTUBE BACKGROUND
    =============================================================== -->
    <div id="youtube-bg">
        <a id="bgndVideo" class="player mb_YTPlayer"
            data-property="{videoURL:'U3S-alIsDck',containment:'body', showControls:true, autoPlay:true, loop:true, vol:50, mute:false, startAt:40, stopAt:150, opacity:1, addRaster:true, quality:'hd720'}"
            style="display: none;">My video</a>
    </div>
    <!-- 8.1. youtube Bg Buttons 
    -->
    <div class="mute" onclick="jQuery('#bgndVideo').YTPToggleVolume()"></div>
    <div class="pause" onclick="jQuery('#bgndVideo').YTPTogglePlay()"></div>
    <div class="screen" onclick="jQuery('#bgndVideo').YTPFullscreen()"></div>

    <!--div class="selector-toggle">
        <a href="javascript:void(0)"><i class="fa fa-cog fa-spin fa-fw" aria-hidden="true"></i></a>
    </!--div>
    <div-- id="styleSelector">
        <ul>
            <li class="theme-option">
                <h3 class="sub-title">Theme Layout</h3>
                <select id="theme-layout" class="form-control minimal input-ssm" onchange="location = this.value;">
                    <option id="o1" value="index-IMAGE.html">Single Image</option>
                    <option id="o2" value="index-SLIDE.html">Slide Background</option>
                    <option id="o3" value="index-KENBURNS.html">Kenburns</option>
                    <option id="o4" selected value="index-YOUTUBE.html">Youtube</option>
                    <option id="o5" value="index-WATERPIPE.html">Waterpipe</option>
                    <option id="o6" value="index-VIMEO.html">Vimeo</option>
                    <option id="o7" value="index-SINGLEVIDEO.html">Video(Custom)</option>
                    <option id="o8" value="index-GRADIENTANIMATION.html">Gradient Animation</option>
                    <option id="o9" value="index-COLOR.html">Single Color</option>
                </select>
            </li>
            <li class="theme-option">
                <h3 class="sub-title">Theme Colors</h3>
                <div id="data-theme-color">
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="white">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="dark">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color c-active"
                        data-theme-color="magentamix">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="blue">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="purple">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="red">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="green">&nbsp;</a>
                    <a href="javascript:void(0)" class="data-theme-color" data-theme-color="orange">&nbsp;</a>
                </div>
            </li>
            <li class="theme-option">
                <h3 class="sub-title">Overlay Types</h3>
                <div id="data-overlay-type">
                    <a href="javascript:void(0)" class="data-overlay-type" data-overlay-type="dotted">Dotted</a>
                    <a href="javascript:void(0)" class="data-overlay-type" data-overlay-type="gradient">Gradient</a>
                </div>
            </li>
            <li class="theme-option">
                <h3 class="sub-title">Animations</h3>
                <div id="effect-types">
                    <a id="spiderAnimation" href="javascript:void(0)" class="effectTypes e-active">Spider</a>
                    <a id="linesAnimation" href="javascript:void(0)" class="particleEffects">Lines</a>
                    <a id="starsAnimation" href="javascript:void(0)" class="particleEffects">Stars</a>
                    <a id="nasaAnimation" href="javascript:void(0)" class="particleEffects">Nasa</a>
                    <a id="snowAnimation" href="javascript:void(0)" class="particleEffects">Snow</a>
                    <a id="polygonsAnimation" href="javascript:void(0)" class="particleEffect">Polygons</a>
                </div>
            </li>
        </ul>
    </div-->

    <!-- ============================================================== 
        9. SCRIPTS
    =============================================================== -->
    <script src="dist/js/jquery-2.2.4.min.js"></script> <!-- Jquery -->
    <script src="dist/js/TweenMax.min.js"></script> <!-- Tweenmax -->
    <script src="dist/js/popper.min.js"></script> <!-- Popper -->
    <script src="dist/js/bootstrap.min.js"></script> <!-- Bootstrap -->
    <script src="dist/js/lightbox.min.js"></script> <!-- Lightbox -->
    <script src="dist/js/jquery.form.min.js"></script> <!-- Jquery Forms -->
    <script src="dist/js/jquery.validate.min.js"></script> <!-- Form Validation -->
    <script src="dist/js/leaflet.js"></script> <!-- Leaflet Map -->
    <script src="dist/js/leaflet-providers.js"></script> <!-- Leaflet Providers -->
    <script src="dist/js/jquery.mb.YTPlayer.min.js"></script> <!-- Youtube Background-->
    <script src="dist/js/slick.min.js"></script> <!-- Slick Carousel -->
    <script src="dist/js/jquery.downCount.js"></script> <!-- Countdown -->
    <script src="dist/js/canvas.js"></script> <!-- Canvas Animation -->
    <script src="dist/js/particles.js"></script> <!-- ParticleJS -->
    <script src="dist/js/headline.js"></script> <!-- Headline Animation -->
    <script src="dist/js/particlesjson.js"></script> <!-- Particles Settings -->
    <script src="dist/js/scripts.js" type="text/javascript"></script> <!-- [CUSTOM SETTING] -->
    <script src="dist/js/styleselector.js"></script>

    <!-- ============================================================== 
        10. YOUTUBE SETTINGS
    =============================================================== -->
    <script>
    jQuery(function() {
        jQuery("#bgndVideo").YTPlayer();
    });
    $(".mute").click(function() {
        $(".mute").toggleClass("muted");
    });
    $(".pause").click(function() {
        $(".pause").toggleClass("play");
    });
    </script>

</body>

</html>