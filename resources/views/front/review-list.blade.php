@extends('front.includes.main')
@section('content')

    <div id="page" class="theia-exception">
        @include('front.includes.header')
    <main>
        <div id="results">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-3 col-md-4 col-10">
                        <h1><strong>145</strong> result for "All categories"</h1>
                    </div>
                    <div class="col-xl-5 col-md-6 col-2">
                        <a href="#0" class="search_mob btn_search_mobile"></a> <!-- /open search panel -->
                        <div class="row no-gutters custom-search-input-2 inner">
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Search reviews for a company">
                                    <i class="icon_search"></i>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <select class="wide">
                                    <option>All Categories</option>
                                    <option>Shops</option>
                                    <option>Hotels</option>
                                    <option>Restaurants</option>
                                    <option>Bars</option>
                                    <option>Events</option>
                                    <option>Fitness</option>
                                </select>
                            </div>
                            <div class="col-xl-1 col-lg-1">
                                <input type="submit" value="Search">
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /row -->
                <div class="search_mob_wp">
                    <div class="custom-search-input-2">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Search reviews...">
                            <i class="icon_search"></i>
                        </div>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Where">
                            <i class="icon_pin_alt"></i>
                        </div>
                        <select class="wide">
                            <option>All Categories</option>
                            <option>Shops</option>
                            <option>Hotels</option>
                            <option>Restaurants</option>
                            <option>Bars</option>
                            <option>Events</option>
                            <option>Fitness</option>
                        </select>
                        <input type="submit" value="Search">
                    </div>
                </div>
                <!-- /search_mobile -->
            </div>
            <!-- /container -->
        </div>
        <!-- /results -->

        <div class="container margin_60_35">
            <div class="row">
                <aside class="col-lg-3" id="sidebar">
                    <div id="filters_col">
                        <a data-toggle="collapse" href="#collapseFilters" aria-expanded="false" aria-controls="collapseFilters" id="filters_col_bt">Filters </a>
                        <div class="collapse show" id="collapseFilters">
                            <div class="filter_type date_filter">
                                <h6>Date</h6>
                                <ul>
                                    <li>
                                        <label class="container_radio">All
                                            <input type="radio" id="all_2" name="filters_listing" value="all" checked data-filter="*" class="selected">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_radio">Latest
                                            <input type="radio" id="latest" name="filters_listing" value="latest" data-filter=".latest">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_radio">Oldest
                                            <input type="radio" id="oldest" name="filters_listing" value="oldest" data-filter=".oldest">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Category</h6>
                                <ul>
                                    <li>
                                        <label class="container_check">Restaurants <small>43</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Shops <small>33</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Bars <small>12</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Events <small>44</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter_type">
                                <h6>Rating</h6>
                                <ul>
                                    <li>
                                        <label class="container_check">Superb 9+ <small>34</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Very Good 8+ <small>21</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Good 7+ <small>15</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Pleasant 6+ <small>34</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--/collapse -->
                    </div>
                    <!--/filters col-->
                </aside>
                <!-- /aside -->

                <div class="col-lg-9">

                    <div class="isotope-wrapper">
                        <div class="row">

                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar1.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Avesome Experience"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te.Viderer petentium cu his. Tollit molestie suscipiantur his et...</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar2.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Great products"</h4>
                                    <p>Et nec tantas accusamus salutatus</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar3.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Excellent Support"</h4>
                                    <p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->
                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar4.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Shipping Very Fast"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar5.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Perfect"</h4>
                                    <p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar6.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Tom Jones</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Everything good"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->
                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar7.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Avesome Experience"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te.Viderer petentium cu his. Tollit molestie suscipiantur his et...</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar8.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Great products"</h4>
                                    <p>Et nec tantas accusamus salutatus</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item latest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Excellent Support"</h4>
                                    <p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->
                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar3.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Shipping Very Fast"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar6.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star-half"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Perfect"</h4>
                                    <p>Mucius doctus constituto pri at, ne cetero postulant pro. At vix utinam corpora, ea oblique moderatius usu. Vix id viris consul honestatis, an constituto deterruisset consectetuer pro.....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->

                            <div class="col-md-6 isotope-item oldest">
                                <div class="review_listing">
                                    <div class="clearfix add_bottom_15">
                                        <figure><img src="img/avatar8.jpg" alt=""></figure>
                                        <span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
                                        <small>Shops</small>
                                    </div>
                                    <h3><strong>Tom Jones</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
                                    <h4>"Everything good"</h4>
                                    <p>Et nec tantas accusamus salutatus, sit commodo veritus te, erat legere fabulas has ut. Rebum laudem cum ea, ius essent fuisset ut....</p>
                                    <ul class="clearfix">
                                        <li><small>Published: 26.08.2018</small></li>
                                        <li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /review_listing grid -->
                        </div>
                        <!-- /row -->
                    </div>
                    <!-- /isotope-wrapper -->

                    <p class="text-center"><a href="#0" class="btn_1 rounded add_top_15">Load more</a></p>

                </div>
                <!-- /col -->
            </div>
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
                        <li>
                            <div class="styled-select" id="currency-selector">
                                <select>
                                    <option value="US Dollars" selected>US Dollars</option>
                                    <option value="Euro">Euro</option>
                                </select>
                            </div>
                        </li>
                        <li><img src="img/cards_all.svg" alt=""></li>
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
    </div>

@endsection
