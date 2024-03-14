@extends('front/layouts/app')
@section('content')
    <!-- Slider
      ============================================= -->
    <section id="slider" class="slider-element dark min-vh-100 include-header"
        style="background-image: url('template/front/demos/landing/images/hero/1.svg');">
        <div class="slider-inner flex-column">

            <div class="vertical-middle">
                <div class="container">
                    <div class="row align-items-lg-center no-gutters">

                        <div class="col-lg-6 col-md-6">
                            <h2 class="display-3 font-weight-bold text-white">Our App<br>Your Business.</h2>
                            <p class="lead mb-4 font-weight-normal">Best Lead Management App for your upcoming leads.</p>
                            <div>
                                <a href="https://apps.apple.com/us/app/your-app-name/id1234567890"
                                    class="btn mt-2 text-dark bg-white rounded-lg px-4 py-3 nott ls0 shadow-sm"
                                    target="_blank"><i class="icon-apple1 mr-2"></i>Get it on the App Store</a>
                                <a href="https://play.google.com/store/apps/details?id=com.yourapp.package"
                                    class="ml-0 ml-lg-2 mt-2 btn text-dark bg-white rounded-lg px-4 py-3 nott ls0 shadow-sm"
                                    target="_blank"><i class="icon-google-play mr-2"></i>Get it on Play Store</a>
                            </div>

                        </div>

                        <div class="col-lg-1 d-md-none d-lg-block"></div>

                        <div class="col-lg-5 col-md-6 align-self-lg-end">
                            <div class="slide-imgs">
                                <img src="template/front/demos/landing/images/hero/1-2.png" alt="Image" class="card-img">
                                <img src="template/front/demos/landing/images/hero/1-1.png" alt="Image"
                                    class="iphone-img">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section><!-- #slider end -->

    <!-- Content
      ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">

            <div class="container">
                <div class="mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                    <h5 class="text-uppercase ls1 text-muted mb-3">Why You Choose Us?</h5>
                    <h2 class="nott mb-4">Features for CLMS App</h2>
                    <p class="lead font-weight-normal font-primary mb-5">Dynamically manage leads using a set of
                        methodologies, systems, and practices to generate new potential business clientele, generally
                        operated through a variety of marketing campaigns or programs. Globally drive business with this
                        customizable app.</p>
                </div>

                <div class="features-items mx-auto" style="max-width: 1000px;">
                    <div class="row justify-content-around">
                        <div class="col-md-5 bottommargin-lg">
                            <div class="feature-box media-box">
                                <div class="fbox-icon">
                                    <i class="icon-line2-pointer text-primary"></i>
                                </div>
                                <div class="fbox-content">
                                    <h2 class="h4 font-weight-bold mb-4">Track Leads</h2>
                                    <div class="lead font-weight-normal text-black-50">Use this app to keep track record at
                                        each stage of lead conversation and processing cycle. Acurate detail anytime and
                                        anywhere will let you convert more leads in less time.</div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 bottommargin-lg">
                            <div class="feature-box media-box">
                                <div class="fbox-icon">
                                    <i class="icon-line2-notebook text-info"></i>
                                </div>
                                <div class="fbox-content">
                                    <h2 class="h4 font-weight-bold mb-4">Automate Lead Management</h2>
                                    <div class="lead font-weight-normal text-black-50">To win leads follow-up is essential,
                                        which has become very easy by automating meeting schedule, reminder and follow-ups
                                        phone calls and emails.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>

            <div class="row align-items-stretch align-content-stretch no-gutters topmargin">

                <div class="col-md-6 order-md-2"
                    style="background: url('template/front/demos/landing/images/iphone-hand.png') bottom right / 90% 80%; background-repeat: no-repeat; min-height: 400px;">
                </div>

                <div class="col-md-6 bg-color dark order-md-1">
                    <div class="section-features">
                        <h2 class="mb-3 h4 font-weight-semibold">Customize</h2>
                        <p class="h6 font-weight-normal mb-5">All our apps are fully customizable, right out of the box.
                            Coupled with the guided scripting feature, our drag-and-drop form builder allows you to add
                            limitless functionality to your app. You can configure a variety of email templates to send to
                            contacts at strategic points along the sales cycle.</p>

                        <h2 class="mb-3 h4 font-weight-semibold">Go mobile</h2>
                        <p class="h6 font-weight-normal mb-5">For every app you access on your computer, there's a fully
                            optimized native one waiting for you on your smartphone. Enjoy all the features of your app
                            wherever you go, and on any device. Push leads through the pipeline even when you're away from
                            your desk with this application.</p>

                        <h2 class="mb-3 h4 font-weight-semibold">Integrate</h2>
                        <p class="h6 font-weight-normal mb-0">We're flexible. CLMS features integrations with a host of
                            major software solutions like Quickbooks, Zapier, and G Suite to ensure seamless connectivity
                            between your various productivity applications. You can also integrate with full-fledged CRM
                            solutions like Salesforce or CLMS CRM to implement advanced lead qualification and lead
                            nurturing workflows.</p>
                    </div>
                </div>
            </div>

            <!-- <div class="section bg-transparent">
         <div class="container">
          <div class="row align-items-center">

           <div class="col-lg-5 col-md-6 mb-4 mb-md-0">
            <img src="template/front/demos/landing/images/section/2.jpg" alt="Image">
           </div>

           <div class="col-md-6 offset-lg-1">
            <div class="heading-block border-bottom-0 mb-4">
             <i class="icon-line-paper h1 color"></i>
             <h3 class="nott ls0">Version 6 is now 2x Faster.</h3>
            </div>
            <p class="font-weight-normal lead">Enthusiastically morph unique web-readiness via impactful platforms. Intrinsicly matrix premium expertise for diverse expertise. Intrinsicly drive collaborative bandwidth for accurate testing.</p>

            <div class="clear"></div>

            <ul class="skills mt-2 mb-5">
             <li data-percent="60">
              <span>Version 6.0</span>
              <div class="progress">
               <div class="progress-percent"><div class="counter counter-inherit counter-instant"><span data-from="0" data-to="60" data-refresh-interval="30" data-speed="1500"></span>% Optimized</div></div>
              </div>
             </li>
            </ul>

            <a href="#" class="btn text-white bg-color rounded-lg px-4 py-3 font-weight-semibold text-uppercase shadow-sm">Learn More <i class="icon-line-arrow-right ml-1"></i></a>
           </div>
          </div>
         </div>
        </div> -->

            <div class="section m-0" style="padding: 100px 0; background-color: rgba(61,128,228,0.05)">

                <div class="container clearfix">

                    <div class="heading-block mx-auto center" style="max-width: 500px">
                        <h5 class="text-uppercase ls1 text-muted mb-2">Gallery</h5>
                        <h2 class="nott mb-3">App Screenshots</h2>
                    </div>

                </div>

                <div class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="40"
                    data-center="true" data-loop="true" data-nav="false" data-pagi="true" data-items-xs="2"
                    data-items-sm="3" data-items-md="4" data-items-lg="4" data-items-xl="5">

                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/1.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/1.png" alt="Image 1">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/2.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/2.png" alt="Image 2">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/3.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/3.png" alt="Image 3">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/4.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/4.png" alt="Image 4">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/5.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/5.png" alt="Image 5">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/6.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/6.png" alt="Image 6">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/carousel/7.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/carousel/7.png" alt="Image 7">
                        </a>
                    </div>

                </div>

            </div>

            <div class="section m-0 parallax" style="padding: 100px 0; background-color:rgb(61,128,228);"
                data-0-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
                <div class="container">
                    {{-- unwanted  --}}
                    {{-- <div class="row justify-content-between">
							<div class="col-xl-4 col-lg-5 col-md-6 dark dotted-bg">
								<div class="heading-block border-bottom-0 bottommargin-sm">
									<i class="icon-credit h1"></i>
									<h2 class="nott" style="font-size: 36px;">No Hidden Charges. <br>Choose Your Best Plan.</h2>
								</div>
								<div class="font-weight-normal lead">Credibly target highly efficient markets whereas end-to-end results.</div>

								<p class="text-white-50 mt-5">During Free trail you won't be charge and you can freely use this app without <a href="terms" class="text-white"><u>Terms and Condtions</u></a>.</p>
							</div>
							<div class="col-lg-7 col-md-6">
								<div class="row">
									<div class="col-lg-6 pricing-table">
										<div class="card shadow" style="background-image: url('template/front/demos/landing/images/section/pricing-bg-light.svg'); background-position: 0 100%; background-size: 100% 290px;">
											<h5 class="text-uppercase ls1 mb-2">Startup</h5>
											<h2 class="ls0 font-weight-bold mb-3">Free</h2>
											<p class="mb-5 text-black-50"><br/><br/></p>
											<ul class="iconlist">
												<li><i class="icon-check-circle color"></i>365 Days Free Trial</li>
												<li><i class="icon-check-circle color"></i>App-In-Purchase</li>
												<li><i class="icon-check-circle color"></i>100% Safe &amp; Secure</li>
												<li><i class="icon-check-circle color"></i>Licensed Company</li>
												<li><i class="icon-check-circle color"></i>No Hidden Charges</li>
											</ul>
											<a href="#" class="btn btn-block text-white bg-color rounded-lg p-3 font-weight-semibold text-uppercase">Download Free</a>
										</div>
									</div>

									<div class="col-lg-6 pricing-table mt-4 mt-lg-0">
										<div class="card shadow" style="background-image: url('template/front/demos/landing/images/section/pricing-bg.svg');">
											<h5 class="text-uppercase ls1 text-white-50 mb-2">Pro</h5>
											<h2 class="ls0 font-weight-bold mb-5 text-white">$1000</h2>
											<p class="mt-2 text-black-50"><br/></p>
											<ul class="iconlist">
												<li><i class="icon-check-circle color"></i>One Time Purchase</li>
												<li><i class="icon-check-circle color"></i>All Bundle Included</li>
												<li><i class="icon-check-circle color"></i>100% Safe &amp; Secure</li>
												<li><i class="icon-check-circle color"></i>Licensed Company</li>
												<li><i class="icon-check-circle color"></i>No Hidden Charges</li>
											</ul>
											<a href="#" class="btn btn-block text-white bg-color rounded-lg p-3 font-weight-semibold text-uppercase">Purchase Pro</a>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
                    <div class="row justify-content-center dark topmargin">
                        <div class="col-md-7">
                            <h2 class="text-center text-white mb-5 mt-4 font-weight-semibold">Frequently Asked Questions
                            </h2>
                            <div class="toggle-wrap">
                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What is lead generation?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Companies use lead generation as a marketing tool that
                                        initiates consumer interest in their services. This lead creation happens through a
                                        variety of means. At Launch Leads, we use lead generation to attract and convert
                                        business prospects into genuine interest. We often use a mix of digital channels to
                                        establish consumer interest. Rather than using your business’s time and means, we
                                        handle initial sales effort so you can focus on more qualified buyers. Lead
                                        Generation services like Launch Leads also brings more qualified buyers to your
                                        doorstep thanks to our experience and proven data-driven solutions. Using Lead
                                        Generation, you will maximize your prospects and establish what your business truly
                                        needs—growth.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            What are the Benefits of External Lead Generation Compared to Internal?
                                        </div>
                                    </div>
                                    <div class="toggle-content">There are a great number of benefits with external lead
                                        generation which starts ultimately with cost. Instead of hiring your own team to
                                        carry out the generation, you can rely on use to create great leads whilst you get
                                        on with the other aspects of your business. We may also be able to generate leads
                                        you would never have been able to, as we work with an extensive portfolio of
                                        businesses over a range of industries.</div>
                                </div>

                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How Do You Generate the Leads?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Our team are highly experienced in generating leads and use
                                        a non-scripted approach to do so. We contact businesses that we know will be
                                        beneficial to you and only contact the people who will be able to make decisions. By
                                        targeting these people, we are far more likely to see results.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 bg-transparent pb-0" style="padding-top: 100px;">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-6 mb-5">
                            <h2 class="font-weight-bold h2 mb-4">Experienced by <span>46,000+</span> People.</h2>

                            <div class="row my-5">
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-screen-desktop text-primary"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Fast Interaction with Team</h3>
                                            <p>You can quickly reach any of your team members via chat, phone call, or video
                                                call.</p>
                                        </div>
                                    </div>
                                    <div class="line line-sm"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-bulb text-warning"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Schedule Meetings</h3>
                                            <p>Schedule meetings and create video conferences. Unlimited time, unlimited
                                                participants.</p>
                                        </div>
                                    </div>
                                    <div class="line line-sm"></div>
                                </div>
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-support text-danger"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Win Lead</h3>
                                            <p>With columns representing each stage of the pipeline, from prospects
                                                discovered to leads won, you can accurately trace and convert more leads in
                                                less time.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>

                        <div class="col-lg-5 d-flex align-items-end">
                            <div class="device-video-wrap">
                                <img src="template/front/demos/landing/images/iphone-hand.png" alt="Image">
                                <video poster="template/front/images/videos/deskwork.jpg" preload="auto" loop autoplay
                                    muted>

                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section m-0 bg-color"
                style="padding: 100px 0; background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">

                <div class="container clearfix">
                    <div class="row mx-auto dotted-bg" style="max-width: 740px">
                        <div class="col-md-12">
                            <div class="center dark mb-5">
                                <i class="icon-line-help h1 "></i>
                                <h2 class="font-weight-bold mb-2">Need Help?</h2>
                            </div>
                            {{-- adding contact us data in db --}}
                            <div class="card bg-white shadow-lg border-0">
                                <form class="row mb-0" id="contactForm" action="{{ route('contact.submit') }}"
                                    method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body p-5">
                                        <div class="form-widget" data-loader="button" data-alert-type="inline">
                                            <div class="form-result"></div>
                                            <div class="row mb-0">
                                                <div class="col-12 form-group mb-4">
                                                    <label for="name">Name:</label>
                                                    <input type="text" name="fullname" id="name"
                                                        class="form-control form-control-lg required"
                                                        placeholder="Enter your name..."required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="emaill">Email:</label>
                                                    <input type="email" name="email" id="emaill"
                                                        class="form-control form-control-lg required"
                                                        placeholder="Enter your email id..."required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="phone">Phone:</label>
                                                    <input type="text" name="phone" id="phone"
                                                        class="form-control form-control-lg required"
                                                        placeholder="Enter your contact number..." required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="message">Message:</label>
                                                    <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="5"
                                                        placeholder="Please let us know how we can help you..." required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="submit"
                                                        class="btn btn-block text-white bg-color rounded-lg py-3 font-weight-semibold text-uppercase mt-2">Contact
                                                        Us</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            {{-- end here contact us db --}}
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #content end -->
@endsection