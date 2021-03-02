<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-none d-lg-block">
    <div class="container d-flex">
        <div class="contact-info mr-auto">
            <i class="icofont-envelope"></i><a href="mailto:longshare9201@gmail.com">longshare9201@gmail.com</a>
            <i class="icofont-phone"></i> 0939 657 348
        </div>
        <div class="social-links">
            <a target="_blank" href="https://www.facebook.com/longnguyen8457/" class="facebook"><i class="icofont-facebook"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UChHEOQJ8hAlBsUoCto1WmPQ" class="youtube"><i class="icofont-youtube-play"></i></a>
            <a target="_blank" href="https://www.instagram.com/kimlong7372" class="instagram"><i class="icofont-instagram"></i></a>
        </div>
    </div>
</section>

<!-- ======= Header ======= -->
<div id="header-sticky-wrapper" class="sticky-wrapper" style="height: 70px;">
    <header id="header">
        <div class="container d-flex">

            <div class="logo mr-auto">
                <h1 class="text-light"><a href="{{ url('/') }}"><span>Eterna</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="index.html">Home</a></li>

                    <li class="drop-down"><a href="#">About</a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="team.html">Team</a></li>
                            <li class="drop-down"><a href="#">Drop Down 2</a>
                                <ul>
                                    <li><a href="#">Deep Drop Down 1</a></li>
                                    <li><a href="#">Deep Drop Down 2</a></li>
                                    <li><a href="#">Deep Drop Down 3</a></li>
                                    <li><a href="#">Deep Drop Down 4</a></li>
                                    <li><a href="#">Deep Drop Down 5</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>

                    <li><a href="services.html">Services</a></li>
                    <li><a href="portfolio.html">Portfolio</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    @if(Auth::check())
                        <li class="drop-down">
                            <a href="contact.html">
                                <i class="fa fa-user"></i>
                                <span style="color: green;">{{ Auth::user()->name }}</span>
                            </a>
                            <ul>
                                <li><a href="{{ route('user.profile') }}">Trang cá nhân</a></li>
                                <li><a href="{{ route('user.logout') }}">Đăng xuất</a></li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('user.login.get') }}">Đăng nhập</a></li>
                    @endif

                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header>
</div><!-- End Header -->
