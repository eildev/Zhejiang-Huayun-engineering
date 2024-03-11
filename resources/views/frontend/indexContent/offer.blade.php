@php
$section = App\Models\Section::where('title', 'Achievement')->first();
$achievements = App\Models\SectionDetails::where('section_id', $section->id)
        ->latest()
        ->limit(6)
        ->get();
$achievement1 = App\Models\SectionDetails::where('section_id', $section->id)
        ->latest()
        ->first();      
@endphp
<div class="offer-section">
		<div class="container">
			<div class="row">
                
				<div class="col-lg-7 col-md-12">
					<div class="section-title wow animate__slideInUp">
						<div class="section-sub-title offer">
							<h4>Our Achievements</h4>
						</div>
						<div class="section-main-title offer">
							<h2> {{ Illuminate\Support\Str::limit($achievement1->title, 39) }}</h2>
						</div>
					</div>
					<div class="row">

					      @foreach($achievements as $item)
                    <div class="col-lg-4 col-md-4 col-sm-6 col-6">
                    @php
                         $image = explode(',', $item->multi_image);
                      @endphp
                        <div class="offer-items-box wow animate__slideInDown"  style="background-image: url({{ asset('uploads/multi_img/' . $image[0]) }})!important; height:200px;width:200px">
                            <div class="offer-content">
                                <h5> {{ Illuminate\Support\Str::limit($item->title, 20) }}</h4>
                                <p>{!! Illuminate\Support\Str::limit($item->desciption, 40) !!}</p>
                            </div>
                        </div>
                    </div>
                  @endforeach
						
					
					</div>
					<!-- start progress bar -->
					<!-- <div class="process-ber-plugin">
						<span class="process-bar">Customer Satisficed </span>
						<div id="bar1" class="barfiller">
							<div class="tipWrap" style="display: inline;">
								<span class="tip" style="left: 100.254px; transition: left 7s ease-in-out 0s;">90%</span>
							</div>
							<span class="fill" data-percentage="90" style="background: rgb(22, 181, 151); width: 100.076px; transition: width 7s ease-in-out 0s;"></span>
						</div>  
						<span class="process-bar">Customer Satisficed</span>
						<div id="bar2" class="barfiller">
							<div class="tipWrap" style="display: inline;">
								<span class="tip" style="left: 100.294px; transition: left 7s ease-in-out 0s;">69%</span>
							</div>
							<span class="fill my-class" data-percentage="69" style="background: rgb(22, 181, 151); width: 100.117px; transition: width 7s ease-in-out 0s;"></span>
						</div>
					</div> -->
					<!-- end progress bar -->
				</div>
                       @php
                         $achievement_image = explode(',', $achievement1->multi_image);
                        @endphp
        
                   <div class="col-lg-5 col-md-12">
                        <div class="offer-thumb wow animate__slideInRight">
                            <img src="{{ asset('uploads/multi_img/' . $achievement_image[0]) }}" width="620px" height="610px" alt="">
                        </div>
                    </div>
			</div>
		</div>
	</div>