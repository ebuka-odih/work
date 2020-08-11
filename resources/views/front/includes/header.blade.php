<header class="header menu_fixed">
    <div id="logo">
        <a href="index.html">
            <img src="img/logo.svg" width="140" height="35" alt="" class="logo_normal">
            <img src="img/logo_sticky.svg" width="140" height="35" alt="" class="logo_sticky">
        </a>
    </div>
    <ul id="top_menu">
        <li><a href="{{ route('write-review') }}" class="btn_top">Log in</a></li>
        <li><a  href="#sign-in-dialog" class="btn_top company" id="sign-in">Sign Up</a></li>
{{--        <li><a href="#sign-in-dialog" id="sign-in" class="login" title="Sign In">Sign In</a></li>--}}
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


<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign Up</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
{{--            <a href="#0" class="social_bt facebook">Login with Facebook</a>--}}
{{--            <a href="#0" class="social_bt google">Login with Google</a>--}}

        <h4 class="text text-center">Choose Your Role</h4>
            <div class="text-center">
                <a href="#"><input type="submit" value="Uploader" class="btn_1 full-width"></a>
            </div>
            <div class="divider"><span>Or</span></div>

            <div class="text-center">
                <a href="#"><input type="submit" value="Reviewer" class="btn_1 full-width"></a>
            </div>
            <div class="divider"><span>Or</span></div>

            <div class="text-center">
                <a href="#"><input type="submit" value="General Public" class="btn_1 full-width"></a>
            </div>

        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->
