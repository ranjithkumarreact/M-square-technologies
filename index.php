<!doctype html>
<html class="no-js" lang="zxx">


<?php include 'header-link.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

<style>
	.banner-carousel {
		position: relative;
	}

	.banner-carousel .item {
		background-size: cover;
		background-repeat: no-repeat;
		/* padding: 102px 0px; */
		height: 581px;
	}

	.banner-carousel .item::before {
		position: absolute;
		background-color: #000;
		width: 100%;
		height: 100%;
	}

	.banner-carousel .owl-dots {
		position: absolute;
		right: 5%;
		bottom: 10%;
		display: flex;
		flex-direction: column;
	}

	.banner-carousel .item .content-box h2 {
		color: #fff;
	}

	/* Basic styles for the hero section */
	.hero-section {
		position: relative;
		width: 100%;

		overflow: hidden;
	}

	/* Style for each banner item */
	.item {
		position: relative;
		width: 100%;
		height: 100%;
		background-size: cover;
		background-position: center;
	}

	/* Container for bars (navigation items) */
	.bars-container {
		display: flex;
		position: absolute;
		bottom: 30px;
		right: 100px;
		transform: rotate(180deg);
	}

	/* Individual bar styles */
	.bar {
		background: rgba(0, 0, 0, 0.5);
		padding: 10px 20px;
		margin: 0 5px;
		border-radius: 5px;
		transition: background 0.3s;
		opacity: 0;
		/* Initially hidden */
		transform: translateY(-100%);
	}

	.bar:hover {
		background: rgba(0, 0, 0, 0.8);
	}


	/* Define custom animation classes */
	@keyframes slideInBottom {
		0% {
			transform: translateY(-100%);
			opacity: 1;
		}

		100% {
			transform: translateY(0);
			opacity: 1;
		}
	}

	@keyframes slideOutTop {
		0% {
			transform: translateY(-100%);
			opacity: 1;
		}

		100% {
			transform: translateY(0);
			opacity: 1;
		}
	}

	.banner-carousel .owl-item {
		animation: slideInBottom 1s ease;
	}

	.banner-carousel .owl-item.active {
		animation: slideOutTop 1s ease;
	}


	/* @keyframes slideIn {
		from {
			opacity: 0;
			transform: translateY(-100%);
		}

		to {
			opacity: 1;
			transform: translateY(0);
		}
	} */

	/* .slide-in-bars {
		animation: slideIn 1s forwards;
	} */
</style>

<body id="bdy">

	<?php include 'header.php' ?>

	<main class="main">

		<div class="hero-section">
			<div class="banner-carousel owl-carousel owl-theme">

				<div class="item" style="background-image:url(./assets/new-images/banner-1.jpg); background-position:center; background-size:cover;">
					<div class="container">
						<div class="content-box">
							<h1>Data</h1>
							<p>Our team understands data, from its complex architecture to its optimal visualisation. At MSquare Technologies, we combine data strategy and AI expertise to provide you with comprehensive support and guidance throughout your data journey.</p>

						</div>
					</div>
				</div>


				<div class="item" style="background-image:url(./assets/new-images/banner-2.jpg); background-position:center; background-size:cover;">
					<div class="container">
						<div class="content-box">
							<h1>Data</h1>
							<p>Our team understands data, from its complex architecture to its optimal visualisation. At MSquare Technologies, we combine data strategy and AI expertise to provide you with comprehensive support and guidance throughout your data journey.</p>

						</div>
					</div>
				</div>

				<div class="item" style="background-image:url(./assets/new-images/banner-3.jpg); background-position:center; background-size:cover;">
					<div class="container">
						<div class="content-box">
							<h1>Data</h1>
							<p>Our team understands data, from its complex architecture to its optimal visualisation. At MSquare Technologies, we combine data strategy and AI expertise to provide you with comprehensive support and guidance throughout your data journey.</p>

						</div>
					</div>
				</div>


				<div class="item banner-4" style="background-image:url(./assets/new-images/banner-4.jpg); background-position:center; background-size:cover;">
					<div class="container">
						<div class="content-box">
							<h1>Data</h1>
							<p>Our team understands data, from its complex architecture to its optimal visualisation. At MSquare Technologies, we combine data strategy and AI expertise to provide you with comprehensive support and guidance throughout your data journey.</p>

						</div>
					</div>
				</div>

			</div>
		</div>

		<section class="about-us-section de-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="site-title" style="margin-bottom: 3rem;">
							<h2 class="up-title mb-30">
								Our Mission
							</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 left-sec">
						<p class="text-justify">Our mission at MSquare Technologies is to revolutionize the way businesses approach staffing and technology solutions. We aim to redefine industry standards by delivering unparalleled service and expertise to our clients.</p>
						<p class="text-justify" style="margin-top: 10px;">Through a relentless pursuit of excellence, innovation, and customer satisfaction, we aspire to become the premier partner for organizations seeking to achieve their goals and maximize their potential.</p>
					</div>
					<div class="col-lg-6 col-md-6 right-sec">
						<p class="text-justify">MSquare Technologies is to empower businesses by providing exceptional staffing solutions and technology services. We are committed to delivering top-tier talent and innovative solutions that drive success for our clients</p>
						<h5 class="text-justify">With a focus on excellence, integrity, and collaboration, we strive to be the trusted partner that helps organizations.</h5>
					</div>
				</div>
			</div>
		</section>

		<section class="what-we-do de-padding" style="background-color: #f5f5f5;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="site-title">
							<h2 class="up-title mb-30">
								Our Services
							</h2>
						</div>
					</div>

				</div>
				<div class="row row-one">
					<div class="col-lg-6 col-md-6 grid-col">
						<div class="inner-box">
							<img src="./assets/new-images/salesforce.jpg" alt="" />
							<div class="second-inner-box">
								<div>
									<img src="./assets/new-images/demo-img-1.svg" alt="" />
								</div>
								<div class="cn-box">
									<h4>Salesforce</h4>
									<p>Salesforce is a leading cloud-based customer relationship management (CRM) platform that helps businesses streamline their sales, service, marketing, and more.</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 grid-col">
						<div class="inner-box">
							<img src="./assets/new-images/data and AI.jpg" alt="" />
							<div class="second-inner-box">
								<div>
									<img src="./assets/new-images/icon-3.png" alt="" />
								</div>
								<div class="cn-box">
									<h4>Data & AI</h4>
									<p>Salesforce Data & AI integrates advanced data analytics and artificial intelligence to empower businesses with actionable insights and predictive capabilities.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-two">
					<div class="col-lg-4 col-md-4 grid-col">
						<div class="inner-box">
							<img src="./assets/new-images/cloud.jpg" alt="" />
							<div class="second-inner-box">
								<div>
									<img src="./assets/new-images/icon-4.png" alt="" />
								</div>
								<div class="cn-box">
									<h4>Cloud</h4>
									<p>The cloud, in the context of computing, refers to the delivery of computing services – including servers, storage, databases, networking, software, analytics, and intelligence – over the Internet.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 grid-col">
						<div class="inner-box">
							<img src="./assets/new-images/application development.jpg" alt="" />
							<div class="second-inner-box">
								<div>
									<img src="./assets/new-images/icon-2.png" alt="" />
								</div>
								<div class="cn-box">
									<h4>Application Development</h4>
									<p>Application development involves the creation, design, and implementation of software applications for specific purposes or tasks. </p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-4 grid-col">
						<div class="inner-box">
							<img src="./assets/new-images/get in touch.jpg" style="height: 350px;" alt="" />
							<div class="second-inner-box">
								<div>
									<img src="./assets/new-images/icon-1.png" alt="" />
								</div>
								<div class="cn-box">
									<h4>Staff Augmentation</h4>
									<p>Staff augmentation is a business strategy where companies hire external personnel, often through third-party providers, to supplement their existing workforce for a temporary period.</p>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</section>

		<section class="client-carousel-section de-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="site-title">
							<h2 class="up-title mb-30">
								Our Clients
							</h2>
						</div>
					</div>
				</div>
				<div class="client-carousel owl-carousel owl-theme">
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
					<div class="item">
						<img src="./assets/new-images/m-square_logo.png" alt="image" />
					</div>
				</div>
			</div>
		</section>

		<div class="contact-area de-padding" style="background-color: #f5f5f5;">
			<div class="container">
				<div class="contact-wpr">
					<div class="row g-5">
						<div class="col-xl-4">
							<div class="contact-sdebar">
								<div class="contact-up-title mb-30">

									<h2 class="up-title mb-30">
										Get in Touch
									</h2>
									<p class="mb-0">
										Have a project in mind? No need to be shy, drop us a note and tell us how we can help realise your vision.
									</p>
								</div>
								<div>
									<img src="./assets/new-images/get-in-touch-contact-us.jpg" style="border-radius: 10px;" alt="" />
								</div>
							</div>
						</div>
						<div class="col-xl-8">
							<div class="contact-page">
								<form action="javascript:void(0);" method="POST" class="contact-form contact-cnt">

									<div class="row">
										<div class="col-xl-6">
											<div class="col-md-12">
												<div class="form-group">
													<label>Name <span style="color: red;">*</span></label>
													<input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name*">
													<span class="alert alert-error"></span>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<label>Email <span style="color: red;">*</span></label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Your Email Address*">
													<span class="alert alert-error"></span>
												</div>
											</div>

										</div>
										<div class="col-xl-6">
											<div class="col-md-12">
												<div class="form-group">
													<label>Company <span style="color: red;">*</span></label>
													<input type="text" class="form-control" id="company" name="company" placeholder="Your Company*">
													<span class="alert alert-error"></span>
												</div>
											</div>
											<div class="col-md-12">
												<label>Message <span style="color: red;">*</span></label>
												<textarea class="form-control" id="comment" name="comments" placeholder="Your Message..."></textarea>
											</div>
										</div>
									</div>
									<div class="sub-btn">
										<div class="contact-sub-btn">
											<button type="submit" name="submit" id="submit" class="btn-1 btn-second btn-sm">
												Submit
												<i class="fas fa-chevron-right"></i>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<section class="testimonial-section de-padding" style="background-image:url(./assets/new-images/backgournd-design-testimonial.jpg); background-repeat:no-repeat;">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="site-title d-flex" style="justify-content: space-between;">

							<h2 class="up-title mb-30" style="color: #0ab5f8;">
								Testimonial
							</h2>

						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="testimonial-carousel owl-carousel owl-theme">
							<div class="item">
								<div class="inner-box">
									<div class="text-content">
										<p class="text-justify">
											"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt cupiditate culpa quod labore reprehenderit numquam ratione minima nesciunt inventore dolorum, odio adipisci minus illum voluptate aliquam rem, velit eum natus! "
										</p>
									</div>
									<div class="d-flex" style="margin-top: 30px;">
										<div>
											<img src="./assets/img/pictures/user-1-s.png" alt="" />
										</div>
										<div class="px-4">
											<h5 class="mb-0">John Smith</h5>
											<span>Project Manager</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inner-box">
									<div class="text-content">
										<p class="text-justify">
											"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt cupiditate culpa quod labore reprehenderit numquam ratione minima nesciunt inventore dolorum, odio adipisci minus illum voluptate aliquam rem, velit eum natus! "
										</p>
									</div>
									<div class="d-flex" style="margin-top: 30px;">
										<div>
											<img src="./assets/img/pictures/user-1-s.png" alt="" />
										</div>
										<div class="px-4">
											<h5 class="mb-0">John Smith</h5>
											<span>Project Manager</span>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="inner-box">
									<div class="text-content">
										<p class="text-justify">
											"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt cupiditate culpa quod labore reprehenderit numquam ratione minima nesciunt inventore dolorum, odio adipisci minus illum voluptate aliquam rem, velit eum natus! "
										</p>
									</div>
									<div class="d-flex" style="margin-top: 30px;">
										<div>
											<img src="./assets/img/pictures/user-1-s.png" alt="" />
										</div>
										<div class="px-4">
											<h5 class="mb-0">John Smith</h5>
											<span>Project Manager</span>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>
				</div>
			</div>
		</section>

		<div class="blog-area-2 de-padding pos-rel" style="background-color: #fff;">

			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="site-title d-flex" style="justify-content: space-between;">
							<h2 class="up-title mb-30">
								Our Blogs
							</h2>
							<div>
								<a href="javascript:void(0);" class="btn-1 btn-second btn-sm">Read More</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="blog-wpr-2 grid-3"> -->
				<div class="row second-row">
					<div class="col-lg-12 col-md-12 col-sm-12">
						<div class="blog-carousel owl-carousel owl-theme">
							<div class="blog-inner-box">
								<div class="blog-pic-2">
									<img src="assets/img/pictures/blog-2-1.jpg" alt="no image">
								</div>
								<div class="blog-desc-2">
									<div class="blog-mta-2 mb-1">
										<span>
											<i class="fal fa-calendar-week"></i>
											26 May, 2023
										</span>

									</div>
									<div class="blog-content-2">
										<a href="javascript:void(0);">
											<h4 class="heading-4">
												Transforming Government Services with Digital Solutions
											</h4>
										</a>
										<p class="text-justify mb-0">
											Government agencies handle vast amounts of sensitive information, including citizen data, national security intelligence, and classified documents. Effective cybersecurity measures are essential to safeguard this information from unauthorized access, breaches, and cyber threats.
										</p>
									</div>
								</div>
							</div>
							<div class="blog-inner-box">
								<div class="blog-pic-2">
									<img src="assets/img/pictures/blog-2-2.jpg" alt="no image">
								</div>
								<div class="blog-desc-2">
									<div class="blog-mta-2 mb-1">
										<span>
											<i class="fal fa-calendar-week"></i>
											29 May, 2023
										</span>

									</div>
									<div class="blog-content-2">
										<a href="javascript:void(0);">
											<h4 class="heading-4">
												The Importance of Cybersecurity in Government IT
											</h4>
										</a>
										<p class="text-justify mb-0">
											Government IT systems store and manage classified information vital to national security, including defense strategies, intelligence data, and critical infrastructure details. Robust cybersecurity measures are essential to prevent unauthorized access, espionage, or sabotage by hostile entities.
										</p>
									</div>
								</div>
							</div>
							<div class="blog-inner-box">
								<div class="blog-pic-2">
									<img src="assets/img/pictures/blog-2-3.jpg" alt="no image">
								</div>
								<div class="blog-desc-2">
									<div class="blog-mta-2 mb-1">
										<span>
											<i class="fal fa-calendar-week"></i>
											30 May, 2023
										</span>

									</div>
									<div class="blog-content-2">
										<a href="javascript:void(0);">
											<h4 class="heading-4">
												Best Practices for Successful IT Project Management
											</h4>
										</a>
										<p class="text-justify mb-0">
											Foster open and transparent communication among project stakeholders, team members, and sponsors. Use collaboration tools, regular meetings, and status reports to keep everyone informed and engaged throughout the project lifecycle.
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- </div> -->
			</div>
		</div>

	</main>


	<?php include 'footer.php' ?>

	<a href="#bdy" id="scrtop" class="smooth-menu"><i class="ti-arrow-up"></i></a>

	<script src="assets/js/jquery-3.7.0.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/bsnav.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/imagesloaded.pkgd.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/count-to.js"></script>
	<script src="assets/js/progress-bar.min.js"></script>
	<script src="assets/js/jquery.easypiechart.js"></script>
	<script src="assets/js/typed.js"></script>
	<script src="assets/js/YTPlayer.min.js"></script>
	<script src="assets/js/jquery.appear.js"></script>
	<script src="assets/js/jquery.easing.min.js"></script>
	<script src="assets/js/swiper-bundle.min.js"></script>
	<script src="assets/js/active-class.js"></script>
	<script src="assets/js/jquery-ui.min.js"></script>
	<script src="assets/js/main.js"></script>

</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<script>
	$(document).ready(function() {
		$(".client-carousel").owlCarousel({
			loop: true,
			margin: 10,
			nav: false,
			dots: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		});
	});
</script>


<script>
	$(document).ready(function() {
		$(".banner-carousel").owlCarousel({
			items: 1,
			loop: true,
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: false,

			onChanged: slideInBars
		});

		function slideInBars(event) {
			// Remove animation class from all bars
			$('.bars-container .bar').removeClass('slide-in-bars');

			// Get the current item being shown
			var currentItem = event.item.index;

			// Select the bars container in the current item
			var barsContainer = $(event.target).find('.owl-item').eq(currentItem).find('.bars-container .bar');

			// Add animation class to slide in bars
			barsContainer.each(function(index) {
				$(this).css('animation-delay', index * 0.3 + 's'); // Stagger the animations
				$(this).addClass('slide-in-bars');
			});
		}
	});

	// Function to check if element is in viewport
	function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return (
			rect.top >= 0 &&
			rect.left >= 0 &&
			rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
	}

	// Check if bars-container is in viewport and add slide-in-bars class
	function checkBarsInView() {
		$('.bars-container .bar').each(function() {
			if (isElementInViewport(this)) {
				$(this).addClass('slide-in-bars');
			}
		});
	}

	// Listen for scroll events
	$(window).on('scroll', checkBarsInView);
	// Trigger the function on load
	$(window).on('load', checkBarsInView);
</script>



<script>
	$(document).ready(function() {
		$(".blog-carousel").owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			dots: false,
			navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
			animateOut: 'slideOutUp',
			animateIn: 'slideInUp',
			autoplay: false,
			autoplayTimeout: 3000, // 3 seconds

			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			},

		});
	});
</script>

<script>
	$(document).ready(function() {
		$(".testimonial-carousel").owlCarousel({
			loop: true,
			margin: 10,
			nav: true,
			dots: false,
			navText: ['<i class="fas fa-arrow-left"></i>', '<i class="fas fa-arrow-right"></i>'],
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 1
				}
			}
		});
	});
</script>

</html>