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
    <section class="page-title-area about-banner" style="background-image: url('frontend/assets/imgs/banner/about-us.webp');">
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
                            <div class="swiper-slide" data-target=".officespace">
                                <div class="services-navber-content active">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionofficespace.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Office Space</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".coworking">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutioncoworking.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Coworking</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".virtual">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionofficespace.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Virtual Office</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".meetingroom">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionmeetingrooms.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Meeting Room</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".membership">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionmembership.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Memberships</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".businessaddress">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionbusinessaddress.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Business Address</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".telephoneanswering">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutiontelephone.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Telephone Answering</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".eventspace">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionevents.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Event Space</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".private">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutionmeetingrooms.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Private Office</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".customoffice">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutioncustomoffice.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Custom Office</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".dayoffice">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutiondayoffice.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Day Office</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".hotdesks">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutiondayoffice.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Hot Desks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".dedicateddesks">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/solutiondedicated.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Dedicated Desks</span>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" data-target=".workplace">
                                <div class="services-navber-content">
                                    <div class="img">
                                        <img src="https://www.regus.com/icons/media/regus/redesign/secondary-icons-new/emergency.svg" alt="">
                                    </div>
                                    <div class="services-navber-title">
                                        <span>Workplace Recovery</span>
                                    </div>
                                </div>
                            </div>
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
    <section class="officespace services-section services-hide services-area section-padding  active">
        <div class="container large">
            <div class="row gap-lg-5 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Office Spaces<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            If you’re looking for beautifully-designed office space for rent, ours are suitable for any size of team and come fully serviced. So you can concentrate on growing your business distraction-free. Whether you need something for the short term, longer term,
                            or want to take a flexible approach, we’ve got an office space rental solution to suit you.
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
    <section class="officespace services-section services-hide services-cards-area py-lg-5 py-md-3 py-3 active">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-3">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                    Flexible office space solutions.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/medium-shot-woman-resigning_23-2149445783.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Private Office</h2>
                                <p class="text">
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
                                </div>
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
                <div class="col-12 col-lg-3 col-md-6">
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
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="coworking services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Coworking<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Our vibrant, beautifully-designed, open-plan coworking spaces can add an extra dimension to the way you work. They offer the chance to be part of a thriving community in our shared office space. A place where you can collaborate, connect and create new
                            opportunities for your business with like-minded individuals.
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
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280244/WebsiteImagery/Gallery/CW_1.jpg" alt="">
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
    <section class="coworking services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                    Vibrant coworking Flexible and affordable.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/group-young-business-professionals-having-meeting-diverse-group-young-designers-smiling-meeting-office_484651-12407.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Dedicated Desk</h2>
                                <p class="text">
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                <div class="col-3 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/team-graphic-designers-having-meeting_107420-42702.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Day Coworking</h2>
                                <p class="text">
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                <div class="col-3 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/business-people-group-modern-office-have-team-meeting-brainstorming-while-working-tablet-laptop-presenting-ideas-take-notes_530697-19624.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Coworking membership</h2>
                                <p class="text">
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                <div class="col-3 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/empty-office-workplace-with-table-chair-computer_1170-1967.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Office Space</h2>
                                <p class="text">
                                    A range of ready-to-use, fully equipped offices with everything you need to get started.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="virtual services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Virtual Offices<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            A virtual office provides your business an address at any of our office locations worldwide, enabling you to build an instant presence, without the costs of a dedicated office. We can handle your mail and forward it on, take your calls, and you can easily
                            book a meeting room or office when you’re in town.
                        </p>
                        <div class="d-flex gap-lg-3 gap-2">
                            <div class="all-btn-wrapper fade-anim">
                                <a href="#" class="rr-btn hover-bg-theme">
                                    <span class="btn-wrap">
                            <span class="text-one">Book Address</span>
                                    <span class="text-two">Book Address</span>
                                    </span>
                                </a>
                            </div>
                            <div class="all-btn-wrapper fade-anim">
                                <a href="#" class="rr-btn hover-bg-theme">
                                    <span class="btn-wrap">
                            <span class="text-one">Learn More</span>
                                    <span class="text-two">Learn More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-lg-1 order-md-1 order-0">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280252/WebsiteImagery/Gallery/VO_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="virtual services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                    Virtual office, real presence.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/day-office-travel-agency_23-2150769958.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Business Address</h2>
                                <p class="paraghraph-multi-lines">
                                    Build a business and enhance your credibility using a virtual address for your business at any of our 4000+ locations.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                            <img src="https://img.freepik.com/premium-photo/entrepreneur-chatting-with-people-business-videocall-attending-remote-telework-meeting-desk-executive-manager-planning-report-with-colleagues-online-telecoference-webcam-talk_482257-60127.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Virtual office</h2>
                                <p class="paraghraph-multi-lines">
                                    A prestigious Business address, with Telephone answering, a Virtual Receptionist and access to our global business network.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                            <img src="https://img.freepik.com/free-photo/man-using-video-call-meeting-with-manager-computer-corporate-employee-talking-trainer-online-remote-conference-with-webcam-business-development-virtual-marketing_482257-35912.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Virtual Office Plus</h2>
                                <p class="paraghraph-multi-lines">
                                    Everything in our Virtual Office package, plus access to meeting rooms and 5 days of office space each month.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
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
                    <div class="services-cards needhelp-card fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/support-colleagues_1098-13685.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Need a helping hand?</h2>
                                <p class="paraghraph-multi-lines">
                                    Arrange a 1:1 call with a professional advisor.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="booknow.html" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Talk with Us</span>
                                            <span class="text-two">Talk with Us</span>
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
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="meetingroom services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Meeting Rooms<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            There are thousands of reasons you might want a place to meet. Thankfully, we’ve got a wide choice of over 10,000 meeting rooms on offer. From small rooms to boardrooms and large conference facilities. Book the meeting room you require, for as long as
                            you need, in just minutes.
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
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_345,h_259/v1753280472/WebsiteImagery/Gallery/MR_1.jpg" alt="">
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
    <section class="meetingroom services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                    Space to meet, share, and collaborate
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/business-meeting-room-office_1170-1966.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Meeting Room</h2>
                                <p>
                                    Perfect places to meet, collaborate, and interview. Available by the hour, with our on-site team to support you.
                                </p>
                            </div>
                            <div class="two-sublines d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-location-dot"></i>
                                    <span>Space to meet, share, and collaborate</span>
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
                            <img src="https://img.freepik.com/free-photo/group-casually-dressed-colleagues-sitting-office-open-door-talking_1098-20440.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Interview rooms</h2>
                                <p>
                                    Professional, private spaces for interviewing candidates, annual appraisals, or running a research group.
                                </p>
                            </div>
                            <div class="two-sublines d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Make the right impression</span>
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
                            <img src="https://img.freepik.com/free-photo/full-shot-people-correcting-grammar-mistakes_23-2150171159.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Training Room</h2>
                                <p>
                                    Perfect when you need a purpose-built space with desks, whiteboards, and screens for training sessions.
                                </p>
                            </div>
                            <div class="two-sublines d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <img src="https://www.regus.com/icons/media/regus/redesign/navigation-icons/svg/16/nocapital.svg" alt="">
                                    <span>Equipped for learning</span>
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
                    <div class="services-cards needhelp-card fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/support-colleagues_1098-13685.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Need a helping hand?</h2>
                                <p>
                                    Arrange a 1:1 call with a professional advisor.
                                </p>
                            </div>
                            <div class="two-sublines d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-phone-volume"></i>
                                    <span>Buy month or year</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Team of any size</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="booknow.html" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Talk With Us</span>
                                            <span class="text-two">Talk With Us</span>
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
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="membership services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Membership<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Our membership packages offer complete flexibility. They allow access to any center worldwide by booking either a coworking desk or a private office whenever you need them.
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
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280307/WebsiteImagery/Gallery/MS_1.jpg" alt="">
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
    <section class="membership services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    Access coworking spaces and private offices by the day. Or choose a monthly package with 5, 10 or unlimited days.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/creative-business-people-discussing-office_107420-33671.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Coworking Packages</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Join a like-minded community</p>
                                </div>
                                <p>
                                    Work from thousands of inspiring coworking spaces and connect with a community of like-minded individuals.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/sad-dismissed-man-holding-box-with-belongings-after-being-fired-while-his-collegues-looking-hom-working-startup-office-businesspeople-brainstorming-ideas-developing-marketing-project_482257-40109.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Office Packages</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Office space when you need it</p>
                                </div>
                                <p>
                                    Need occasional access to professional, private, and fully equipped office space? This is the package for you.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/woman-holding-shopping-boxes_329181-8874.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Enterprise Packages</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Customized solutions</p>
                                </div>
                                <p>
                                    Fully-flexible, cost-effective packages that let companies access the world's largest flexible workspace network.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->


    <!-- Services about area start  -->
    <section class="businessaddress services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Business Address<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Establish your company in a prestigious location without the overhead of a dedicated office with our Business Address plan. Use our office address to create a professional image, protect your privacy, and for company registration, where legally authorized.
                            We also handle your mail and forward it on, and you can access meeting or office space as needed.
                        </p>
                        <div class="d-flex gap-lg-3 gap-2">
                            <div class="all-btn-wrapper fade-anim">
                                <a href="#" class="rr-btn hover-bg-theme">
                                    <span class="btn-wrap">
                            <span class="text-one">Buy Now</span>
                                    <span class="text-two">Buy Now</span>
                                    </span>
                                </a>
                            </div>
                            <div class="all-btn-wrapper fade-anim">
                                <a href="#" class="rr-btn hover-bg-theme">
                                    <span class="btn-wrap">
                            <span class="text-one">Find a location</span>
                                    <span class="text-two">Find a location</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-lg-1 order-md-1 order-0">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280329/WebsiteImagery/Gallery/BA_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="businessaddress services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    There’s more to our virtual office solutions than a business address. See which package is right for you.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/day-office-travel-agency_23-2150769958.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Business Address</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>A virtual presence anywhere</p>
                                </div>
                                <p>
                                    Give your business a professional address and choose from thousands of locations worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/businesswoman-taking-notes-clipboard-sitting-desk-corporate-office-while-taking_482257-4201.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Telephone answering</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Professional call management</p>
                                </div>
                                <p>
                                    We'll manage incoming calls from your local phone number and can answer, forward, or take messages
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/entrepreneur-chatting-with-people-business-videocall-attending-remote-telework-meeting-desk-executive-manager-planning-report-with-colleagues-online-telecoference-webcam-talk_482257-60127.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Virtual Offices</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Our most popular package</p>
                                </div>
                                <p>
                                    A prestigious address, virtual receptionist support, and access to our global business lounge network.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/man-using-video-call-meeting-with-manager-computer-corporate-employee-talking-trainer-online-remote-conference-with-webcam-business-development-virtual-marketing_482257-35912.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Virtual Offices Plus</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-cart-shopping"></i>
                                    <p>Our most comprehensive package</p>
                                </div>
                                <p>
                                    Everything in our Virtual Office package, plus access to meeting rooms and 5 days of office space each month.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="telephoneanswering services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Telephone Answering<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Our telephone answering services efficiently manage incoming calls to your local number, allowing you to focus on what matters most - building your business. Our professional receptionists can answer your calls in your business name, transfer callers,
                            or take messages and pass them on.
                        </p>
                        <div class="d-flex d-lg-flex d-md-none flex-lg-row flex-column w-100 gap-4">
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
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 order-lg-1 order-md-1 order-0">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280250/WebsiteImagery/Gallery/TA_1.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-12 order-md-2 d-none d-lg-none d-md-flex">
                    <div class="services-contents w-100">
                        <div class="d-md-flex w-100 gap-4 justify-content-between pt-md-5 pe-md-5">
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
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="telephoneanswering services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody word-anim">
                                    Our Telephone Answering services.
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/portrait-modern-woman-working-with-laptop_23-2148131714.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Virtual Attendant</h2>
                                <p class="mb-lg-2 mb-2">
                                    An auto attendant that automatically answers and directs calls to designated contacts or voicemail.
                                </p>
                                <span class="need-help-div  text-black">
                            Our appetizer plan
                        </span>
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
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/premium-photo/remote-work-brunette-woman-with-headphones-working-remotely-online-her-laptop-girl-actively-discussing-business-with-her-colleagues-through-video-call-her-cozy-home-workplace_221404-343.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Live Receptionist</h2>
                                <p class="mb-lg-2 mb-2">
                                    Our professional receptionists are experienced call handlers that answer and direct calls in your company name.
                                </p>
                                <span class="need-help-div  text-black">
                            Our best value plan
                        </span>
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
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/business-partners-meet-with-people_482257-79716.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Live receptionist Premium</h2>
                                <p class="mb-lg-2 mb-2">
                                    Everything in our Live Receptionist service, plus call screening, message taking and advanced call routing, all in your company name.
                                </p>
                                <span class="need-help-div  text-black">
                            Our most comprehensive plan
                        </span>
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
                <div class="col-12 col-md-6 col-lg-3">
                    <div class="services-cards needhelp-card fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="https://img.freepik.com/free-photo/support-colleagues_1098-13685.jpg" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Need a helping hand?</h2>
                                <p>
                                    Arrange a 1:1 call with a professional advisor.
                                </p>
                            </div>
                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Agents available worldwide</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Discuss different options</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Receive a personalized quote</span>
                                </div>
                                <div class="icon-para">
                                    <i class="fa-regular fa-people"></i>
                                    <span>Sign up and get started</span>
                                </div>
                            </div>
                            <div class="d-flex cutom-btn-arrow">
                                <div class="first-btn">
                                    <div class="all-btn-wrapper">
                                        <a href="booknow.html" class="rr-btn hover-bg-theme">
                                            <span class="btn-wrap">
                                        <span class="text-one">Talk With Us</span>
                                            <span class="text-two">Talk With Us</span>
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
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="eventspace services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start fade-top font-instrumentsans-medium">
                                Event Space<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Whatever the event, large or small, we can deliver. So whether you’re hosting a product launch, evening event, or an all-day company celebration, we’ll be there to help it run smoothly—fully-catered and supported.
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
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
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
    <section class="eventspace services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-md-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    We’ll help you run a memorable private or corporate event, from selecting the perfect venue to providing all the support you might need.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium">
                                Host any kind of event any where, any time<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Whatever the event, large or small, we can deliver. So whether you’re hosting a product launch, evening event, or an all-day company celebration, we’ll be there to help it run smoothly—fully-catered and supported.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Drinks reception
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Annual conference
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Company celebration
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Drinks reception
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Annual conference
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Company celebration
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="eventspace services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images order-lg-0 order-1">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents order-lg-1 order-0">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium">
                                Whatever the event, we’ve got the space<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Whatever you need, and wherever you need it, we have the perfect space to meet your requirements. With thousands of locations worldwide, and a variety of sizes and configurations to choose from.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Large conference rooms
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Informal lounges
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Event halls
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Auditoriums
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Outdoor terraces
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Exhibition spaces
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->


    <!-- Services about area start  -->
    <section class="private services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Private Space<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Looking for a fully-serviced, private office space for rent? A place where you can shut the door and focus on doing what you do best? We can offer your business an established base that’s move-in ready and can fit any size of team. Beautifully-designed
                            and fully-supported, our private offices also allow you to access kitchen facilities, meeting rooms, and our global network of business lounges.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="private services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    An unrivaled selection of fully-furnished private office space for rent. Move-in ready and available at over 4000 locations worldwide.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                All the benefits of private office space, hassle-free
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Running a business is complicated enough. Our private office space includes all you need to get up and running straight away, for one simple monthly cost. With everything from ergonomic furniture to business-grade amenities, plus use of our break-out
                            areas and worldwide business lounge network.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    ContractA wide choice of different sizes, layouts, and configurations
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Our support teams are here to take care of you during the day
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    PlaceholderWe look after your space by keeping it clean and secure
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Tech essentials such as WiFi and printer access included
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Book meeting rooms or make use of break-out areas
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="private services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                Rent private workspace that grows with you<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            All of our private office spaces come with flexible terms. Allowing you to increase floor space when you grow, switch to a new location, or open an additional office in a different town or country if your business requires it.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Increase floor space as your business grows, or as your requirements change
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Add extra desks to your private office when you need to grow your team
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Update your configuration by adding executive offices or more meeting rooms
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Switch locations, or even add another location, as your company evolves
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area End  -->

    <!-- Services about area start  -->
    <section class="customoffice services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Custom Office<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Why not design a customizable office space that’s perfectly in tune with your business’s brand? Change the layout and configure the office design to match your team’s needs. Then add a company logo and branding. And even fill the space with your choice
                            of furniture, tech, and storage options. Many of our "Design Your Office" options are included in the price, so this is a cost-effective way of customizing the office design to suit you.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280307/WebsiteImagery/Gallery/CO_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customoffice services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    Modern office design can inspire and energize your team. And 90% of our furniture and branding options are available with no extra charge
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                Office space planning, designed your way<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Creating the optimum layout for your office space design is vital to the success of your business. Adding meeting rooms, break-out areas, executive offices, or even a private reception to your design can make a real difference to how you work—and the
                            image your company projects.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    You can customize everything, including colors and branding
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Choose from a range of desk sizes and styles
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Select from a wide variety of stylish accessories
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A customized technology setup designed around you
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    High-quality, ergonomic furniture from top brands
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Storage options to suit your team’s requirements
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="customoffice services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                Fully-customizable office space, fully supported<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Our custom office space doesn’t just look the part, it also helps your workday run more efficiently. And if you need it, we’re here to provide even more assistance, with our friendly team of experts.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Reception team to help you and greet your guests
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Membership to our global network of business lounges
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    All cleaning, utilities, and security provided
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Professional IT and support services
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Includes use of meeting rooms and break-out areas
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A range of discounts and networking events available
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="dayoffice services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Day Offices<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Why not rent an office for the day when you or your team need somewhere to focus? Our day offices are private, flexible, and hassle-free, and include everything you need to get straight down to work. Including business-grade WiFi and ergonomic furniture.
                            So whether you just want to try a serviced office for size, or need a short-term base for a project, we’ve got the answer. Of course, if you don’t require an office for the full day, we can help out with hourly
                            office space rental options too.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_345,h_259/v1753280250/WebsiteImagery/Gallery/DO_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dayoffice services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    Daily office space rental whenever you need it, by the hour day, or longer, at 4,000+ locations worldwide. You can even book and access on the same day.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                Rent an office for the day without the commitment<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Day offices deliver all the advantages of a professional, supported office space, but without needing to commit financially to a full-time office rental.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Our fully equipped offices project a professional image
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Includes access to meeting rooms and other amenities
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    With flexible booking, in advance or on the day
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible space that helps you collaborate or work near clients
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Stay just an hour, the whole day or as long as you need
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Book and manage on the go with the Regus mobile app
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dayoffice services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                Daily or hourly office space with everything included<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Whether you need to rent office space for a day or have something longer term in mind, our daily office space rentals include everything your business requires. And to make sure your workday runs smoothly, we even have an on-site support team who’ll prepare
                            your office and look after you.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Expert teams on hand to offer help for your business
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Ergonomic seating and desks plus communal printers
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    High-speed WiFi and tech support
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    We include cleaning, utilities, and security in our price
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="hotdesks services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Hot-desking<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            If you thrive on meeting new people and like every day to be a bit different, why not Hot Desk in our coworking spaces? Book, turn up, and find a work space that’s convenient for you, with lots of opportunities to network with fellow professionals and
                            entrepreneurs in our coworking community.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_345,h_259/v1753280479/WebsiteImagery/Gallery/HD_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hotdesks services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    Renting a Hot Desk combines the maximum in flexibility with the opportunity to network with other successful businesses.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                How Hot Desking Works For You<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            When you Hot Desk in a coworking space, you can plug in anywhere and get straight to work. Hot Desking combines simplicity with cost savings, and will appeal to those who enjoy making new business contacts and approaching each day with a fresh perspective.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Work as flexibly as you like. Pay-per-use or buy one of our 5, 10 or unlimited day packages
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Have the option to book a meeting room when you need to get together in person
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Hot Desks come with ergonomic furniture from top brands as standard
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Hot Desk wherever you need to. We’re in 4,000+ locations, so there’s one near you
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Network in our open-plan area, or work distraction-free in a shared office. It’s your choice
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    The Regus app makes it easy to book your Hot Desk and manage your account
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="hotdesks services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                How Hot Desking Drives Your Business<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            When you Hot Desk in our coworking spaces, you’ll have endless opportunities to network with fellow entrepreneurs and professionals. Why not build up your new business contacts and connect with our worldwide community of 8 million professionals today?
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Enjoy multiple networking opportunities when you Hot Desk in our shared workspace
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    You can Hot Desk at a location that’s near you and is local to your business community
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Connect with people and develop your business through regular networking events
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Hot Desking includes use of breakout areas for meetings and networking
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="dedicateddesks services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Dedicated Desk<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Rent a Dedicated Desk in our shared office space and you’ll enjoy the best of both worlds. You’ll have your own exclusive desk, but with the opportunity to collaborate and connect with like-minded people in a vibrant coworking community. You’ll also have
                            lockable storage space for your equipment and belongings.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280295/WebsiteImagery/Gallery/DD_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dedicateddesks services-section services-hide services-content-img services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    A Dedicated Desk in a shared space where you can network with like-minded business people. And when you need to move on to something bigger, we’re flexible.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="service-about-img-content">
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                The Advantages of a Dedicated Desk<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            With a Dedicated Desk in a shared space, you can have it both ways. You’ll have the flexibility to connect and network with other business people in an open-plan office. But you’ll have also have a permanent desk space that’s yours, with lockable storage
                            for your things.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A Dedicated Desk is your own permanent space and won’t be used by other people
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    You’ll enjoy more opportunities to network and collaborate with fellow business people
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Belongings can be left on your Dedicated Desk overnight or stored in a secure locker
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Renting a Dedicated Desk gives you somewhere to focus and be more productive
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Customers can also access shared break-out areas and conference rooms
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A Dedicated Desk is usually cheaper per month than making individual bookings
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="dedicateddesks services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                How Hot Desking Drives Your Business<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            When you Hot Desk in our coworking spaces, you’ll have endless opportunities to network with fellow entrepreneurs and professionals. Why not build up your new business contacts and connect with our worldwide community of 8 million professionals today?
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Enjoy multiple networking opportunities when you Hot Desk in our shared workspace
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    You can Hot Desk at a location that’s near you and is local to your business community
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Connect with people and develop your business through regular networking events
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Hot Desking includes use of breakout areas for meetings and networking
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services about area end -->

    <!-- Services about area start  -->
    <section class="workplace services-section services-hide services-area section-padding">
        <div class="container large">
            <div class="row gap-lg-5">
                <div class="col-6">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                Workplace recovery<span class="dot">.</span>
                            </h2>
                        </div>
                        <p class="text fade-top text-start">
                            Every business can be interrupted by unexpected events beyond their control. Why not protect yourself from costly disruption with our market-leading workplace recovery solutions? We’ll help you recover quickly—and get back to business as usual.
                        </p>
                        <div class="book-a-meeting-main fade-anim flex-column gap-4 w-100">
                            <!-- <div class="send-email">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="text" id="email" placeholder=" " required />
                        <label for="email">Email</label>
                        <div class="custom-send-btn rr-btn">
                            <span class="btn-wrap">
                                <span class="text-one">Submit</span>
                                <span class="text-two">Submit</span>
                            </span>
                        </div>
                    </div> -->
                            <div class="d-flex gap-lg-5 gap-3 justify-content-between">
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
                <div class="col-5">
                    <div class="services-image">
                        <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280272/WebsiteImagery/Gallery/WR_1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="workplace services-section services-hide services-cards-area py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="col-12 pb-lg-5 pb-3">
                    <div class="services-content">
                        <div class="section-title-wrapper mb-lg-3 mb-2">
                            <div class="title-wrapper">
                                <h4 class="section-title long-title text-center font-sequelsans-romanbody word-anim">
                                    We’ll keep your business running if the unexpected happens, with access to furnished, fully-serviced workspace—available in as little as four hours.
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="{{url('frontend/assets/imgs/about/about-banner.webp')}}" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Dynamic</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-phone-volume"></i>
                                    <p>For 20% of your core team</p>
                                </div>
                                <p>
                                    Access a fully-equipped private office space in one business day, with up to 30 days us per year.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="{{url('frontend/assets/imgs/about/about-banner.webp')}}" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Reserve</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-phone-volume"></i>
                                    <p>For the vital 1% of your team</p>
                                </div>
                                <p>
                                    Move into a reserved, private workspace with secure IT infrastructure in as little as four hours, for unlimited days each year.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="services-cards fade-anim">
                        <div class="img">
                            <!-- <div class="top-color"></div> -->
                            <img src="{{url('frontend/assets/imgs/about/about-banner.webp')}}" alt="">
                            <!-- <div class="bottom-color"></div> -->
                        </div>
                        <div class="cards-content">
                            <div class="cards-title mb-lg-4 mb-2">
                                <h2 class="word-anim mb-lg-2 mb-2">Rapid</h2>
                                <div class="d-flex justify-content-start align-items-center gap-lg-2 py-lg-2">
                                    <i class="text-black fa-thin fa-phone-volume"></i>
                                    <p>On-demand access for all</p>
                                </div>
                                <p>
                                    Offers the use of emergency, on-demand office and coworking space. Readily available at 4,000 locations worldwide.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="workplace services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="">
                        </div>
                    </div>
                    <div class="services-contents">
                        <div class="four-borders">
                            <div class="d-flex">
                                <div class="border-primary"></div>
                                <div class="border-secondary"></div>
                            </div>
                            <div class="d-flex">
                                <div class="border-third"></div>
                                <div class="border-fourth"></div>
                            </div>
                        </div>
                        <div class="title title-wrapper">
                            <h4 class="section-title text-start font-instrumentsans-medium word-anim">
                                How Hot Desking Drives Your Business<span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            When you Hot Desk in our coworking spaces, you’ll have endless opportunities to network with fellow entrepreneurs and professionals. Why not build up your new business contacts and connect with our worldwide community of 8 million professionals today?
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Enjoy multiple networking opportunities when you Hot Desk in our shared workspace
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    You can Hot Desk at a location that’s near you and is local to your business community
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Connect with people and develop your business through regular networking events
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Hot Desking includes use of breakout areas for meetings and networking
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
@stop 