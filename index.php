<!DOCTYPE html>
<html lang="en">

<head>
    <title>Female Gym Fitness System</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="SportFIT template project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap-4.1.2/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>

<body>

    <div class="super_container">
        <?php include 'header.php'; ?>

        <div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
            <div class="hamburger">
                <div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
                    <span>menu</span>
                    <div class="hamburger_container">
                        <div class="menu_hamburger">
                            <div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                            <div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
                            <div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Menu -->

        <div class="menu trans_800">
            <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
                <ul>
                    <li><a href="index.hpp">Home</a></li>
                    <li><a href=" member-register.php">Member Account</a></li>
                    <li><a href="register.php">Instructor Account</a></li>
                    <li><a href="login.php">My Account</a></li>
                </ul>
            </div>
            <div class="menu_phone d-flex flex-row align-items-center justify-content-start">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>+254 724 304 786</span>
            </div>
        </div>

        <!-- Home -->

        <div class="home">
            <div class="background_image" style="background-image:url(images/index.jpg)"></div>
            <div class="overlay"></div>
            <div class="home_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="home_content text-center">
                                <div class="video_link">
                                    <a class="vimeo video_button d-flex flex-column align-items-center justify-content-center"
                                        href="https://player.vimeo.com/video/99340873?autoplay=1&loop=1&title=0&autopause=0">
                                        <div
                                            class="video_link_content d-flex flex-row align-items-center justify-content-start">
                                            <div
                                                class="video_icon d-flex flex-column align-items-center justify-content-center">
                                                <i class="fa fa-play" aria-hidden="true"></i>
                                            </div>
                                            <span class="video_text">See Workout Video</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="home_title">Get fit with us</div>
                                <div class="home_subtitle">Pilates, Yoga, Fitness, Spinning & many more</div>
                                <div class="button home_button ml-auto mr-auto"><a href="#">Join Now</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Boxes -->

        <div class="boxes">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div
                            class="boxes_container d-flex flex-lg-row flex-column align-items-start justify-content-start">

                            <!-- Box -->
                            <div class="box">
                                <div class="box_icon d-flex flex-column align-items-center justify-content-center"><img
                                        src="images/icon_1.png" alt=""></div>
                                <div class="box_title">Pilates with trainer</div>
                                <div class="box_text">
                                    <p>Curves has helped women around the world get healthier and stronger with our
                                        unique fitness solution. In just 30 minutes, you work every major muscle group
                                        through a proven gym program.</p>
                                </div>
                                <div class="box_link_container">
                                    <a href="#">
                                        <div
                                            class="box_link d-flex flex-column align-items-center justify-content-center trans_200">
                                            <div>+</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="box_icon d-flex flex-column align-items-center justify-content-center"><img
                                        src="images/icon_2.png" alt=""></div>
                                <div class="box_title">Swimming Pool</div>
                                <div class="box_text">
                                    <p>When you get stronger and increase your flexibility – you’re setting the stage
                                        for a healthy, more active future. As a member, there are a variety of exercise
                                        classes to choose from.</p>
                                </div>
                                <div class="box_link_container">
                                    <a href="#">
                                        <div
                                            class="box_link d-flex flex-column align-items-center justify-content-center trans_200">
                                            <div>+</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Box -->
                            <div class="box">
                                <div class="box_icon d-flex flex-column align-items-center justify-content-center"><img
                                        src="images/icon_3.png" alt=""></div>
                                <div class="box_title">Healthy diet plan</div>
                                <div class="box_text">
                                    <p>Our women's fitness classes range from low to high intensity, including aerobic
                                        exercise and strength training workouts. At Curves, you can always find a
                                        fitness program that works for you.</p>
                                </div>
                                <div class="box_link_container">
                                    <a href="#">
                                        <div
                                            class="box_link d-flex flex-column align-items-center justify-content-center trans_200">
                                            <div>+</div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- About -->

        <div class="about">
            <div class="container about_container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about_content">
                            <div class="section_title_container">
                                <div class="section_subtitle">welcome to sportfit</div>
                                <div class="section_title">About <span>Sportfit</span></div>
                            </div>
                            <div class="about_text">
                                <p>The Curves workouts for women are convenient and efficient, combining strength
                                    training and cardio plus stretching to strengthen your whole body in just 30
                                    minutes. Our trusted women’s exercise programs available in-club or at home so that
                                    you can workout wherever and whenever it suits you. By getting stronger and
                                    increasing your flexibility, you are setting the stage for a healthier, more active
                                    future so you can live the life you want.</p>
                            </div>
                            <div class="button about_button"><a href="#">Join Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about_background">
                <div class="container fill_height">
                    <div class="row fill_height">
                        <div class="col-lg-6 offset-lg-6 fill_height">
                            <div class="about_image"><img src="images/a1.png" alt=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Testimonials -->

        <div class="testimonials">
            <div class="parallax_background parallax-window" data-parallax="scroll"
                data-image-src="images/testimonials.jpg" data-speed="0.8"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section_title_container">
                            <div class="section_subtitle">welcome to sportfit</div>
                            <div class="section_title">Testimonials</div>
                        </div>

                        <!-- Testimonial -->
                        <div class="test test_1 d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="test_image"><img src="images/test_1.jpg" alt=""></div>
                            </div>
                            <div class="test_content">
                                <div class="test_name"><a href="#">Diane Smith</a></div>
                                <div class="test_title">client</div>
                                <div class="test_text">
                                    <p>I completed my 200th workout last night and felt like I had just climbed Mt.
                                        Everest! My work is far from over but I know I will reach my ultimate goal!”</p>
                                </div>
                                <div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">

                        <!-- Testimonial -->
                        <div class="test d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="test_image"><img src="images/test_2.jpg" alt=""></div>
                            </div>
                            <div class="test_content">
                                <div class="test_name"><a href="#">Diane Smith</a></div>
                                <div class="test_title">client</div>
                                <div class="test_text">
                                    <p>Who am I? I’m a new woman! All the credit goes to Curves and my coaches! Thank
                                        you all for helping me change my life! I am forever grateful!</p>
                                </div>
                                <div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            </div>
                        </div>

                        <!-- Testimonial -->
                        <div class="test d-flex flex-row align-items-start justify-content-start">
                            <div>
                                <div class="test_image"><img src="images/test_3.jpg" alt=""></div>
                            </div>
                            <div class="test_content">
                                <div class="test_name"><a href="#">Diane Smith</a></div>
                                <div class="test_title">client</div>
                                <div class="test_text">
                                    <p>I exercise more consistently than I ever have before. Curves makes it so easy to
                                        get the strength training I know I need.</p>
                                </div>
                                <div class="rating rating_4 test_rating"><i></i><i></i><i></i><i></i><i></i></div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row test_button_row">
                    <div class="col text-center">
                        <div class="button test_button"><a href="#">Join Now</a></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Gallery -->

        <div class="gallery">

            <!-- Gallery Slider -->
            <div class="gallery_slider_container">
                <div class="owl-carousel owl-theme gallery_slider">

                    <!-- Slide -->
                    <div class="owl-item"><img src="images/gallery_3.jpg" alt=""></div>

                    <!-- Slide -->
                    <div class="owl-item"><img src="images/gallery_4.jpg" alt=""></div>

                    <!-- Slide -->
                    <div class="owl-item"><img src="images/gallery_5.jpg" alt=""></div>

                    <!-- Slide -->
                    <div class="owl-item"><img src="images/gallery_1.jpg" alt=""></div>

                    <!-- Slide -->
                    <div class="owl-item"><img src="images/gallery_2.jpg" alt=""></div>

                </div>
            </div>
        </div>

        <!-- Services -->


        <!-- Footer -->
        <?php include 'footer.php'; ?>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="styles/bootstrap-4.1.2/popper.js"></script>
    <script src="styles/bootstrap-4.1.2/bootstrap.min.js"></script>
    <script src="plugins/greensock/TweenMax.min.js"></script>
    <script src="plugins/greensock/TimelineMax.min.js"></script>
    <script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
    <script src="plugins/greensock/animation.gsap.min.js"></script>
    <script src="plugins/greensock/ScrollToPlugin.min.js"></script>
    <script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
    <script src="plugins/easing/easing.js"></script>
    <script src="plugins/progressbar/progressbar.min.js"></script>
    <script src="plugins/parallax-js-master/parallax.min.js"></script>
    <script src="plugins/colorbox/jquery.colorbox-min.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>