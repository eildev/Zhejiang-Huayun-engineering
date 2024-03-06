@php
$seviceDetails = App\Models\ServicesDetails::latest()->limit(6)->get();
@endphp
<div class="service-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section-title text-center">
						<div class="section-sub-title wow animate__fadeOutDown">
							<h4>Our Most Service</h4>
						</div>
						<div class="section-main-title wow slideInLeft">
							<h2>Provide Solar Solution</h2>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				@foreach($seviceDetails as $service)
				<div class="col-lg-4 col-md-6">
					<div class="service-box wow animate__backInLeft">
						<div class="service-thumb">
							<img src="{{asset('uploads/services_image/'.$service->services_details_image)}}" height="338" width="438" alt="service">
							<div class="service-content" style="background-image: url({{asset('frontend/uploads/servie-hover.png')}})!important;">
								<div class="service-icon-thumb">
									<img src="{{asset('uploads/services_image/'.$service->services_details_icon)}}" height="50" width="46" alt="">
								</div>
								<div class="service-text">
									<h4><a href="service-details.html">{{$service->services_details_title}}</a></h4>
									<p>{!! substr(strip_tags($service->services_details_description), 0, 80) !!}</p>
									<a href="service-details.html">Read More <i class="bi bi-arrow-up-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			@endforeach
				
			</div>
		</div>
	 </div>