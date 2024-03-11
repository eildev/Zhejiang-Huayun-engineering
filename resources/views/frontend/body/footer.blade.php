@php 
$footer = App\Models\FooterSetting::all()->first();
@endphp
<footer class="footer-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="footer-wiget wow animate__zoomIn">
						<div class="footer-wiget-log">
							<!-- <a href="index.html"><img src="{{asset('frontend')}}/assets/images/resource/footer-logo.png" alt=""></a> -->
						</div>
						<div class="footer-wiget-text">
							<p>Feugiat a ligula rutrum luctus primis ultrice nteger congue magna at pretium purus a pretium ligula rutrum and luctus risus</p>
						</div>
						<div class="footer-wiget-social">
							<ul>
								<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
								<li><a href="#"><i class="fab fa-instagram"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-wiget wow animate__slideInDown">
						<div class="footer-wiget-title">
							<h4>Quick Links</h4>
						</div>
						<div class="footer-wiget-menu">
							<ul>
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{route('frontend.about')}}">About Us</a></li>
								<li><a href="{{route('all.service')}}">Our Services</a></li>
								<li><a href="{{route('all.project')}}">Our Team</a></li>
								<li><a href="{{route('all.team')}}">Our Projects</a></li>
								<li><a href="{{route('contact.us')}}">Contact us</a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-wiget-quick-contanct wow animate__slideInUp">
						<div class="footer-wiget-title">
							<h4>Get In Touch</h4>
						</div>
						<div class="footer-wiget-contact-menu">
							<ul>
								<li>{{$footer->fullAddress}}</li>
								<li>{{$footer->phone}}</li>
								<li>{{$footer->email}}</li>
							</ul>
						</div>
					</div>
				</div>
				
			</div>
			<div class="row footer-line">
				<div class="col-lg-3 col-md-6">
					<div class="copyright-text wow animate__slideInUp">
						<p>© 2023-25 | Alrights reserved by <a href="#">TechTime</a></p>
					</div>
				</div>
				<div class="col-lg-2"></div>
				<div class="col-lg-4 col-md-6">
					<div class="footer-condition wow animate__slideInDown">
						<ul>
							<li><a href="#">Privercy</a></li>
							<li><a href="#">Term & Conditions</a></li>
							<li><a href="#">Legal</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3"></div>
			</div>
		</div>
	</footer>