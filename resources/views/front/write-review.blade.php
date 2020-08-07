@extends('front.includes.main')
@section('content')
@include('front.includes.header')

    <main class="margin_main_container">
        <div class="container margin_60_35">
            <div class="row">
                <div class="col-lg-8">
                    <div class="box_general write_review">
                        <h1>Write a review of Good Electronics</h1>
                        <div class="rating_submit">
                            <div class="form-group">
                                <label class="d-block">Overall rating</label>
                                <span class="rating">
								<input type="radio" class="rating-input" id="5_star" name="rating-input" value="5 Stars"><label for="5_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="4_star" name="rating-input" value="4 Stars"><label for="4_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="3_star" name="rating-input" value="3 Stars"><label for="3_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="2_star" name="rating-input" value="2 Stars"><label for="2_star" class="rating-star"></label>
								<input type="radio" class="rating-input" id="1_star" name="rating-input" value="1 Star"><label for="1_star" class="rating-star"></label>
							</span>
                            </div>
                        </div>
                        <!-- /rating_submit -->
                        <div class="form-group">
                            <label>Title of your review</label>
                            <input class="form-control" type="text" placeholder="If you could say it in one sentence, what would you say?">
                        </div>
                        <div class="form-group">
                            <label>Your review</label>
                            <textarea class="form-control" style="height: 180px;" placeholder="Write your review to help others learn about this online business"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Add your photo (optional)</label>
                            <div class="fileupload"><input type="file" name="fileupload" accept="image/*"></div>
                        </div>
                        <div class="form-group">
                            <div class="checkboxes float-left add_bottom_15 add_top_15">
                                <label class="container_check">Eos tollit ancillae ea, lorem consulatu qui ne, eu eros eirmod scaevola sea. Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut. Viderer petentium cu his.
                                    <input type="checkbox">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <a href="confirm.html" class="btn_1">Submit review</a>
                    </div>
                </div>
                <!-- /col -->
                <div class="col-lg-4">
                    <div class="latest_review">
                        <h4>Recent reviews<br>for Good Electronics</h4>
                        <div class="review_listing">
                            <div class="clearfix add_bottom_10">
                                <figure><img src="img/avatar3.jpg" alt=""></figure>
                                <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                <small>Shops</small>
                            </div>
                            <h3><strong>Jhon Doe</strong></h3>
                            <h4>"Avesome Experience"</h4>
                            <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                            <ul class="clearfix">
                                <li><small>26.08.2018</small></li>
                                <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                            </ul>
                        </div>
                        <!-- /review_listing -->
                        <div class="review_listing">
                            <div class="clearfix add_bottom_10">
                                <figure><img src="img/avatar4.jpg" alt=""></figure>
                                <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                <small>Shops</small>
                            </div>
                            <h3><strong>Jhon Doe</strong></h3>
                            <h4>"Avesome Experience"</h4>
                            <p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
                            <ul class="clearfix">
                                <li><small>26.08.2018</small></li>
                                <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                            </ul>
                        </div>
                        <!-- /review_listing -->
                    </div>
                    <!-- /latest_review -->

                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </main>
    <!--/main-->

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a data-toggle="collapse" data-target="#collapse_ft_1" aria-expanded="false" aria-controls="collapse_ft_1" class="collapse_bt_mobile">
                        <h3>Quick Links</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_1">
                        <ul class="links">
                            <li><a href="#0">About us</a></li>
                            <li><a href="#0">Faq</a></li>
                            <li><a href="#0">Help</a></li>
                            <li><a href="#0">My account</a></li>
                            <li><a href="#0">Create account</a></li>
                            <li><a href="#0">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a data-toggle="collapse" data-target="#collapse_ft_2" aria-expanded="false" aria-controls="collapse_ft_2" class="collapse_bt_mobile">
                        <h3>Categories</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_2">
                        <ul class="links">
                            <li><a href="#0">Shops</a></li>
                            <li><a href="#0">Hotels</a></li>
                            <li><a href="#0">Restaurants</a></li>
                            <li><a href="#0">Bars</a></li>
                            <li><a href="#0">Events</a></li>
                            <li><a href="#0">View all</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a data-toggle="collapse" data-target="#collapse_ft_3" aria-expanded="false" aria-controls="collapse_ft_3" class="collapse_bt_mobile">
                        <h3>Contacts</h3>
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                    </a>
                    <div class="collapse show" id="collapse_ft_3">
                        <ul class="contacts">
                            <li><i class="ti-home"></i>97845 Baker st. 567<br>Los Angeles - US</li>
                            <li><i class="ti-headphone-alt"></i>+61 23 8093 3400</li>
                            <li><i class="ti-email"></i><a href="#0">info@domain.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <a data-toggle="collapse" data-target="#collapse_ft_4" aria-expanded="false" aria-controls="collapse_ft_4" class="collapse_bt_mobile">
                        <div class="circle-plus closed">
                            <div class="horizontal"></div>
                            <div class="vertical"></div>
                        </div>
                        <h3>Keep in touch</h3>
                    </a>
                    <div class="collapse show" id="collapse_ft_4">
                        <div id="newsletter">
                            <div id="message-newsletter"></div>
                            <form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
                                <div class="form-group">
                                    <input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
                                    <input type="submit" value="Submit" id="submit-newsletter">
                                </div>
                            </form>
                        </div>
                        <div class="follow_us">
                            <h5>Follow Us</h5>
                            <ul>
                                <li><a href="#0"><i class="ti-facebook"></i></a></li>
                                <li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
                                <li><a href="#0"><i class="ti-google"></i></a></li>
                                <li><a href="#0"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#0"><i class="ti-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /row-->
            <hr>
            <div class="row">
                <div class="col-lg-6">
                    <ul id="footer-selector">
                        <li>
                            <div class="styled-select" id="lang-selector">
                                <select>
                                    <option value="English" selected>English</option>
                                    <option value="French">French</option>
                                    <option value="Spanish">Spanish</option>
                                    <option value="Russian">Russian</option>
                                </select>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <ul id="additional_links">
                        <li><a href="#0">Terms and conditions</a></li>
                        <li><a href="#0">Privacy</a></li>
                        <li><span>© 2018 Vanno</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--/footer-->


<!-- Sign In Popup -->
<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
    <div class="small-dialog-header">
        <h3>Sign In</h3>
    </div>
    <form>
        <div class="sign-in-wrapper">
            <a href="#0" class="social_bt facebook">Login with Facebook</a>
            <a href="#0" class="social_bt google">Login with Google</a>
            <div class="divider"><span>Or</span></div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="clearfix add_bottom_15">
                <div class="checkboxes float-left">
                    <label class="container_check">Remember me
                        <input type="checkbox">
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
            </div>
            <div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
            <div class="text-center">
                Don’t have an account? <a href="register.html">Sign up</a>
            </div>
            <div id="forgot_pw">
                <div class="form-group">
                    <label>Please confirm login email below</label>
                    <input type="email" class="form-control" name="email_forgot" id="email_forgot">
                    <i class="icon_mail_alt"></i>
                </div>
                <p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
                <div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
            </div>
        </div>
    </form>
    <!--form -->
</div>
<!-- /Sign In Popup -->

<div id="toTop"></div><!-- Back to top button -->

@endsection


