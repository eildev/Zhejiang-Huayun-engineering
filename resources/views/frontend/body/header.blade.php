
<header class="solar-header-section" id="sticky-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3 col-md-6">
					<div class="logo">
						<a href="index.html"><img src="{{asset('frontend')}}/assets/images/logo.png" alt="logo"></a>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="solar-menu">
						<ul>
							<li><a href="{{url('/')}}">Home </a>
							
							</li>
							<li><a href="about-us.html">About</a></li>
							<li><a href="#">Services <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="service.html">Services</a></li>
										<li><a href="service-details.html">Service Details</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Projects <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="project-grid.html">Project Grid</a></li>
										<li><a href="project-details.html">Project Details</a></li>
									</ul>
								</div>
							</li>
							<li><a href="#">Pages <i class="fas fa-chevron-down"></i></a>
								<div class="sub-menu">
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
										<li><a href="team.html">Team</a></li>
										<li><a href="team-details.html">Team Details</a></li>
										<li><a href="faq.html">Faq</a></li>
										<li><a href="error.html">Error</a></li>
									</ul>
								</div>
							</li>
							<li><a href="{{route('contact.us')}}">Contacts</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="solar-search-button">
						
						<div class="solar-btn">
							<a href="{{route('contact.us')}}">Contact Us <i class="bi bi-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>