@extends('front.includes.main')
@section('content')
	<div id="page">
@include('front.includes.header')


	<main>
		<section class=" version_1">
			<div class="wrapper">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div style="height: 450px" class="carousel-item active">
                            <img style="background-position: center;" src="https://guardian.ng/wp-content/uploads/2018/06/FEC-meeting.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div style="height: 450px" class="carousel-item">
                            <img src="https://prod-001.s3.amazonaws.com/media/articleImages/New_PIctutee.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div style="height: 450px" class="carousel-item">
                            <img  style="background-position: center;" src="https://westernpostnigeria.com/wp-content/uploads/2019/10/EF9bKDpW4AAIpew.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="container margin_60_35">
			<div class="main_title_3">
					<h2>Notice</h2>
					<p>Do Make Sure You Read The Notice Carefully.</p>
				</div>
			<div class="row justify-content-center">
				<div class="container">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Qualification For Reviewer
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>1. Professional bodies with registration number</p>
                                    <p>2. At least each state can have a professional body, that simply means every state is allowed to register upto eleven (11) professional body</p>
                                    <p>
                                    <div class="list-group col-6">
                                        <button type="button" class="list-group-item list-group-item-action active">
                                          3.  Every LGA are allowed to register upto
                                        </button>
                                        <button type="button" class="list-group-item list-group-item-action">20 persons from the Academia</button>
                                        <button type="button" class="list-group-item list-group-item-action">20 persons from the Opposition Party</button>
                                        <button type="button" class="list-group-item list-group-item-action">20 persons from the Religious</button>
                                        <button type="button" class="list-group-item list-group-item-action">20 persons from the Traditional Council</button>
                                    </div>
                                    </p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->

		<div class="bg_color_1">
		<div class="container margin_60">
			<div class="main_title_3">
				<h2>Latest Reviews</h2>
				<p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
				<a href="reviews-page.html">View all</a>
			</div>

			<div id="reccomended" class="owl-carousel owl-theme">
				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="img/avatar1.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Jhon Doe</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Avesome Experience"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="img/avatar2.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Marika</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Great products"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="img/avatar3.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Lukas Lee</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Excellent Support"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="img/avatar4.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Margaret</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Perfect"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="reviews-page.html" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>

				<div class="item">
					<div class="review_listing">
						<div class="clearfix">
							<figure><img src="img/avatar5.jpg" alt=""></figure>
							<span class="rating"><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star"></i><i class="icon_star empty"></i><em>4.50/5.00</em></span>
							<small>Shops</small>
						</div>
						<h3><strong>Mark Twain</strong> reviewed <a href="reviews-page.html">Fnac</a></h3>
						<h4>"Shipping Very Fast"</h4>
						<p>Et nec tantas accusamus salutatus, sit commodo veritus te</p>
						<ul class="clearfix">
							<li><small>Published: 26.08.2018</small></li>
							<li><a href="#0" class="btn_1 small">Read review</a></li>
						</ul>
					</div>
				</div>

			</div>
			<!-- /carousel -->
		</div>
		<!-- /container -->
		</div>
		<!-- /bg_color_1 -->

		<div class="call_section_3">
			<div class="wrapper">
				<div class="container clearfix">
					<div class="col-lg-5 col-md-7 float-right">
						<h3>Let's Help You</h3>
						<p>Vanno is a review platform open to everyone. Share your experiences to help others make better choices, and help companies up their game. Our mission is to bring people and companies together to create experiences for everyone.</p>
						<p><a class="btn_1 add_top_10 wow bounceIn" href="pricing.html" data-wow-delay="0.5s">Join Vanno Now!</a></p>
					</div>
				</div>
				<!-- /container -->
			</div>
		</div>
		<!-- /call_section -->

	</main>
	<!-- /main -->

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
	</div>
	<!-- page -->

	<div id="toTop"></div><!-- Back to top button -->



@endsection
