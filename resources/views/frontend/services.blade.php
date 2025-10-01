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
    <section class="{{$Servicesdetail->slug}} services-section services-area section-padding  overflow-hidden active">
        <div class="container large">
            <div class="row gap-lg-2 gap-0">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="services-contents">
                        <div class="title title-wrapper">
                            <h2 class="section-title text-start font-instrumentsans-medium word-anim">
                                {{ ucwords($Servicesdetail->title)}}<span class="dot">.</span>
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
    <!-- Services about area end -->
    {{-- @if($Servicesdetail->headings->flatMap->cardContent->isNotEmpty())
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
            </div>
        </div>
    </section>
    @endif --}}
    @if($Servicesdetail->headings->flatMap->cardContent->isNotEmpty())
    <section class="{{ $Servicesdetail->slug }} services-section services-cards-area py-lg-5 py-md-3 py-3 overflow-hidden active">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-3 services-row-wrapper"><!-- ✅ new class added -->
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
                        @php $count = 0; @endphp
                        @foreach($heading->cardContent as $card)
                            @if($count < 3) <!-- ✅ sirf 3 services cards show -->
                            <div class="col-12 col-lg-3 col-md-6">
                                <div class="services-cards fade-anim">
                                    <div class="img">
                                        <img src="{{ asset('storage/' . $card->image) }}" alt="">
                                    </div>
                                    <div class="cards-content">
                                        <div class="cards-title mb-lg-3 mb-2">
                                            <h2 class="word-anim mb-lg-2 mb-2">{{ $card->title }}</h2>
                                            <p class="text">{!! $card->card_description !!}</p>
                                        </div>
                                        <div class="service-card-points d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                            @foreach ($card->cardPoints as $point)
                                                <div class="icon-para">
                                                    <i class="{{ $point->icon }}"></i>
                                                    <span>{{ $point->title }}</span>
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
                            @endif
                            @php $count++; @endphp
                        @endforeach

                        <!-- ✅ Last static "Need Help" card -->
                        <div class="col-12 col-lg-3 col-md-6">
                            <div class="services-cards needhelp-card fade-anim">
                                <div class="img">
                                    <img src="https://img.freepik.com/free-photo/support-colleagues_1098-13685.jpg" alt="">
                                </div>
                                <div class="cards-content">
                                    <div class="cards-title mb-lg-3 mb-2">
                                        <h2 class="word-anim mb-lg-2 mb-2">Need a helping hand?</h2>
                                        <p class="paraghraph-multi-lines">
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
                                                <a href="{{route('contactus')}}" class="rr-btn hover-bg-theme">
                                                    <span class="btn-wrap">
                                                        <span class="text-one">Talk with Us</span>
                                                        <span class="text-two">Talk with Us</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ✅ End Need Help Card -->

                    @endif
                @endforeach
            </div>
        </div>
    </section>
    @endif


    {{-- office-space  --}}
    <section class="office-space services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- co-working  --}}
    <section class="co-working services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- private-office --}}
    <section class="private-office services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- custom-office --}}
    <section class="custom-office services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- day-office --}}
    <section class="day-office services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- dedicated-desks --}}
    <section class="dedicated-desks services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- virtual-office --}}
    <section class="virtual-office services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- telephone-answering --}}
    <section class="telephone-answering services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- business-address --}}
    <section class="business-address services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- meeting-rooms --}}
    <section class="meeting-rooms services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- event-space --}}
    <section class="event-space services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- workplace-recovery --}}
    <section class="workplace-recovery services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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
    {{-- custom-space-solution --}}
    <section class="custom-space-solution services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
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