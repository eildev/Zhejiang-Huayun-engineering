@php 
$footer = App\Models\FooterSetting::all()->first();
@endphp
<div class="solar-topbar-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="solar-top-menu">
						<ul>
						<!-- //	<li class="line"><a href="#"><i class="bi bi-geo-alt"></i>{{$footer->location}}</a></li> -->
							<li><a href="#"><i class="bi bi-telephone"></i> {{$footer->phone}}</a></li>
							<li><a href="#"><i class="bi bi-envelope"></i> {{$footer->email}}</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="solar-top-content-menu">
						<div class="solar-top-content">
							
						</div>
						<div class="solar-top-social-icon">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>