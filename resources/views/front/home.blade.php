@extends('front/layouts/app')
@section('content')
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <!-- Slider ============================================= -->
    {{-- fitness image --}}
    <section id="slider" class="slider-element dark min-vh-100 include-header"
    style="background-image: url('template/front/demos/landing/images/fitness/fitness_2.png');">
    <div class="slider-inner flex-column">
        {{-- fitness image ends here --}}
        <div class="vertical-middle">
            <div class="container">
                <div class="row align-items-center"> <!-- Updated class for responsiveness -->
                    <div class="col-lg-6 col-md-6">
                        <h2 class="display-3 font-weight-bold text-white">Our App<br>Your <b><u><i class="animated-text"
                                    style="color:rgb(133, 7, 93)">Fitness</i></u></b> !!</h2>
                        <p class="lead mb-4 font-weight-normal">Your Ultimate Fitness Partner for a Healthier You.</p>
                        <div>
                            <a href="https://apps.apple.com/us/app/your-app-name/id1234567890"
                                class="btn mt-2 text-dark bg-white rounded-lg px-4 py-3 nott ls0 shadow-sm"
                                target="_blank"><i class="icon-apple1 mr-2"></i>Get it on the App Store</a>
                            <a href="https://play.google.com/store/apps/details?id=com.yourapp.package"
                                class="ml-0 ml-lg-2 mt-2 btn text-dark bg-white rounded-lg px-4 py-3 nott ls0 shadow-sm"
                                target="_blank"><i class="icon-google-play mr-2"></i>Get it on Play Store</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <!-- #slider end -->
    <!-- Content ============================================= -->
    <section id="content">
        <div class="content-wrap pb-0">
            <div class="container">
                <div class="mx-auto center mt-4 bottommargin heading-block" style="max-width: 640px;">
                    <h5 class="text-uppercase ls1 text-muted mb-3">Why You Choose Us?</h5>
                    <h2 class="nott mb-4">Features for Studio Sunlife App</h2>
                    <p class="lead font-weight-normal font-primary mb-5">Studio Sunlife's fitness app is designed to
                        revolutionize your fitness journey. With personalized workout plans tailored to your goals,
                        real-time activity tracking, and comprehensive progress analytics, achieving your fitness milestones
                        has never been easier. Stay on top of your nutrition with expert guidance and meal suggestions,
                        while conveniently booking classes and workshops through the app. Engage with a supportive
                        community, participate in challenges, and earn rewards for your achievements. With Studio Sunlife,
                        you have access to a holistic fitness experience that empowers you to reach new heights of health
                        and wellness..</p>
                </div>
                <div class="features-items mx-auto" style="max-width: 1000px;">
                    <div class="row justify-content-around">
                        <div class="col-md-5 bottommargin-lg">
                            <div class="feature-box media-box">
                                <div class="fbox-icon">
                                    <i class="icon-line2-pointer text-primary"></i>
                                </div>
                                <div class="fbox-content">
                                    <h2 class="h4 font-weight-bold mb-4">Track Progress</h2>
                                    <div class="lead font-weight-normal text-black-50">Studio Sunlife, the ultimate fitness
                                        companion, allows you to seamlessly track progress at every stage of client
                                        interaction and the fitness journey. With accurate details available anytime,
                                        anywhere, Studio Sunlife empowers you to efficiently convert more fitness
                                        enthusiasts into committed members, driving growth and success for your fitness
                                        community.</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 bottommargin-lg">
                            <div class="feature-box media-box">
                                <div class="fbox-icon">
                                    <i class="icon-line2-notebook text-info"></i>
                                </div>
                                <div class="fbox-content">
                                    <h2 class="h4 font-weight-bold mb-4">Streamline Lead Management</h2>
                                    <div class="lead font-weight-normal text-black-50">Studio Sunlife revolutionizes lead
                                        management by automating scheduling for meetings, reminders, phone calls, and
                                        emails. Stay organized and efficient in converting leads into active participants in
                                        their fitness journey, ensuring a seamless experience for both clients and your
                                        fitness team.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="row align-items-stretch align-content-stretch no-gutters topmargin">
                <div class="col-lg-6 order-md-2 d-flex align-items-end">
                    <div class="device-video-wrap">
                        <img src="template/front/demos/landing/images/iphone-hand.png" alt="Image" style="bottom right / 90% 80%;">
                        {{-- Fitness video tag  --}}
                        <video poster="template/front/demos/landing/images/fitness/fitness_5.png" preload="auto" loop autoplay muted>
                        </video>     
                    </div>
                </div>
                <div class="col-md-6 bg-color dark order-md-1">
                    <div class="section-features">
                        <h2 class="mb-3 h4 font-weight-semibold">Personalize Your Experience</h2>
                        <p class="h6 font-weight-normal mb-5">Studio Sunlife offers full customization options, including an intuitive drag-and-drop interface and guided scripting feature for adding unlimited functionality to your app. Tailor your app to fit your unique fitness goals and workflow. Leverage our email templates to engage contacts strategically throughout their fitness journey.</p>
                
                        <h2 class="mb-3 h4 font-weight-semibold">Stay Connected Anywhere</h2>
                        <p class="h6 font-weight-normal mb-5">Experience seamless access to Studio Sunlife across all devices, including your smartphone. Our fully optimized native app ensures uninterrupted management of leads and engagement with clients, even when you're away from your desk.</p>
                
                        <h2 class="mb-3 h4 font-weight-semibold">Integrate Seamlessly</h2>
                        <p class="h6 font-weight-normal mb-0">Studio Sunlife seamlessly integrates with essential software solutions like QuickBooks, Zapier, and G Suite, ensuring smooth connectivity and streamlined workflows. Integration with leading CRM solutions like Salesforce enables advanced lead management and nurturing capabilities.</p>
                    </div>
                </div>
            </div>
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
                        <a href="template/front/demos/landing/images/screenshot/ss1.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss1.png" alt="Image 1">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss00.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss00.png" alt="Image 2">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss013.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss013.png" alt="Image 3">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss011.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss011.png" alt="Image 4">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss02.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss02.png" alt="Image 6">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss08.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss08.png" alt="Image 5">
                        </a>
                    </div>
                    <div class="oc-item">
                        <a href="template/front/demos/landing/images/screenshot/ss014.png" data-lightbox="image">
                            <img src="template/front/demos/landing/images/screenshot/ss014.png" alt="Image 7">
                        </a>
                    </div>
                </div>
            </div>
            <div class="section m-0 parallax" style="padding: 100px 0; background-color:rgb(61,128,228);"
                data-0-top="background-color:rgb(61,128,228);" data-center-bottom="background-color:rgb(0,0,0);">
                <div class="container">
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
                                            What features does Studio Sunlife offer for fitness enthusiasts ?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Studio Sunlife provides a range of features tailored for
                                        fitness enthusiasts, including personalized workout plans, live classes with
                                        experienced trainers, progress tracking, nutrition guidance, and a supportive
                                        community for motivation and accountability.</div>
                                </div>
                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            How can I sign up for Studio Sunlife and start using its services ?
                                        </div>
                                    </div>
                                    <div class="toggle-content">To join Studio Sunlife, simply download the mobile app from
                                        the App Store or Google Play Store, create an account, and choose a subscription
                                        plan that suits your needs. Once registered, you'll have access to all the app's
                                        features and content.</div>
                                </div>
                                <div class="toggle">
                                    <div class="toggle-header">
                                        <div class="toggle-icon">
                                            <i class="toggle-closed icon-angle-right1"></i>
                                            <i class="toggle-open icon-angle-down1"></i>
                                        </div>
                                        <div class="toggle-title">
                                            Is my personal data safe and secure with Studio Sunlife ?
                                        </div>
                                    </div>
                                    <div class="toggle-content">Yes, at Studio Sunlife, we take your privacy and security
                                        seriously. We use industry-standard encryption protocols to protect your personal
                                        information, and we adhere to strict data privacy policies to ensure that your data
                                        is only used for improving your fitness experience and not shared with third parties
                                        without your consent.</div>
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
                            <h2 class="font-weight-bold h2 mb-4">Experienced by <span>46,000+</span> Fitness Enthusiasts.
                            </h2>
                            <div class="row my-5">
                                <div class="col-md-9">
                                    <div class="feature-box fbox-plain">
                                        <div class="fbox-icon">
                                            <a href="#"><i class="icon-line2-screen-desktop text-primary"></i></a>
                                        </div>
                                        <div class="fbox-content">
                                            <h3>Effortless Team Interaction</h3>
                                            <p>Easily connect with your fitness team via chat, phone calls, or video
                                                conferences for
                                                seamless collaboration.</p>
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
                                            <h3>Schedule Fitness Sessions</h3>
                                            <p>Effortlessly schedule fitness sessions and create virtual workout experiences
                                                with
                                                unlimited participants and duration.</p>
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
                                            <h3>Convert Leads into Fitness Champions</h3>
                                            <p>Efficiently manage your leads' fitness journey, from discovery to conversion,
                                                with
                                                Studio Sunlife's pipeline tracking and lead conversion tools.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-1"></div>
                        <div class="col-lg-5 d-flex align-items-end">
                            <div class="device-video-wrap">
                                <img src="template/front/demos/landing/images/iphone-hand.png" alt="Image">
                                {{-- fitness video tag added  --}}
                                <video poster="template/front/demos/landing/images/fitness/fitness_7.png" preload="auto"
                                    loop autoplay muted>
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section m-0 bg-color"style="padding: 100px 0; background-image: linear-gradient(to bottom, #3D80E4 0%, #0a4bab 80%, #FFF 80%);">
                <div class="container clearfix">
                    <div class="row mx-auto dotted-bg" style="max-width: 740px">
                        <div class="col-md-12">
                            <div class="center dark mb-5">
                                <i class="icon-line-help h1 "></i>
                                <h2 class="font-weight-bold mb-2">Need Help?</h2>
                            </div>
                            {{-- adding contact us data in db --}}
                            <div class="card bg-white shadow-lg border-0">
                                <form class="row mb-0" id="contactForm" action="{{ route('contact.submit') }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body p-5">
                                        <div class="form-widget" data-loader="button" data-alert-type="inline">
                                            <div class="form-result"></div>
                                            <div class="row mb-0">
                                                <div class="col-12 form-group mb-4">
                                                    <label for="name">Name:</label>
                                                    <input type="text" name="fullname" id="name" class="form-control form-control-lg required" placeholder="Enter your name..." required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="emaill">Email:</label>
                                                    <input type="email" name="email" id="emaill" class="form-control form-control-lg required" placeholder="Enter your email id..." required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="phone">Phone:</label>
                                                    <input type="text" name="phone" id="phone" class="form-control form-control-lg required" placeholder="Enter your contact number..." required>
                                                </div>
                                                <div class="col-12 form-group mb-4">
                                                    <label for="message">Message:</label>
                                                    <textarea name="message" id="message" class="form-control form-control-lg" cols="30" rows="5" placeholder="Please let us know how we can help you..." required></textarea>
                                                </div>
                                                <div class="col-12">
                                                    <button type="button" class="btn btn-block text-white bg-color rounded-lg py-3 font-weight-semibold text-uppercase mt-2" id="contactBtn">Contact Us</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div id="liveToast" class="toast align-items-center position-absolute top-0 end-0" role="alert" aria-live="assertive" aria-atomic="true">
                                <div class="d-flex">
                                    <div class="toast-body">
                                        Thank You! We Got Your Query, We Will Contact You Shortly..
                                    </div>
                                    <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                </div>
                            </div>
                            
                            <script>
                                $(document).ready(function () {
                                    $('#contactBtn').click(function () {
                                        event.preventDefault();
                                        $.ajax({
                                            url: $('#contactForm').attr('action'),
                                            type: 'POST',
                                            data: $('#contactForm').serialize(),
                                            success: function (response) {
                                                $('#liveToast .toast-body').text('Thank You! We Got Your Query, We Will Contact You Shortly..');
                                                $('#liveToast').removeClass('bg-danger').addClass('bg-success');
                                                $('#liveToast').toast('show');
                            
                                                // Clear form fields
                                                $('#contactForm')[0].reset();
                                            },
                                            error: function (xhr, status, error) {
                                                $('#liveToast .toast-body').text('Something went wrong, check your details.');
                                                $('#liveToast').removeClass('bg-success').addClass('bg-danger');
                                                $('#liveToast').toast('show');
                                            }
                                        });
                                    });
                                });
                            </script>
                            
                            
                            <script>
                                $(document).ready(function () {
                                    $('#contactBtn').click(function () {
                                        event.preventDefault();
                                        $.ajax({
                                            url: $('#contactForm').attr('action'),
                                            type: 'POST',
                                            data: $('#contactForm').serialize(),
                                            success: function (response) {
                                                $('#liveToast').toast('show');
                                            },
                                            error: function (xhr, status, error) {
                                                console.error(xhr.responseText);
                                            }
                                        });
                                    });
                                });
                            </script>
                            
                        </div>
                    </div>        
                </div>
            </div>
        </div>   
    
    </section><!-- #content end -->
    <style>
        .animated-text {
            display: inline-block;
            position: relative;
            color: rgb(255, 36, 0); 
        }

        .animated-text::after {
            content: '';
            position: absolute;
            bottom: -5px; 
            left: 0;
            width: 100%;
            height: 3px;
            background-color: transparent;
            background-image: linear-gradient(to right, rgb(255, 36, 0) 33%, transparent 33%, transparent 66%, rgb(255, 36, 0) 66%);
            background-size: 8px 5px; 
            background-repeat: repeat-x;
            transform: scaleX(0);
            transform-origin: bottom;
            transition: transform 0.5s ease-in-out;
        }

        .animated-text:hover::after {
            transform: scaleX(1);
            transform-origin: bottom right;
        }

        #liveToast {
            width: 300px; 
            height: auto; 
            background-color: white; 
            color: black; 
            padding: 10px; 
        }
    </style>
@endsection

