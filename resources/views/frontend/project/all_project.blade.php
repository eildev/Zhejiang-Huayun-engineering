@extends('frontend.frontend_master')
@section('content')
<div class="breatcome-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="breatcome-content">
						<div class="breatcome-title">
							<h1>Projects List</h1>
						</div>
						<div class="bratcome-text">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Our Projects </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    @php
  $projects = App\Models\Section::latest()->get();
    @endphp
    <div class="project-grid-section">
		<div class="container">
			
			<div class="row image_load">
                    @foreach($projects as $project)
                    <a href="{{route('project.details',$project->id)}}">
				<div class="col-lg-4 col-md-6 grid-item physics math mb-30">
					<div class="project-grid-box">
						<div class="project-thumb">
							<img src="{{asset('uploads/section/'.$project->image)}}" height="280px" width="280px" alt="project">
						</div>
						<div class="project-content">
							<h4>{!! Str::limit(strip_tags($project->title), 35, '...')!!}</h4>
							<span>{!! Str::limit(strip_tags($project->description), 40, '...')!!}</span>
						</div>
					</div>
				</div>
                </a>
                @endforeach
			</div>
		</div>
	</div>
@endsection