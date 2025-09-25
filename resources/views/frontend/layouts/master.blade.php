<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.ravextheme.com/redox/light/javascript:void(0); by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 12 Aug 2025 06:36:53 GMT -->

<head>
    @yield('metas')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Redox HTML Template">

    <title>@yield('title')</title>

    @yield('css')
    <!-- Fav Icon -->
    <link rel="icon" type="image/x-icon" href="assets/imgs/logo/favicon.png">
    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{url('frontend/assets/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/vendor/fontawesome.min.css ss')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/vendor/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/vendor/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/vendor/animate.min.css')}}">

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.2/css/all.css ">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />
    <link rel="stylesheet" href="{{url('frontend/assets/css/modal.css')}}?ref={{setting('site.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/style.css')}}?ref={{setting('site.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/custom.css')}}?ref={{setting('site.css')}}">
    <link rel="stylesheet" href="{{url('frontend/assets/css/cookie.css')}}?ref={{setting('site.css')}}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="body-wrapper body-digital-agency font-heading-instrumentsans-medium">

    {{-- Cookie Start --}}
    <div class="cookie-popup-container" style="display:none;">
        <div class="cookie-popup">
            <div class="cookie-header">
                <div class="consent-title">
                    <span>We value your privacy</span>
                </div>
            </div>
            <div class="cookie-para">
                <p>
                    We use cookies to enhance your browsing experience, analyze site traffic, and personalize content. By clicking "Accept," you consent to our use of cookies.
                </p>
            </div>
        
            <div class="cookie-button-container">
                <div class="nav-buttons">
                    <a href="javascript:void(0);" class="d-flex justify-content-center align-items-center btn-customize me-2 accept-design">
                        <span class="btn5 accept-cookie">Accept</span>
                    </a>
                    <a href="javascript:void(0);" class="d-flex justify-content-center align-items-center decline-css btn-customize me-2 accept-design">
                        <span class="btn5 decline-cookie">Decline</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- Cookie End --}}
    <!-- Form Modal -->
    <div class="modal" id="bookingModal">
        <div class="modal-content">
            <div class="modal-header">
                <button class="close-btn" id="closeModalForm">&times;</button>
            </div>
            <div class="modal-body">
                <div class="modal-content-form">
                    {{-- <div class="modal-custom-content">
                        <div class="modal-side-img">
                            <div class="black-shade"></div>
                            <img src="https://img.freepik.com/premium-photo/creative-technology-concept_1256621-1999.jpg" alt="">
                            <div class="contents">
                                <span class="title">Director Postal Service</span>
                                <p class="text">Register for our premium UK business services including virtual office addresses, mail handling, and director service addresses with full compliance to UK regulations.</p>
                            </div>
                        </div>
                    </div> --}}
                    <div class="modal-form">
                        <!-- Step Indicator -->
                        <div class="step-indicator">
                            <div class="step active" id="step1">1</div>
                            <div class="step" id="step2">2</div>
                            <div class="step" id="step3">3</div>
                            <div class="step" id="step4">4</div>
                            <div class="step" id="step5">5</div>
                        </div>

                        <form id="bookingForm">
                            <!-- Step 1: Select Plan -->
                            <div class="form-section step-content" id="step1-content">
                                <div class="icon-title">
                                    <i class="fas fa-tasks"></i>
                                    <h6 class="section-title"> 
                                        Select Your Plan
                                    </h6>
                                </div>
                                
                                <div class="plan-option">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="planOption" id="virtualOffice" value="virtualOffice" required>
                                        <label class="form-check-label" for="virtualOffice">
                                            Virtual Office Address
                                        </label>
                                    </div>
                                    <p class="mb-0 mt-2 text-muted">Professional business address with mail handling services</p>
                                </div>
                                
                                <div class="plan-option">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="planOption" id="directorService" value="directorService">
                                        <label class="form-check-label" for="directorService">
                                            Director Service Address
                                        </label>
                                    </div>
                                    <p class="mb-0 mt-2 text-muted">Official address for company directors</p>
                                </div>
                                
                                <div class="plan-option">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="planOption" id="fullMailbox" value="fullMailbox">
                                        <label class="form-check-label" for="fullMailbox">
                                            Full Mailbox Service
                                        </label>
                                    </div>
                                    <p class="mb-0 mt-2 text-muted">Complete mail management with scanning and forwarding</p>
                                </div>
                            </div>

                            <!-- Step 2: Basic Contact Information -->
                            <div class="form-section step-content d-none" id="step2-content">
                                <div class="icon-title">
                                    <i class="fas fa-user"></i>
                                    <h6 class="section-title"> 
                                        Basic Contact Information
                                    </h6>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="fullName" class="form-label required-field">Full Name / Company Name</label>
                                    <input type="text" class="form-control" id="fullName" required>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="email" class="form-label required-field">Email Address</label>
                                        <input type="email" class="form-control" id="email" required>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="phone" class="form-label required-field">Phone Number</label>
                                        <input type="tel" class="form-control" id="phone" required>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Business Information -->
                            <div class="form-section step-content d-none" id="step3-content">
                                <div class="icon-title">
                                    <i class="fas fa-building"></i>
                                    <h6 class="section-title"> 
                                        Business Information (UK Compliance)
                                    </h6>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="companyRegNumber" class="form-label">Company Registration Number (if applicable)</label>
                                    <input type="text" class="form-control" id="companyRegNumber">
                                </div>
                                
                                <div class="mb-3">
                                    <label for="registeredOfficeAddress" class="form-label">Registered Office Address (if using)</label>
                                    <textarea class="form-control" id="registeredOfficeAddress" rows="2"></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="directorDetails" class="form-label">Director(s) Details</label>
                                    <textarea class="form-control" id="directorDetails" rows="3" placeholder="Full name and contact information of all directors"></textarea>
                                </div>
                            </div>

                            <!-- Step 4: Mail Handling Preferences -->
                            <div class="form-section step-content d-none" id="step4-content">
                                <div class="icon-title">
                                    <i class="fas fa-envelope"></i>
                                    <h6 class="section-title"> 
                                        Mail Handling Preferences
                                    </h6>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="forwardingAddress" class="form-label required-field">Mail Forwarding Address</label>
                                    <textarea class="form-control" id="forwardingAddress" rows="3" required placeholder="Where should we forward your mail?"></textarea>
                                    <div class="form-check mt-2">
                                        <input class="form-check-input" type="checkbox" id="overseasForwarding">
                                        <label class="form-check-label modal-check-box" for="overseasForwarding">
                                            Overseas Address (outside UK)
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label required-field">Forwarding Frequency</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="forwardingFrequency" id="daily" value="daily" required>
                                            <label class="form-check-label modal-radio" for="daily">Daily</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="forwardingFrequency" id="weekly" value="weekly">
                                            <label class="form-check-label modal-radio" for="weekly">Weekly</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="forwardingFrequency" id="monthly" value="monthly">
                                            <label class="form-check-label modal-radio" for="monthly">Monthly</label>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label required-field">Scanning Option</label>
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="scanningOption" id="scanAndEmail" value="scanAndEmail" required>
                                            <label class="form-check-label modal-radio" for="scanAndEmail">Scan and email as PDF</label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="scanningOption" id="physicalForwarding" value="physicalForwarding">
                                            <label class="form-check-label modal-radio" for="physicalForwarding">Physical forwarding only</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5: Identity Verification & Payment -->
                            <div class="form-section step-content d-none" id="step5-content">
                                <div class="icon-title">
                                    <i class="fas fa-id-card"></i>
                                    <h6 class="section-title"> 
                                        Identity Verification (UK Law Requirement)
                                    </h6>
                                </div>
                                
                                <div class="modal-document-upload-main">
                                    <div class="document-upload">
                                        <i class="fas fa-cloud-upload-alt fa-2x mb-2 text-primary"></i>
                                        <p>Upload Proof of ID (Passport/Driving License)</p>
                                        <p class="small text-muted">Max file size: 5MB. Accepted formats: JPG, PDF, PNG</p>
                                        <input type="file" class="d-none" id="proofId">
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('proofId').click()">Select File</button>
                                    </div>
                                    <div class="document-upload">
                                        <i class="fas fa-cloud-upload-alt fa-2x mb-2 text-primary"></i>
                                        <p>Upload Proof of Address (Utility Bill/Bank Statement)</p>
                                        <p class="small text-muted">Max file size: 5MB. Accepted formats: JPG, PDF, PNG</p>
                                        <input type="file" class="d-none" id="proofAddress">
                                        <button type="button" class="btn btn-sm btn-outline-primary" onclick="document.getElementById('proofAddress').click()">Select File</button>
                                    </div>
                                </div>
                                
                                <h6 class="icon-title section-title mt-4"><i class="fas fa-credit-card"></i> Payment Details</h6>
                                
                                <div class="mb-3">
                                    <label for="billingName" class="form-label required-field">Billing Name & Address</label>
                                    <textarea class="form-control" id="billingName" rows="2" required></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label class="form-label required-field">Payment Method</label>
                                    <select class="form-select" required>
                                        <option value="">Select payment method</option>
                                        <option value="card">Credit/Debit Card</option>
                                        <option value="bank">Bank Transfer</option>
                                        <option value="paypal">PayPal</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Navigation Buttons -->
                            <div class="form-navigation">
                                <div class="all-btn-wrapper fade-anim">
                                    <button type="button" class="rr-btn" id="prevBtn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Previous</span>
                                            <span class="text-two">Previous</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="all-btn-wrapper fade-anim">
                                    <button type="button" class="rr-btn hover-bg-theme" id="nextBtn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Next</span>
                                            <span class="text-two">Next</span>
                                        </span>
                                    </button>
                                </div>
                                <div class="all-btn-wrapper d-none fade-anim">
                                    <button type="button" class="rr-btn hover-bg-theme" id="submitBtn">
                                        <span class="btn-wrap">
                                            <span class="text-one">Submit</span>
                                            <span class="text-two">Submit</span>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader -->
    {{-- <div id="preloader"> --}}
    <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="loader5 animation-preloader">
                <div class="card-new">
                    <span class="dots"></span>
                </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>
    {{-- <div id="preloader">
        <div id="container" class="container-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div> --}}

    <!-- Sroll to top -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
                <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
            </svg>
    </div>

    <!-- cursorAnimation start -->
    <div class="cursor-wrapper relative">
        <div class="cursor"></div>
        <div class="cursor-follower"></div>
    </div>
    <!-- cursorAnimation end -->

    <!-- side toggle start -->
    <!-- <aside class="fix"> -->
    <div class="side-info">
        <div class="side-info-content">
            <div class="offset-widget offset-header">
                <div class="offset-logo">
                    <a href="javascript:void(0);">
                        <img src="{{url('storage')}}/{{setting('site.footer-logo')}}" alt="site logo">
                    </a>
                </div>
                <button id="side-info-close" class="side-info-close bg-transperent">
                            <i class="fas fa-times"></i>
                        </button>
            </div>
            <div class="offset-button">
                <a href="#" class="rr-btn hover-bg-theme">
                    <span class="btn-wrap">
                                <span class="text-one">Let's Talk</span>
                    <span class="text-two">Let's Talk</span>
                    </span>
                </a>
            </div>

            <div class="nav-links-main">
                <div class="nav-links">
                    <ul>
                        <li>
                            <a href="{{route('index')}}" class="@if(Route::currentRouteName() === 'index') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span class="text-one">Home</span>
                                <span class="text-two">Home</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('aboutus')}}" class="@if(Route::currentRouteName() === 'aboutus') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span class="text-one">About
                                                Us</span>
                                <span class="text-two">About
                                                Us</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('ourteam')}}" class="@if(Route::currentRouteName() === 'ourteam') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span class="text-one">Our
                                                Team</span>
                                <span class="text-two">Our
                                                Team</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('services')}}" class="@if(Route::currentRouteName() === 'services') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span
                                                class="text-one">Services</span>
                                <span class="text-two">Services</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('faqs')}}" class="@if(Route::currentRouteName() === 'faqs') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span class="text-one">Faq's</span>
                                <span class="text-two">Faq's</span>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contactus')}}" class="@if(Route::currentRouteName() === 'contactus') active @endif rr-btn hover-bg-theme custom-menu">
                                <span class="btn-wrap">
                                            <span class="text-one">Contact
                                                Us</span>
                                <span class="text-two">Contact
                                                Us</span>
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="offset-widget-box">
                <h2 class="title text-center">Follow Us</h2>
                <div class="crp-footer-social header-menu">
                    @if(setting('site.facebook'))
                        <a href="{{setting('site.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                    @endif
                    @if(setting('site.instagram'))
                        <a href="{{setting('site.instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!-- </aside> -->
    <div class="offcanvas-overlay"></div>
    <!-- side toggle end -->

    @include('frontend.inc.header')

    <div class="has-smooth" id="has_smooth"></div>
    <div id="smooth-wrapper">
        <div id="smooth-content">
            <main>
                @yield('content')
            </main>
            @include('frontend.inc.footer')
        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{url('frontend/assets/vendor/jquery-3.7.1.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/swiper-bundle.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/gsap.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/ScrollTrigger.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/ScrollSmoother.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/ScrollToPlugin.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/SplitText.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/TextPlugin.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/customEase.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/Flip.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/jquery.meanmenu.min.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/backToTop.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/matter.js')}}"></script>
    <script src="{{url('frontend/assets/vendor/throwable.js')}}"></script>
    <script src="{{url('frontend/assets/js/magiccursor.js')}}"></script>
    <!-- Template Main JS File -->
    <script src="{{url('frontend/assets/js/main.js')}}"></script>

    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        $(document).ready(function() {
            let $slides = $(".hero-slider .slide");
            let currentIndex = 0;

            $slides.eq(currentIndex).addClass("active");

            setInterval(function() {
                $slides.eq(currentIndex).removeClass("active");
                currentIndex = (currentIndex + 1) % $slides.length;
                $slides.eq(currentIndex).addClass("active");
            }, 5000); // 5 seconds


            $("#currentYear").text(new Date().getFullYear());
        });

        $(document).ready(function() {
            var colors = ["#0495f3", "#f14246", "#f6861f", "#52b347"];

            $(".text-slider-item .title i").each(function() {
                var randomColor = colors[Math.floor(Math.random() * colors.length)];
                $(this).css("background", randomColor);
            });
        });

        $(document).ready(function() {
            var colors = ["#0495f3", "#f14246", "#f6861f", "#52b347"];

            $(".client-area .client-box").each(function() {
                var randomColor = colors[Math.floor(Math.random() * colors.length)];
                $(this).css("background-color", randomColor);
            });
        });

        $(document).mousemove(function(event) {
            $(".eye").each(function() {
                var eye = $(this);
                var x = eye.offset().left + eye.width() / 2;
                var y = eye.offset().top + eye.height() / 2;
                var rad = Math.atan2(event.pageX - x, event.pageY - y);
                var rot = (rad * (180 / Math.PI) * -1) + 180;
                eye.css({
                    'transform': 'rotate(' + rot + 'deg)'
                });
            });
        });

        jQuery(document).ready(function($) {
            var animationDelay = 2500;
            var revealDuration = 600;
            var revealAnimationDelay = 1000;

            // Define your color list
            var colors = ['#f14246', '#f6861f', '#0495f3', '#52b347'];

            function animateHeadline($headlines) {
                $headlines.each(function() {
                    var headline = $(this);

                    if (headline.hasClass('clip')) {
                        var spanWrapper = headline.find('.cd-words-wrapper'),
                            newWidth = spanWrapper.width() + 10;
                        spanWrapper.css('width', newWidth);
                    }

                    setTimeout(function() {
                        hideWord(headline.find('.is-visible').eq(0));
                    }, animationDelay);
                });
            }

            function hideWord($word) {
                var nextWord = takeNext($word);

                if ($word.parents('.cd-headline').hasClass('clip')) {
                    $word.parents('.cd-words-wrapper').animate({
                        width: '2px'
                    }, revealDuration, function() {
                        switchWord($word, nextWord);
                        showWord(nextWord);
                    });
                }
            }

            function showWord($word) {
                if ($word.parents('.cd-headline').hasClass('clip')) {
                    var wordIndex = $word.index();
                    var color = colors[wordIndex % colors.length];

                    // Apply color to word
                    $word.css('color', color);

                    // Apply same color to blinking cursor
                    $word.siblings('.cursor').css('background-color', color);

                    // Animate word reveal
                    $word.parents('.cd-words-wrapper').animate({
                        'width': $word.width() + 10
                    }, revealDuration, function() {
                        // Blink eyes on each new word
                        blinkEyes();

                        setTimeout(function() {
                            hideWord($word);
                        }, revealAnimationDelay);
                    });
                }
            }

            function takeNext($word) {
                return (!$word.is(':last-child')) ? $word.next() : $word.parent().children('b').eq(0);
            }

            function switchWord($oldWord, $newWord) {
                $oldWord.removeClass('is-visible').addClass('is-hidden');
                $newWord.removeClass('is-hidden').addClass('is-visible');
            }

            // Eye blink trigger
            function blinkEyes() {
                $(".eye").addClass("blink");
                setTimeout(function() {
                    $(".eye").removeClass("blink");
                }, 300);
            }

            animateHeadline($('.cd-headline'));
        });
    </script>
    <script>
        Fancybox.bind('[data-fancybox="gallery"]', {
            Thumbs: {
            autoStart: true,
            },
        });
    </script>

    <script>
        $(document).ready(function() {
            let selectedDate = null;
            let selectedTime = null;

            // Open modal
            $("#openModal").on("click", function() {
                $("#bookingModal").addClass("active");
                $(".cd-words-wrapper").addClass("hide"); // 🔴 hide text animation
            });

            // Close modal
            $("#closeModal").on("click", function() {
                $("#bookingModal").removeClass("active");
                $(".cd-words-wrapper").removeClass("hide"); // ✅ show back text animation
            });

            // Close form modal
            $("#closeFormModal").on("click", function() {
                $("#bookingModal").removeClass("active");
                $(".cd-words-wrapper").removeClass("hide"); // ✅ show back text animation
            });

            // Next to form
            $("#nextToForm").on("click", function() {
                if (selectedDate && selectedTime) {
                    $("#bookingModal").removeClass("active");
                    $("#formModal").addClass("active");
                } else {
                    alert("Please select both date and time to continue.");
                }
            });

            // Back to calendar
            $("#backToCalendar").on("click", function() {
                $("#formModal").removeClass("active");
                $("#bookingModal").addClass("active");
            });

            // Form submission
            $("#bookingForm").on("submit", function(e) {
                e.preventDefault();
                alert("Appointment booked successfully! We will confirm your booking shortly.");
                $("#formModal").removeClass("active");
                this.reset();
                selectedDate = null;
                selectedTime = null;
                $(".cd-words-wrapper").css("display", ""); // ✅ ensure animation returns
            });

            // Time slot selection
            $(".time-slot").on("click", function() {
                $(".time-slot").removeClass("selected");
                $(this).addClass("selected");
                selectedTime = $(this).text();
            });

            // Close modal when clicking outside
            $(window).on("click", function(e) {
                if ($(e.target).is("#bookingModal")) {
                    $("#bookingModal").removeClass("active");
                    $(".cd-words-wrapper").css("display", ""); // ✅ restore animation
                }
                if ($(e.target).is("#formModal")) {
                    $("#formModal").removeClass("active");
                    $(".cd-words-wrapper").css("display", ""); // ✅ restore animation
                }
            });
        });
    </script>

    <script>
        $(document).ready(function () {
            let $modal = $('#bookingModal');
            let $openModalBtn = $('#openModalBtn');
            let $closeModalBtn = $('#closeFormModal');
            let $stepContents = $('.step-content');
            let $steps = $('.step');
            let $prevBtn = $('#prevBtn');
            let $nextBtn = $('#nextBtn');
            let $submitBtn = $('#submitBtn');
            let currentStep = 1;

            // Close form modal
            $("#closeModalForm").on("click", function() {
                $("#bookingModal").removeClass("active");
            });

            // Open modal
            $openModalBtn.on('click', function () {
                $modal.show();
                $('body').css('overflow', 'hidden');
            });

            // Close modal
            $closeModalBtn.on('click', function () {
                $modal.hide();
                $('body').css('overflow', 'auto');
            });

            // Close modal when clicking outside
            $(window).on('click', function (event) {
                if ($(event.target).is($modal)) {
                    $modal.hide();
                    $('body').css('overflow', 'auto');
                }
            });

            // Initialize steps
            updateStepIndicator();

            // Next button click handler
            $nextBtn.on('click', function () {
                if (validateStep(currentStep)) {
                    if (currentStep < 5) {
                        currentStep++;
                        updateStepIndicator();
                    }

                    if (currentStep === 5) {
                        $nextBtn.addClass('d-none');
                        $submitBtn.removeClass('d-none');
                    }
                }
            });

            // Previous button click handler
            $prevBtn.on('click', function () {
                if (currentStep > 1) {
                    currentStep--;
                    updateStepIndicator();
                    $nextBtn.removeClass('d-none');
                    $submitBtn.addClass('d-none');
                }
            });

            // Form submission handler
            $('#bookingForm').on('submit', function (e) {
                e.preventDefault();
                if (validateStep(5)) {
                    alert('Registration submitted successfully! You will receive a confirmation email shortly.');
                    $modal.hide();
                    $('body').css('overflow', 'auto');
                }
            });

            // Update step indicator and show current step content
            function updateStepIndicator() {
                // Update step indicators
                $steps.each(function (index) {
                    if (index + 1 < currentStep) {
                        $(this).removeClass('active').addClass('completed');
                    } else if (index + 1 === currentStep) {
                        $(this).addClass('active').removeClass('completed');
                    } else {
                        $(this).removeClass('active completed');
                    }
                });

                // Show current step content
                $stepContents.each(function (index) {
                    if (index + 1 === currentStep) {
                        $(this).removeClass('d-none');
                    } else {
                        $(this).addClass('d-none');
                    }
                });

                // Hide previous button on first step
                if (currentStep === 1) {
                    $prevBtn.css('visibility', 'hidden');
                } else {
                    $prevBtn.css('visibility', 'visible');
                }
            }

            // Validate current step
            function validateStep(step) {
                let isValid = true;

                if (step === 1) {
                    let planSelected = $('input[name="planOption"]:checked').length;
                    if (!planSelected) {
                        alert('Please select a plan to continue');
                        isValid = false;
                    }
                } else if (step === 2) {
                    let fullName = $('#fullName').val();
                    let email = $('#email').val();
                    let phone = $('#phone').val();

                    if (!fullName || !email || !phone) {
                        alert('Please fill all required fields');
                        isValid = false;
                    }
                }
                // Additional validation for other steps can go here

                return isValid;
            }
        });
    </script>
    <!-- Cookie JS-->
    <script>
        setTimeout(() => {
            var checkbox = document.getElementById("customSwitch3");
            if (checkbox) {
                checkbox.checked = true;
                checkbox.dispatchEvent(new Event('change'));
                checkbox.disabled = true;
            }

            $(document).ready(function(){
                $(".accordion-button.custom-cookie-btn").click(function() {
                    $(this).toggleClass("active");
                });

                // check if accepted already
                if (localStorage.getItem('quay-space') === '1') {
                    $('.cookie-popup-container').hide();
                    $('html').removeClass('cookie-blocked');
                } else {
                    $('.cookie-popup-container').fadeIn(200);
                    $('html').addClass('cookie-blocked');
                }

                // accept cookie
                $('.accept-cookie').click(function () {
                    $('.cookie-popup').slideUp(300);
                    $('.cookie-popup-container').fadeOut(300);
                    $('html').removeClass('cookie-blocked');
                    localStorage.setItem('quay-space', '1');
                });

                // decline cookie
                $('.decline-cookie').click(function () {
                    $('.cookie-popup').slideUp(300);
                    $('.cookie-popup-container').fadeOut(300);
                    $('html').removeClass('cookie-blocked');
                    localStorage.setItem('quay-space', '0'); // 0 means declined
                });
            });
        }, 1000);
    </script>
    @yield('js')

   
</body>
</html>