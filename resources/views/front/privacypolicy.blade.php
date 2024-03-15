@extends('front/layouts/app')
@section('content')

    <!-- Slider
		============================================= -->
		{{-- <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5" 
		style="background-image: url('template/front/demos/landing/images/hero/1.svg');"> --}}
		<section id="slider" class="slider-element dark min-vh-60 min-vh-md-95 include-header py-10" style="background-image: url('template/front/demos/landing/images/fitness/fitness_14.png');">
			<div class="slider-inner">

				<div class="vertical-middle text-center">
					<div class="container">
						<div class="row align-items-center justify-content-center">

							<div class="col-lg-12 col-md-12">
								<h2 class="display-3 font-weight-bold text-white mb-2">Privacy Policy</h2>
								<p class="lead mb-0 font-weight-normal">Studio Sunlife's Privacy Policy for Your Fitness Journey.</p>
							</div>

						</div>
					</div>
				</div>

			</div>
		</section><!-- #slider end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="section mb-0 bg-transparent p-0">
				<div class="container clearfix">
					<div class="row">
						<div class="col-lg-8 mb-5">
							<div class="col-md-12">
								<div class="feature-box fbox-plain">
									<div class="fbox-content">
										<p class="lead font-weight-normal">Studio Sunlife, as a fitness-oriented platform, is committed to protecting your personal information and ensuring its secure management in accordance with the applicable privacy and data protection laws.</p>

										<p class="lead font-weight-normal">We understand the sensitivity of health-related data and assure you that we do not collect any unnecessary personal information. However, certain information may be required to provide you with personalized fitness recommendations and services.</p>
										
										<p class="lead font-weight-normal">Your privacy is paramount to us. Any data collected is used solely for the purpose of enhancing your fitness experience, and we do not share or sell your information to third parties without your explicit consent.</p>
										
										<p class="lead font-weight-normal">By using Studio Sunlife, you agree to our Privacy Policy and acknowledge that your personal information may be processed for the purpose of improving our services, ensuring data security, and offering you a tailored fitness journey.</p>
									</div>
								</div>
								<div class="line line-sm"></div>
							</div>
						</div>

						<div class="col-lg-4 d-flex align-items-end">
							<div class="device-video-wrap">
								<img src="template/front/demos/landing/images/iphone-hand.png" alt="Image">
								{{-- <video poster="template/front/images/videos/deskwork.jpg" preload="auto" loop autoplay muted>
									
								</video> --}}
								{{-- fitness video tag image  --}}
								<video poster="template/front/demos/landing/images/fitness/fitness_4.png" preload="auto" loop autoplay muted>
									
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->
@endsection
