@php

$chooseUs = App\Models\WhyChooseUsDetails::all()->first();
$footer = App\Models\FooterSetting::all()->first();
@endphp

<div class="choose-us-section mt-5">
		<div class="container">
			<div class="row choose" style="background-image: url({{asset('uploads/why-choose-us/choose-bg.png')}})!important;">
				<div class="col-lg-6 col-md-12">
					<div class="section-title wow animate__slideInUp">
						<div class="section-sub-title choose ">
							<h4>Why Choose Us</h4>
						</div>
						<div class="section-main-title choose">
							<h2>{{$chooseUs->title ?? 'Lorem Ipsum is simply dummy '}}</h2>
						</div>
					</div>
					<div class="choose-us-discription wow animate__slideInUp">
						<p>{!!$chooseUs->description ?? 'Lorem Ipsum is simply dummy '!!}</p>
					</div>
					<div class="choose-us-content wow animate__zoomIn">
						<div class="choose-us-info">
							<div class="solar-btn choose">
								<a href="{{route('contact.us')}}">Contact Now <i class="bi bi-arrow-right"></i></a>
							</div>
							<div class="choose-us-icon">
								<i class="bi bi-telephone-plus"></i>
							</div>
							<div class="choose-us-phone">
								<h5>Emergency Call <span>{{$footer->phone?? 'Lorem Ipsum is simply dummy'}}</span></h5>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
	 </div>