@php 
$section = App\Models\Section::latest()->limit(3)->get();
$section1 = App\Models\Section::all()->first();
@endphp
<div class="protfolio-section">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-8 col-md-6 col-sm-12">
					<div class="section-title">
						<div class="section-sub-title protfolio">
							<h4>What We Project</h4>
						</div>
						<div class="section-main-title protfolio ">
							<h2>Our Energy Project</h2>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 col-sm-6">
					<div class="solar-btn protfolio">
						<a href="project-details.html">All  Projects <i class="bi bi-arrow-right"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="protfolio-thumb wow animate__zoomIn">
						<img src="{{asset('uploads/section/'.$section1->image)}}" width="598px" height="483px" alt="">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">

					@foreach($section as $key => $sec)
					<a href="{{route('project.details', $sec->id)}}">
					<div class="protfolio-item wow animate__slideInRight">
						<div class="protfolio-item-content">
							<div class="protfolio-item-numbar">
								<span>{{$key+1}}</span>
							</div>
							<div class="protfolio-item-title">
								<h3>{{$sec->title}}</h3>
								<h3>{{$sec->desciption}}</h3>
							</div>
						</div>
						<div class="protfolio-itme-hover">
							<img src="{{asset('uploads/section/'.$sec->image)}}" width="174px" height="130px" alt="image">
						</div>
						<div class="protfolio-item-icon">
							<i class="bi bi-arrow-up-right"></i>
						</div>
					</div> 
					</a>
				 @endforeach
				</div>
			</div>
		</div>
	</div>