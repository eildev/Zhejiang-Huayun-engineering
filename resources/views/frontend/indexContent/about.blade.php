@php
$aboutIntro = App\Models\AboutInroduction::all()->first();
$about = App\Models\AboutSettings::all()->first();
$testimonial = App\Models\Testimonial::all()->first();
@endphp
<div class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="wow slideInLeft">
						<div class="about-thumb">
							<img src="{{asset('uploads/about/'.$about->image)}}" alt="">
							<div class="about-counter">
								<div class="about-counter-text">
									<div class="about-numbar">
										<h4 class="counter">29</h4>
										<span>+</span>
									</div>    
									<div class="about-text">
										<h5>Years Exprience</h5>
									</div>
								</div>
							</div>
							<div class="about-counter-two d-flex align-items-center ">
								<div class="about-counter-img">
									<img src="{{asset('uploads/testimonial/'.$testimonial->image) ?? ''}}" alt="">
								</div>
								<div class="about-number-two">
									<h4 class="counter">2900</h4>
									<span>+</span>
									<h5>Satisfied Clients</h5>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="about-section-title">
						<div class="about-section-sub-title wow slideInUp">
							<h4>Our Introductton</h4>
						</div>
						<div class="about-section-main-title wow slideInRight">
							<h2>We're Developing Future
								Solar Solutions </h2>
						</div>
					</div>
					<!-- tab -->
					<div class="tab">
						<ul class="tabs active wow slideInRight">
							<li class="current"><a href="#">About Us <i class="bi bi-arrow-up-right"></i></a></li>
							<li class=""><a href="#">Mission <i class="bi bi-arrow-up-right"></i></a></li>
							<li class=""><a href="#">Vision <i class="bi bi-arrow-up-right"></i></a></li>
						</ul> <!-- / tabs -->
			
						 <div class="tab_content">
							<!-- / tabs_item -->
							<div class="tabs_item" style="">
								<div class="tabs-items-content">
									<p>
										{!!$aboutIntro->about!!}
									</p>
										<div class="solar-btn about wow slideInDown">
											<a href="#">Our Service <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>
							</div>
							<!-- / tabs_item -->
							<div class="tabs_item" style="display: none;">
								<div class="tabs-items-content">
									
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="about-list">
												<ul>
													<li><i class="bi bi-chevron-double-right"></i> Best Insurance Agency</li>
													<li><i class="bi bi-chevron-double-right"></i> Trusted & Experience</li>
													<li><i class="bi bi-chevron-double-right"></i> Key Managerial Persons</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="about-list">
												<ul>
													<li><i class="bi bi-chevron-double-right"></i> Dedicated Support</li>
													<li><i class="bi bi-chevron-double-right"></i> Board Composition</li>
													<li><i class="bi bi-chevron-double-right"></i> Board Committees Voluptat</li>
												</ul>
											</div>
										</div>
										<div class="solar-btn about">
											<a href="#">Our Service <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>		
							</div>
							<!-- / tabs_item -->
							<div class="tabs_item" style="display: none;">
								<div class="tabs-items-content">
									<div class="about-content-discription">
										<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
											laudantium, totam aperiam, eaquecy epsa abillo inventore veritatis architecto beatae</p>
									</div>
									<div class="row">
										<div class="col-lg-6 col-md-6">
											<div class="about-list">
												<ul>
													<li><i class="bi bi-chevron-double-right"></i> Best Insurance Agency</li>
													<li><i class="bi bi-chevron-double-right"></i> Trusted & Experience</li>
													<li><i class="bi bi-chevron-double-right"></i> Key Managerial Persons</li>
												</ul>
											</div>
										</div>
										<div class="col-lg-6 col-md-6">
											<div class="about-list">
												<ul>
													<li><i class="bi bi-chevron-double-right"></i> Dedicated Support </li>
													<li><i class="bi bi-chevron-double-right"></i> Board Composition</li>
													<li><i class="bi bi-chevron-double-right"></i> Board Committees Voluptat</li>
												</ul>
											</div>
										</div>
										<div class="solar-btn about">
											<a href="#">Our Service <i class="bi bi-arrow-right"></i></a>
										</div>
									</div>
								</div>		
							</div>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>