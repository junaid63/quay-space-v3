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
    <section class="page-title-area about-banner" style="background-image: url({{url('frontend/assets/imgs/banner/services.jpg')}});">
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
                            @foreach ($Servicesget as $service)
                                <div class="swiper-slide" data-target="{{$service->slug}}">
                                    <a href="{{ route('services', $service->slug) }}" 
                                    class="services-navber-content {{ $Servicesdetail->id == $service->id ? 'active' : '' }}">
                                        <div class="img">
                                            <img src="{{ url('storage/' . $service->icon) }}" alt="{{ $service->title }} Icon">
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
            <div class="row gap-lg-5 gap-0">
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
                                    <a href="javascript:void(0);" class="rr-btn hover-bg-theme bookMeetingBtn">
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
                        @if(!empty($Servicesdetail->image))
                            <img src="{{ url('storage/' . $Servicesdetail->image) }}" alt="{{ $Servicesdetail->title }}">
                        @else
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280271/WebsiteImagery/Gallery/OS_1.jpg" alt="Service Image">
                        @endif
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
                                    <a href="javascript:void(0);" class="rr-btn hover-bg-theme bookMeetingBtn">
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

                    {{-- @if($heading->cardContent)
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
                                            <h2 class="mb-lg-2 mb-2">{{ $card->title }}</h2>
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
                                        <h2 class="mb-lg-2 mb-2">
                                            Need Guidance?
                                        </h2>
                                        <p class="paraghraph-multi-lines">
                                            Not sure which office setup suits you best? Our expert advisors will guide you through the options and help you choose the right solution.
                                        </p>
                                    </div>
                                    <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                        <div class="icon-para">
                                            <i class="fa-solid fa-headset"></i>
                                            <span>Free 1:1 consultation</span>
                                        </div>
                                        <div class="icon-para">
                                            <i class="fa-solid fa-user-check"></i>
                                            <span>Personalized recommendations</span>
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
                    @endif --}}
                    @if($heading->cardContent)
                        <div class="swiper serviceContentCards">
                            <div class="swiper-wrapper">
                                @php $count = 0; @endphp
                                @foreach($heading->cardContent as $card)
                                    @if($count < 3) <!-- ✅ sirf 3 services cards show -->
                                    <div class="swiper-slide">
                                        <div class="services-cards fade-anim">
                                            <div class="img">
                                                <img src="{{ asset('storage/' . $card->image) }}" alt="{{ $card->title }}">
                                            </div>
                                            <div class="cards-content">
                                                <div class="cards-title mb-lg-3 mb-2">
                                                    <h2 class="mb-lg-2 mb-2">{{ $card->title }}</h2>
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
                                                            {{-- <a href="{{route('booknow')}}" class="rr-btn hover-bg-theme">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Book Now</span>
                                                                    <span class="text-two">Book Now</span>
                                                                </span>
                                                            </a> --}}
                                                            <a href="javascript:void(0);" class="rr-btn hover-bg-theme bookMeetingBtn">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one">Book Now</span>
                                                                    <span class="text-two">Book Now</span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    {{-- <div class="second-btn">
                                                        <div class="all-btn-wrapper">
                                                            <a href="{{ route('services', $card->slug) }}" class="rr-btn hover-bg-theme">
                                                                <span class="btn-wrap">
                                                                    <span class="text-one"><i class="fa-regular fa-arrow-right"></i></span>
                                                                    <span class="text-two"><i class="fa-regular fa-arrow-right"></i></span>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                    @php $count++; @endphp
                                @endforeach

                                <!-- ✅ Last static "Need Help" card -->
                                <div class="swiper-slide">
                                    <div class="services-cards needhelp-card fade-anim">
                                        <div class="img">
                                            <img src="https://img.freepik.com/free-photo/support-colleagues_1098-13685.jpg" alt="Need Help Image">
                                        </div>
                                        <div class="cards-content">
                                            <div class="cards-title mb-lg-3 mb-2">
                                                <h2 class="mb-lg-2 mb-2">
                                                    Need Guidance?
                                                </h2>
                                                <p class="paraghraph-multi-lines">
                                                    Not sure which office setup suits you best? Our expert advisors will guide you through the options and help you choose the right solution.
                                                </p>
                                            </div>
                                            <div class="d-flex flex-column gap-lg-2 gap-2 mb-lg-3 mb-2">
                                                <div class="icon-para">
                                                    <i class="fa-solid fa-headset"></i>
                                                    <span>Free 1:1 consultation</span>
                                                </div>
                                                <div class="icon-para">
                                                    <i class="fa-solid fa-user-check"></i>
                                                    <span>Personalized recommendations</span>
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
                            </div>

                            <!-- Swiper Navigation & Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Work Smarter with Our Office Spaces
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Finding the right office doesn’t have to be complicated. Our office spaces are designed to give you everything you need a professional setting, the right facilities, and the flexibility to scale as your business grows. Whether you’re a solo professional or managing a team, you’ll find a space that simply works.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Fully equipped and move-in ready
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible terms — stay short or long term
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Professional, comfortable environment
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Support whenever you need it
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Coworking That Feels Different
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Coworking isn’t just about having a desk it’s about being part of something bigger. Our spaces are full of energy, ideas, and people who love what they do. Here, you can focus on your own work, grab a coffee with someone new, and maybe even find your next collaborator. 
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible memberships that fit around your life 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A welcoming community, not just a workspace 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Light-filled, inspiring open-plan areas
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Free coffee, breakout spots, and regular socials 
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Our Own Private Office, Just the Way You Want It 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Sometimes you just need a space that’s truly yours no distractions, no interruptions, just focus. Our private offices give you the freedom to work the way you want, while still having everything you need close at hand. Whether you’re running a small team or working solo, it’s your space to create, grow, and succeed.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Fully furnished and ready the moment you walk in 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible plans — stay for a month or longer
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    High-speed internet and on-call support 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    24/7 secure entry so you’re never tied to a clock
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                A Workspace That’s Uniquely Your
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Your business is unique, and your office should be too. With our custom office solutions, you get the chance to design a space that reflects your culture, your brand, and your way of working.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Fully customisable layout
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Branding and design flexibility 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Scales as your team grows 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Professional support every step of the way
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                An Office, Just for the Day
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Sometimes you don’t need a long-term lease you just need a professional office for a few hours or a day. Our day offices give you the privacy and focus of a traditional office, with total flexibility.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Pay only for the day you use
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Fully equipped and ready to go
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Perfect for interviews or one-off projects 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    No contracts or commitments 
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Your Own Spot in a Shared Office 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                             A dedicated desk gives you the best of both worlds the consistency of a private space and the energy of a coworking community.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    our own desk, every day
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Storage included
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Part of a vibrant community
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Affordable monthly plans
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- dedicated-desks --}}
    <section class="hot-desks services-section services-hide services-content-img services-cards-area second-section py-lg-5 py-md-3 py-3">
        <div class="container large">
            <div class="row justify-content-center">
                <div class="service-about-img-content">
                    <div class="services-about-images order-lg-0 order-1">
                        <div class="border-line"></div>
                        <div class="img-one">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Hot Desk Space That Works on Your Schedule
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Come in, find a spot, and get straight to work. Hot desking gives you the freedom to use a professional environment without committing long-term. 
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Affordable daily or monthly options
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Work alongside other professionals
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Full access to shared facilities
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    No hassle, just plug in and go
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                A Professional Address, Without the Office 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            You don’t always need four walls to run a successful business. Sometimes all you need is the right address, someone to take your calls, and the peace of mind that your mail is handled. Our virtual office plans give you the professional presence of an office, without the overheads.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    A recognised business address you can use right away
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Mail collection and forwarding so you never miss anything important 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Call answering that feels seamless to your clients 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    The option to book meeting rooms when face-to-face matters 
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Never Miss a Call Again 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            A missed call can mean a missed opportunity. Our telephone answering service ensures your clients always hear a professional, friendly voice, even when you’re busy.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Dedicated reception team
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Calls answered in your business name
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Messages forwarded instantly 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Affordable, flexible plans 
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                A Trusted Business Address Without the Office Costs
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Your business deserves a professional address, even if you’re working remotely. With our business address service, you can show credibility to clients while keeping your personal details private.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Instantly usable business address 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Mail handling and forwarding
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Simple, affordable setup 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Adds professionalism to your brand 
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Spaces That Make Every Meeting Count 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            The right environment can turn an ordinary meeting into a productive one. Our meeting rooms give you privacy, comfort, and the professional feel you need to impress clients, interview candidates, or bring your team together.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Book by the hour or full da
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Fully equipped with screens & Wi-F
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Comfortable seating and refreshments 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Easy online booking
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                The Perfect Venue for Any Event
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            From networking sessions to product launches, our event spaces adapt to your occasion. With flexible layouts, modern facilities, and a supportive team, you can host events that make a lasting impression.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Spaces for small or large groups 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    AV, Wi-Fi, and tech support included 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Central and accessible locations 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible layouts for any event type
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
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280478/WebsiteImagery/Gallery/PO_1.jpg" alt="Work Smarter first Img">
                        </div>
                        <div class="img-two">
                            <img src="https://assets.iwgplc.com/image/upload/c_fill,f_auto,q_auto,w_auto,h_245,g_auto:subject,ar_4:3/v1753280321/WebsiteImagery/Gallery/ES_1.jpg" alt="Service Smarter Second Img">
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
                                Get Back to Business, Fast 
                                <span class="dot">.</span>
                            </h4>
                        </div>
                        <p class="text text-black fade-top text-start">
                            Unexpected events don’t have to stop your business. Our workplace recovery services give you instant access to fully equipped offices so your team can continue working without disruption.
                        </p>
                        <ul class="custom-points">
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Emergency-ready workspaces
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Quick setup in case of downtime 
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Reliable IT and support staff
                                </p>
                            </li>
                            <li>
                                <i class="fa-solid fa-check"></i>
                                <p>
                                    Flexible short-term use
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
    <!-- Calendly badge widget end -->
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var partnerSwiper = new Swiper('.servicesCards', {
            slidesPerView: 2,
            spaceBetween: 10,
            // loop: true,
            // autoplay: {
            //     delay: 2500,
            //     disableOnInteraction: false,
            // },
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
        var partnerSwiper = new Swiper('.serviceContentCards', {
            spaceBetween: 20,
            // loop: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1
                },
                768: {
                    slidesPerView: 2
                },
                980: {
                    slidesPerView: 4
                },
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