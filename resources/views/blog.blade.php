<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Page Title -->
    <title>Cropium Portfolio Template</title>

    <!-- Favicon Icon -->
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">

    <!-- CSS StyleSheet -->
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <!-- Preloader Starts -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
              </div>
        </div>
    </div>

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Navbar Starts -->
                    <nav class="navbar navbar-area navbar-expand-lg nav-style-02 nav-absolute">
                        <div class="container nav-container">
                            <div class="responsive-mobile-menu">
                                <div class="logo-wrapper">
                                    <a href="index" class="logo">
                                        <img src="assets/images/logo.png" alt="logo">
                                    </a>
                                </div>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cropium-main-menu"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="toggle-icon"></span>
                                    <span class="toggle-icon"></span>
                                    <span class="toggle-icon"></span>
                                </button>
                            </div>

                            <div class="collapse navbar-collapse" id="cropium-main-menu">
                                <ul class="navbar-nav">
                                    <li class="menu-item-has-children current-menu-item">
                                        <a href="#">home</a>
                                        <ul class="sub-menu">
                                            <li><a href="index">home 01</a></li>
                                            <li><a href="home-2">home 02</a></li>
                                        </ul>
                                    </li>
                                    <li class="no-children">
                                        <a href="about">about</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">blog</a>
                                        <ul class="sub-menu">
                                            <li><a href="blog">blog</a></li>
                                            <li><a href="blog-details">blog details</a></li>
                                        </ul>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">pages</a>
                                        <ul class="sub-menu">
                                            <li><a href="service">service</a></li>
                                            <li><a href="service-details">service details</a></li>
                                            <li><a href="portfolio">portfolio</a></li>
                                            <li><a href="portfolio-details">portfolio details</a></li>
                                            <li><a href="404">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="no-children">
                                        <a href="contact">contact</a>
                                    </li>
                                </ul>
                            </div>

                            <!-- Nav Right Content Starts -->
                            <div class="nav-right-content">
                                <a href="#" class="header-language active">en</a>
                                <a href="#" class="header-language">bn</a>
                                <a href="#" class="template-btn header-btn">hire me</a>
                            </div>
                            <!-- Nav Right Content End -->
                        </div>
                    </nav>
                    <!-- Navbar End -->
                </div>
            </div>
        </div>
    </header>

    <!-- Breadcrumb Area Starts -->
    <section class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="title">blog page</h2>
                    <a href="#">home</a><span> / blog page</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Area Starts -->
    @foreach ($posts as $post)
        <div class="blog-area padding-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <article class="cropium-blog-item">
                            <div class="blog-image">
                                <img src="{{ $post->thumbnail }}" alt="">
                                <div class="blog-date">
                                    <h5 class="{{ $post->content }}">
                                        {{ date("d",strtotime ($post->created_at) )}}</h5>
                                    <span>{{ date("M",strtotime ($post->created_at) )}}</span>
                                </div>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-user-o"></i>{{ $post->firstname }}</a></li>
                                        <li><a href="#"><i class="fa fa-bookmark-o"></i>{{ $post->lastname }}</a></li>
                                    </ul>
                                </div>
                                <h3 class="title"><a href="blog-details">{{ $post->id }} . {{ $post->title }}</a></h3>
                                <p>{{ $post->excerpt }}</p>
                            </div>
                        </article>
                    </div>
    @endforeach
                <!-- Blog Sidebar Starts -->
                <div class="col-lg-4">
                    <aside class="widget-area sidebar">
                        <div class="widget-search widget-style">
                            <div class="widget-title">
                                <h4 class="title">search</h4>
                            </div>
                            <form action="#">
                                <input type="text" placeholder="Search" class="input-shape">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>

                        <div class="widget-recent-post widget-style">
                            <div class="widget-title">
                                <h4 class="title">recent posts</h4>
                            </div>
                            <div class="single-post">
                                <div class="single-post-image">
                                    <img src="assets/images/recent-post-1.jpg" alt="">
                                </div>
                                <div class="single-post-content">
                                    <a href="#">about app development</a>
                                    <span>14 Oct 2020</span>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="single-post-image">
                                    <img src="assets/images/recent-post-2.jpg" alt="">
                                </div>
                                <div class="single-post-content">
                                    <a href="#">learn SQA</a>
                                    <span>14 Oct 2020</span>
                                </div>
                            </div>
                            <div class="single-post">
                                <div class="single-post-image">
                                    <img src="assets/images/recent-post-3.jpg" alt="">
                                </div>
                                <div class="single-post-content">
                                    <a href="#">digital marketing tools</a>
                                    <span>14 Oct 2020</span>
                                </div>
                            </div>
                        </div>

                        <div class="widget-social-links widget-style">
                            <div class="widget-title">
                                <h4 class="title">Follow us</h4>
                            </div>
                            <ul>
                                <li><a href="#"><span class="facebook-icon"><i class="fa fa-facebook-square"></i></span></a></li>
                                <li><a href="#"><span class="twitter-icon"><i class="fa fa-twitter-square"></i></span></a></li>
                                <li><a href="#"><span class="google-plus-icon"><i class="fa fa-google-plus-square"></i></span></a></li>
                                <li><a href="#"><span class="instagram-icon"><i class="fa fa-instagram"></i></span></a></li>
                            </ul>
                        </div>

                        <div class="widget-categories widget-style">
                            <div class="widget-title">
                                <h4 class="title">categories</h4>
                            </div>
                            <ul>
                                <li><a href="#">creative<span>(11)</span></a></li>
                                <li><a href="#">minimal<span>(02)</span></a></li>
                                <li><a href="#">portfolio<span>(10)</span></a></li>
                                <li><a href="#">modern<span>(09)</span></a></li>
                                <li><a href="#">agency<span>(03)</span></a></li>
                            </ul>
                        </div>
                        <!-- Widget Form Starts -->
                        <div class="widget-form">
                            <div class="request-quote-form">
                                <h4 class="title">request a free quote</h4>
                                <form action="#">
                                    <input type="text" placeholder="Name">
                                    <input type="email" placeholder="Email">
                                    <input type="text" placeholder="Phone">
                                    <textarea name="message" placeholder="Message"></textarea>
                                    <button type="submit">submit request</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
            <!-- Blog Pagination Starts -->
            <div class="row order-md-1">
                <div class="col-lg-12">
                    <div class="cropium-blog-pagination">

                        {{-- {{ $posts->links('vendor.pagination.bootstrap-5') }} --}}
                        {{ $posts->links('vendor.pagination.bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Call To Action Area Starts -->
    <section class="call-to-action">
        <div class="container">
            <div class="call-to-action-bg">
                <div class="call-to-action-shape">
                    <img src="assets/images/award-shape.png" alt="">
                </div>
                <div class="call-to-action-content">
                    <div class="call-to-action-title">
                        <h2 class="title">if you have any question feel free to call <span>120-2587863</span></h2>
                        <div class="margin-top-40">
                            <h6 class="title">It is a long established fact that <a href="#">sujonkhan@gmail.com</a> content of a page.</h6>
                        </div>
                    </div>
                    <div class="call-to-action-btn">
                        <a href="#" class="template-btn action-btn">get in touch</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Area Starts -->
    <footer class="footer-area">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-logo">
                            <a href="#"><img src="assets/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="index">home</a></li>
                                <li><a href="about">about</a></li>
                                <li><a href="contact">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <span>&copy; 2020, Cropium. All Rights Reserved.</span>
            </div>
        </div>
    </footer>


    <!-- Javascript -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/slick.min.js"></script>
    <script src="assets/js/easing.min.js"></script>
    <script src="assets/js/circle-progressbar.min.js"></script>
    <script src="assets/js/isotop.min.js"></script>
    <script src="assets/js/counterup.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
