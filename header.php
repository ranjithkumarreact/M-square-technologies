<!-- Start header
    ============================================= -->
<header class="header">
	<div class="main-navigation">
		<div class="main-wrapper">
			<div class="navbar navbar-expand-lg">
				<!-- <div class="navbar navbar-expand-lg bsnav bsnav-sticky bsnav-sticky-slide bsnav-transparent"> -->
				<div class="container">
					<a class="navbar-brand" href="index.html">
						<img src="assets/new-images/m-square_logo.png" class="logo-display" alt="thumb">
						<img src="assets/new-images/m-square_logo.png" class="logo-scrolled" alt="thumb">
					</a>
					<button class="navbar-toggler toggler-spring"><span class="navbar-toggler-icon"></span></button>
					<div class="collapse navbar-collapse justify-content-md-center">
						<ul class="navbar-nav navbar-mobile mr-0">
							<li class="nav-item dropdown fadeup">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item"><a class="nav-link" href="javascript:void(0);">About Us</a></li>

							<li class="nav-item dropdown fadeup">
								<a class="nav-link" href="javascript:void(0);">What We do <i class="ti-angle-down"></i></a>

								<ul class="dropdown-content">
									<li class="nav-item"><a  href="salesforce.php">Salesforce</a></li>
									
								</ul>
							</li>



							<li class="nav-item dropdown fadeup">
								<a class="nav-link" href="#">Who We are <i class="ti-angle-down"></i></a>
							</li>
							<li class="nav-item"><a class="nav-link" href="javascript:void(0);">Blog</a></li>
						</ul>
					</div>
					<div class="search-cart nav-profile">
						<a href="javascript:void(0);" class="btn-1 btn-second btn-sm">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="bsnav-mobile">
				<div class="bsnav-mobile-overlay"></div>
				<div class="navbar">
					<img src="assets/new-images/m-square_logo.png" class="logo-scrolled" alt="thumb">
				</div>
			</div>
		</div>
	</div>
</header>
<!-- End header -->


<script>
	document.addEventListener('scroll', function() {
		var a = document.querySelector('.navbar');

		if (window.scrollY > 100) {
			a.classList.add('sticky');
		} else {
			a.classList.remove('sticky');
			a.classList.remove('normal');
		}
	})
</script>