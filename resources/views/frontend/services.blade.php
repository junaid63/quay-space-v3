@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Services
@stop

@section('css')
    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
@stop

@section('content')


    <!-- page title area start  -->
    <section class="page-title-area about-banner" style="background-image: url({{url('frontend/assets/imgs/banner/about-us.webp')}});">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">Services</h2>
                </div>
            </div>
        </div>
    </section>

    <!-- <section class="services-pages-bars sticky-section pin-spacer"> -->
    <section class="services-pages-bars sticky-section" data-speed="0">
        <div class="container-full">
            <div class="row">
                <div class="service-navber">
                    <!-- Swiper -->
                    <div class="swiper servicesCards">
                        <div class="swiper-wrapper">
                            {{-- @foreach ($Servicesget as $service)
                                <div class="swiper-slide">
                                    <a href="{{ route('services', $service->slug) }}" 
                                    class="services-navber-content {{ $Servicesdetail->id == $service->id ? 'active' : '' }}">
                                        <div class="img">
                                            <img src="{{ url('storage/' . $service->icon) }}" alt="">
                                        </div>
                                        <div class="services-navber-title">
                                            <span>{{ $service->title }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach --}}
                            @foreach ($Servicesget as $service)
                                <div class="swiper-slide" data-target="{{$service->slug}}">
                                    <a href="{{ route('services', $service->slug) }}" 
                                    class="services-navber-content {{ $Servicesdetail->id == $service->id ? 'active' : '' }}">
                                        <div class="img">
                                            <img src="{{ url('storage/' . $service->icon) }}" alt="">
                                        </div>
                                        <div class="services-navber-title">
                                            <span>{{ $service->title }}</span>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- Services about area start  -->
    <section class="{{ $Servicesdetail->slug }} services-section services-area section-padding  overflow-hidden active">
        <div class="container large">
            <div class="row gap-lg-2 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                {{ $Servicesdetail->title }}<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            {!! $Servicesdetail->description !!}
                        </p>

                        <div class="d-block d-lg-block d-md-none book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <div class="service-contacts-main d-flex gap-lg-5 gap-3 justify-content-between">
                                <div class="service-contacts">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <div class="d-flex flex-column gap-2">
                                        <label for="">Talk to us now:</label>
                                        <a href="tel:+44 121 269 3637">+44 121 269 3637</a>
                                    </div>
                                </div>
                                <div class="service-contacts">
                                    <i class="fa-regular fa-envelope"></i>
                                    <div class="d-flex flex-column gap-2">
                                        <label for="">Connect with us:</label>
                                        <a href="mailto:info@quay-space.co.uk">info@quay-space.co.uk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="book-a-calendy">
                                <div class="all-btn-wrapper">
                                    <a href="#" class="rr-btn hover-bg-theme">
                                        <span class="btn-wrap">
                                <span class="text-one">Book A Meeting</span>
                                        <span class="text-two">Book A Meeting</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-lg-1 order-md-1 order-0">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280271/WebsiteImagery/Gallery/OS_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12 mt-md-5 order-md-2 d-none d-lg-none d-md-block">
                    <div class="services-contents">
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">

                            <div class="service-contacts-main d-flex gap-lg-5 gap-3 justify-content-between">
                                <div class="service-contacts">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <div class="d-flex flex-column gap-2">
                                        <label for="">Talk to us now:</label>
                                        <a href="tel:+44 121 269 3637">+44 121 269 3637</a>
                                    </div>
                                </div>
                                <div class="service-contacts">
                                    <i class="fa-regular fa-envelope"></i>
                                    <div class="d-flex flex-column gap-2">
                                        <label for="">Connect with us:</label>
                                        <a href="mailto:info@quay-space.co.uk">info@quay-space.co.uk</a>
                                    </div>
                                </div>
                            </div>
                            <div class="book-a-calendy">
                                <div class="all-btn-wrapper">
                                    <a href="#" class="rr-btn hover-bg-theme">
                                        <span class="btn-wrap">
                                <span class="text-one">Book A Meeting</span>
                                        <span class="text-two">Book A Meeting</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- @if(count($Servicesdetail->headings) < 0 ) --}}
    <section class="{{ $Servicesdetail->slug }} services-section services-cards-area py-lg-5 py-md-3 py-3 overflow-hidden active">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-3">
                @foreach($Servicesdetail->headings as $heading)
                    <div class="col-12 pb-lg-5 pb-3">
                        <div class="services-content">
                            <div class="section-title-wrapper mb-lg-3 mb-2">
                                <div class="title-wrapper">
                                    <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                        {{ $heading->heading }}
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if($heading->cardContent)
                        @foreach($heading->cardContent as $card)
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="services-cards fade-anim">
                                <div class="img">
                                    <!-- <div class="top-color"></div> -->
                                    <img src="{{ url('storage/' . $card->image) }}" alt="">
                                    <!-- <div class="bottom-color"></div> -->
                                </div>
                                <div class="cards-content">
                                    <div class="cards-title mb-lg-4 mb-2">
                                        <h2 class="word-anim mb-lg-2 mb-2">
                                            {{ $card->title }}
                                        </h2>
                                        <p class="text">
                                            {!! $card->card_description !!}
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                        @foreach ($card->cardPoints as $point)
                                        <div class="icon-para">
                                            <i class="{{ $point->icon }}"></i>
                                            <span>
                                                {{ $point->title }}
                                            </span>
                                        </div>
                                        @endforeach
                                    </div>
                                    <div class="d-flex cutom-btn-arrow">
                                        <div class="first-btn">
                                            <div class="all-btn-wrapper">
                                                <a href="{{route('booknow')}}" class="rr-btn hover-bg-theme">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Book Now</span>
                                                        <span class="text-two">Book Now</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="second-btn">
                                            <div class="all-btn-wrapper">
                                                <a href="#" class="rr-btn hover-bg-theme">
                                                    <span class="btn-wrap">
                                                <span class="text-one"><i class="fa-regular fa-arrow-right"></i></span>
                                                    <span class="text-two"><i class="fa-regular fa-arrow-right"></i></span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                @endforeach

                {{-- <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/modern-equipped-computer-lab_23-2149241198.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Custom Space</h2>
                                <p class="text">
                                    Tailor your workspace to fit your brand and workflow. From layouts to design, we’ll create a setup that works for your business.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-ruler-combined"></i>
                                    <span>Flexible layouts & custom fit-outs</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-users"></i>
                                    <span>Scalable for teams of any size</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="{{route('membership')}}" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Book Now</span>
                                            <span class="text-two">Book Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="second-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="#" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one"><i class="fa-regular fa-arrow-right"></i></span>
                                            <span class="text-two"><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/indoor-shot-attractive-experienced-mature-woman-architect-sitting-desk-checking-engineering-drawings-by-her-ambitious-skilled-young-colleague-people-job-occupation-cooperation_344912-1633.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Day Space</h2>
                                <p class="text">
                                    Flexible access to professional workspace whenever you need it — without long-term commitments.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-calendar-day"></i>
                                    <span>Pay by the day, no contracts</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-wifi"></i>
                                    <span>High-speed Wi-Fi & shared amenities</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="booknow.html" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Book Now</span>
                                            <span class="text-two">Book Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="second-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="#" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one"><i class="fa-regular fa-arrow-right"></i></span>
                                            <span class="text-two"><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/close-up-young-business-person-doing-internship_23-2149305389.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Office Memberships</h2>
                                <p class="text">
                                    Join the Quay Space community with flexible coworking memberships built around your schedule.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-chair"></i>
                                    <span>Hot desks & coworking access</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-network-wired"></i>
                                    <span>Networking & community events</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="booknow.html" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Book Now</span>
                                            <span class="text-two">Book Now</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                                <div class="second-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="#" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one"><i class="fa-regular fa-arrow-right"></i></span>
                                            <span class="text-two"><i class="fa-regular fa-arrow-right"></i></span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
    {{-- @endif --}}''
    <!-- Services about area end -->

    <!-- client area start  -->
    @include('frontend.inc.amenities')
    <!-- client area end  -->

    <!-- cta area start  -->
    @include('frontend.inc.letswork')
    <!-- cta area end  -->

    <!-- Newsletter area start  -->
    @include('frontend.inc.newsletter')
    <!-- Newsletter area end -->


@stop

@section('js')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var partnerSwiper = new Swiper('.servicesCards', {
            slidesPerView: 2,
            spaceBetween: 0,
            // loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 4
                },

                980: {
                    slidesPerView: 6
                },
                1300: {
                    slidesPerView: 8
                },
                1900: {
                    slidesPerView: 12
                }
            }
        });
    </script>
    <script>
        $(document).ready(function() {
            $("#currentYear").text(new Date().getFullYear());
        });
    </script>
    <script>
        $(document).ready(function () {
            // ---------- HOME PAGE ----------
            $(document).on("click", ".icon-content", function () {
                var target = $(this).data("target"); // e.g., "meeting-room"
                if (target) {
                    // Safe redirect with slug as query param
                    window.location.href = "/services?service=" + target;
                }
            });

            // ---------- SERVICE PAGE ----------
            let pathParts = window.location.pathname.split("/");
            // Example: /services/meeting-room → ["", "services", "meeting-room"]
            let serviceFromPath = pathParts[2];

            let urlParams = new URLSearchParams(window.location.search);
            let serviceFromQuery = urlParams.get("service");

            // Final service slug check
            let service = serviceFromPath || serviceFromQuery;

            if (service) {
                activateService(service);
            } else if ($(".swiper-slide").length) {
                // Agar slug URL me nahi hai → pehla wala slug le lo
                let $firstService = $(".swiper-slide").first();
                let defaultService = $firstService.data("target"); // e.g. "private-office"

                activateService(defaultService);

                // URL update bina reload
                window.history.replaceState(null, "", "/services?service=" + defaultService);
            }

            // ---------- SERVICE PAGE NAVIGATION ----------
            $(".swiper-slide").on("click", function () {
                let targetSlug = $(this).data("target"); // e.g. "custom-space"

                activateService(targetSlug);

                // URL update bina reload
                window.history.pushState(null, "", "/services?service=" + targetSlug);
            });

            // 🔹 Common function: activate service
            function activateService(service) {
                $(".services-navber-content").removeClass("active");
                $(".services-section").removeClass("active");
                $(".swiper-slide").removeClass("active");

                // Navbar highlight
                $(`.swiper-slide[data-target="${service}"] .services-navber-content`).addClass("active");
                $(`.swiper-slide[data-target="${service}"]`).addClass("active");

                // Section show
                $(`.${service}`).addClass("active");
            }
        });
    </script>
@stop 