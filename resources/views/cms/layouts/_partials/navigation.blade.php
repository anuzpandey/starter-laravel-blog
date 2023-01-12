<!--====== NAVBAR ONE PART START ======-->
<section class="navbar-area navbar-one">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<nav class="navbar navbar-expand-lg">
					<a class="navbar-brand" href="javascript:void(0)">
						<img src="https://cdn.ayroui.com/1.0/images/white-logo.svg" alt="Logo"/>
					</a>
					<button
						class="navbar-toggler"
						type="button"
						data-bs-toggle="collapse"
						data-bs-target="#navbarOne"
						aria-controls="navbarOne"
						aria-expanded="false"
						aria-label="Toggle navigation"
					>
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
						<span class="toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse sub-menu-bar" id="navbarOne">
						<ul class="navbar-nav m-auto">
							<li class="nav-item">
								<a
									class="page-scroll active"
									data-bs-toggle="collapse"
									data-bs-target="#sub-nav1"
									aria-controls="sub-nav1"
									aria-expanded="false"
									aria-label="Toggle navigation"
									href="javascript:void(0)"
								>
									About
									<div class="sub-nav-toggler">
										<span><i class="lni lni-chevron-down"></i></span>
									</div>
								</a>
								<ul class="sub-menu collapse" id="sub-nav1">
									<li><a href="javascript:void(0)">About Us</a></li>
									<li>
										<a
											class="page-scroll"
											data-bs-toggle="collapse"
											data-bs-target="#sub-nav2"
											aria-controls="sub-nav2"
											aria-expanded="false"
											aria-label="Toggle navigation"
											href="javascript:void(0)"
										>
											Our Portfolio
											<div class="sub-nav-toggler">
												<span><i class="lni lni-chevron-down"></i></span>
											</div>
										</a>
										<ul class="sub-menu collapse" id="sub-nav2">
											<li>
												<a href="javascript:void(0)">Portfolio Style 1</a>
											</li>
											<li>
												<a href="javascript:void(0)">Portfolio Style 2</a>
											</li>
											<li>
												<a href="javascript:void(0)">Portfolio Style 3</a>
											</li>
										</ul>
									</li>
									<li><a href="javascript:void(0)">Our Teams</a></li>
								</ul>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0)">Services</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0)">Resources</a>
							</li>
							<li class="nav-item">
								<a href="javascript:void(0)">Support</a>
							</li>
						</ul>
					</div>
					<div class="navbar-btn d-none d-sm-inline-block">
						<ul>
							<li>
								<a class="btn primary-btn-outline" href="javascript:void(0)"
								>Sign In</a
								>
							</li>
							<li>
								<a class="btn primary-btn" href="javascript:void(0)"
								>Sign Up</a
								>
							</li>
						</ul>
					</div>
				</nav>
				<!-- navbar -->
			</div>
		</div>
		<!-- row -->
	</div>
	<!-- container -->
</section>
<!--====== NAVBAR ONE PART ENDS ======-->

<script>
    //===== close navbar-collapse when a  clicked
    let navbarTogglerOne = document.querySelector(
        ".navbar-one .navbar-toggler"
    );
    navbarTogglerOne.addEventListener("click", function () {
        navbarTogglerOne.classList.toggle("active");
    });
</script>
