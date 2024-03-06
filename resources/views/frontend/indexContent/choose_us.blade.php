@php

$chooseUs = App\Models\WhyChooseUsDetails::all()->first();
@endphp
<div class="choose-us-section mt-5">
		<div class="container">
			<div class="row choose" style="background-image: url({{asset('uploads/why-choose-us/'.$chooseUs->icon)}})!important;">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow animate__slideInUp">
						<div class="section-sub-title choose ">
							<h4>Why Choose Us</h4>
						</div>
						<div class="section-main-title choose">
							<h2>{{$chooseUs->title}}</h2>
						</div>
					</div>
					<div class="choose-us-discription wow animate__slideInUp">
						<p>{!!$chooseUs->description!!}</p>
					</div>
					<div class="choose-us-content wow animate__zoomIn">
						<div class="choose-us-info">
							<div class="solar-btn choose">
								<a href="#">Contact Now <i class="bi bi-arrow-right"></i></a>
							</div>
							<div class="choose-us-icon">
								<i class="bi bi-telephone-plus"></i>
							</div>
							<div class="choose-us-phone">
								<h5>Emergency Call <span>+123956(6565)556-02</span></h5>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	 </div>