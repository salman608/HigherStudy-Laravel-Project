@extends('layouts.frontend_layout')

@section('content')

<!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content text-center">
						<h2>Contact Us</h2>
						<div class="page_link">
							<a href="index.html">Home</a>
							<a href="contact.html">Country</a>
						</div>
					</div>
				</div>
            </div>
        </section>

  <!--================Contact Area =================-->

  <div class="section-top-border">

						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">#</div>
									<div class="country">Countries</div>
									<div class="visit">Country Name</div>
									<div class="percentage">Percentages</div>
								</div>

                @foreach($category->countries->sortBy('name') as $country)
								<div class="table-row">
									<div class="serial">{{ $country->id }}</div>
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




@endsection
