@extends('front/layouts/app')
@section('content')
    <!-- Slider
		============================================= -->
		{{-- <section id="slider" class="slider-element dark min-vh-25 min-vh-md-50 include-header py-5" style="background-image: url('template/front/demos/landing/images/hero/1.svg');"> --}}
			<section id="slider" class="slider-element dark min-vh-60 min-vh-md-95 include-header py-10" style="background-image: url('template/front/demos/landing/images/fitness/fitness_14.png');">
			<div class="slider-inner">

				<div class="vertical-middle text-center">
					<div class="container">
						<div class="row align-items-center justify-content-center">

							<div class="col-lg-12 col-md-12">
								<h2 class="display-3 font-weight-bold text-white mb-2">Terms & Conditions</h2>
								<p class="lead mb-0 font-weight-normal">Studio Sunlife's Terms & Conditions for Your Fitness Journey.</p>
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
										<p class="lead font-weight-normal">Studio Sunlife allows users to access a comprehensive suite of fitness tools, including personalized workout plans, activity tracking, nutrition guidance, and community support, all within a secure and accessible virtual environment. By using Studio Sunlife's services and products, you agree to abide by the following terms and conditions:</p>

										<p class="lead font-weight-normal">1. Use of Services: Users are granted access to Studio Sunlife's services for personal fitness use only and may not share, sell, or distribute any part of the services without explicit permission.</p>

										<p class="lead font-weight-normal">2. Data Privacy: Studio Sunlife is committed to protecting user data and adheres to all relevant data protection laws. Users' personal information will be handled in accordance with our Privacy Policy.</p>

										<p class="lead font-weight-normal">3. Acceptable Use: Users agree to use Studio Sunlife's services in a responsible manner, refraining from any activities that may harm the platform or other users.</p>
									</div>
								</div>
								<div class="line line-sm"></div>
							</div>
						</div>

						<div class="col-lg-4 d-flex align-items-end">
							<div class="device-video-wrap">
								<img src="template/front/demos/landing/images/iphone-hand.png" alt="Image">
								<video poster="template/front/demos/landing/images/fitness/fitness_5.png" preload="auto" loop autoplay muted>
								</video>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section><!-- #content end -->
@endsection
