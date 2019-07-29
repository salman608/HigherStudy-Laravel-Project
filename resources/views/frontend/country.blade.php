@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
      <div class="container">
        <div class="banner_content text-center">
          <h2>Country</h2>
          <div class="page_link">
            <a href="index.html">Home</a>
            <a href="about-us.html">Country</a>
          </div>
        </div>
      </div>
    </div>
  </section>

    <!--================End Home Banner Area =================-->

  <div class="section-top-border">
      <div class="container">



						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="country">Countries</div>
									<div class="visit">Country Name</div>
									<div class="percentage">Percentages</div>
								</div>

                @foreach($category->countries->sortBy('name') as $country)
								<div class="table-row">
									<div class="country"> <img src="{{asset('uploads/country/'.$country->image)}}" alt="flag" style="width:100px;"></div>
									<div class="visit"><a href="{{ route('countrybyuniversity', $country->id) }}">{{ $country->name }} </a></div>
									<div class="percentage">
										<div class="progress">
											<div class="progress-bar color-1" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>

                @endforeach

							</div>
						</div>
					</div>
            </div>




@endsection
