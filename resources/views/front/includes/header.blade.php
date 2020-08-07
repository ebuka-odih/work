<header class="header menu_fixed">
    <div id="logo">
        <a href="index.html">
            <img src="img/logo.svg" width="140" height="35" alt="" class="logo_normal">
            <img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="{{ route('write-review') }}" class="btn_top">Write a Review</a></li>
        <li><a href="companies-landing.html" class="btn_top company">For Companies</a></li>
        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>
    </ul>
    <!-- /top_menu -->
    <a href="#menu" class="btn_mobile">
        <div class="hamburger hamburger--spin" id="hamburger">
            <div class="hamburger-box">
                <div class="hamburger-inner"></div>
            </div>
        </div>
    </a>
    <!-- /btn_mobile -->
    <nav id="menu" class="main-menu">
        <ul>

            <li><span><a href="pricing.html">Home</a></span></li>
            <li><span><a href="#">Reviews</a></span></li>
            <li class="d-block d-sm-none"><span><a href="write-review.html" class="btn_top">Write a review</a></span></li>
        </ul>
    </nav>
</header>
<!-- /header -->
