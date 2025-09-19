@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Home
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" /> 
@stop

@section('content')

    <!-- hero area start  -->
    <section class="hero-area">
        <!-- Background Slider -->
        <div class="hero-slider">
            <div class="slide" style="background-image: url('frontend/assets/imgs/banner/1.jpg');"></div>
            <div class="slide" style="background-image: url('frontend/assets/imgs/banner/2.jpg');"></div>
            <div class="slide" style="background-image: url('frontend/assets/imgs/banner/3.jpg');"></div>
        </div>

        <div class="container large">
            <div class="hero-area-inner banner-custom-padding">
                <div class="hero-content">
                    <div class="section-header order-lg-0 order-md-1 order-1">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="d-md-block d-none section-title font-instrumentsans-medium char-anim cd-headline clip is-full-width" data-delay="0.45">
                                    Perfect Workspace in Birmingham,
                                    {{-- <span class="eye-area">
                                        <span class="eye"></span>
                                        <span class="eye"></span>
                                    </span> --}}
                                    <br>
                                    Tailored for You
                                    <br>
                                    <span class="cd-words-wrapper">
                                            <b
                                                class="is-visible">Co-Working</b>
                                            <b>Private Office</b>
                                            <b>Dedicated
                                                Co-Working</b>
                                            <b>Virtual Office</b>
                                            <span
                                                class="cursor"></span>
                                    </span>
                                </h2>
                                <h2 class="d-md-none d-block section-title font-instrumentsans-medium char-anim cd-headline clip is-full-width" data-delay="0.45">
                                    Perfect Workspace in Birmingham,
                                    Tailored for You
                                    <br>
                                    <span class="cd-words-wrapper">
                                        <b class="is-visible">Co-Working</b>
                                        <b>Private Office</b>
                                        <b>Dedicated
                                            Co-Working</b>
                                        <b>Virtual Office</b>
                                        <span class="cursor"></span>
                                    </span>
                                </h2>
                                <div class="big-text-wrapper d-flex d-lg-flex d-md-none">
                                    <h2 class="big-text">Quay Space</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="award-wrapper order-lg-1 order-md-2 order-0 fade-anim" data-delay="0.90" data-direction="left" data-ease="back.out(4)">
                        <div class="circle-text-wrapper">
                            <div class="circle-text">
                                <img src="{{url('frontend/assets/imgs/shape/shape-3.webp')}}" alt="image" class="text">
                                <img src="{{url('frontend/assets/imgs/shape/shape-2.webp')}}" alt="image" class="icon">
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- about area start  -->
    <section class="about-area pb-0 pb-lg-5">
        <div class="container large">
            {{-- <div class="about-area-inner"> --}}
                <div class="hp-services-cards-main">
                    <!-- Meeting Room -->
                    <div class="icon-content word-anim" data-target="meetingroom">
                        <span class="subtitle">Professional Spaces</span>
                        <h2 class="title">Meeting Rooms</h2>
                        <span class="subtitle">Collaborate & Grow</span>
                    </div>

                    <!-- Private Office -->
                    <div class="icon-content word-anim" data-target="private">
                        <span class="subtitle">Dedicated Workspace</span>
                        <h2 class="title">Private Office</h2>
                        <span class="subtitle">Focus & Productivity</span>
                    </div>

                    <!-- Office Space -->
                    <div class="icon-content word-anim" data-target="officespace">
                        <span class="subtitle">Customizable Offices</span>
                        <h2 class="title">Office Space</h2>
                        <span class="subtitle">For Growing Teams</span>
                    </div>

                    <!-- Event Space -->
                    <div class="icon-content word-anim" data-target="eventspace">
                        <span class="subtitle">Modern Venue</span>
                        <h2 class="title">Event Space</h2>
                        <span class="subtitle">Host with Style</span>
                    </div>

                    <!-- Virtual Office -->
                    <div class="icon-content word-anim d-none d-md-flex d-lg-flex" data-target="virtual">
                        <span class="subtitle">Business Address</span>
                        <h2 class="title">Virtual Office</h2>
                        <span class="subtitle">Work from Anywhere</span>
                    </div>

                </div>

                {{-- <div class="section-content">
                    <div class="shape-1"></div>
                    <div class="shape-2"></div>
                    <div class="shape-3"></div>
                    <div class="shape-4"></div>
                    <div class="row align-items-center position-relative">
                        <div class="background-image">
                            <img src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-dot-shape.webp" alt>
                        </div>
                        <div class="col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                            <div class="about-content">
                                <div class="section-title-wrapper">
                                    <div class="title-wrapper">
                                        <h2 class="section-title font-instrumentsans-medium">Quay Space
                                        </h2>
                                    </div>
                                </div>
                                <div class="text-wrappers">
                                    <p class="text fade-top">
                                        At Quay Space, we believe your workplace should do more than just give you a desk. It should inspire, energise, and connect you to the people and opportunities that help you thrive.
                                    </p>
                                    <p class="text fade-top">
                                        Located in the heart of Birmingham on Broad Street, with panoramic views of the city’s historic canals, we offer more than just offices—we offer a lifestyle. Our approach is community-first, bringing together freelancers, entrepreneurs, remote workers, and established businesses who value flexibility and professionalism
                                    </p>
                                    <p class="text fade-top">
                                        With services ranging from co-working memberships to director postal addresses, we help you look credible, scale efficiently, and enjoy your working day in a space that feels truly yours.
                                    </p>
                                    <div class="btn-wrappers about-btn fade-top">
                                        <a href="{{route('aboutus')}}" class="rr-btn btn-text-fli hover-bg-theme">
                                            <span class="btn-wrap">
                                                    <span
                                                        class="text-one">Learn
                                                        More</span>
                                            <span class="text-two">Learn
                                                        More</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6 order-lg-1 order-md-1 order-0">
                            <div class="about-images">
                                <div class="first-img about-img reveal">
                                    <img class="img-2" src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-img-1.webp" alt>
                                </div>
                                <div class="second-img about-img reveal">
                                    <img class="img-1" src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-img.webp" alt>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
            {{-- </div> --}}
        </div>
    </section>
    <!-- about area end  -->

    {{-- <section class="work-area pt-lg-5">
        <!-- text slider area start  -->
        <div class="text-slider-box fade-anim">
            <div class="text-slider">
                <div class="swiper text-slider-active">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-users"></i> Co-working Space
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-briefcase"></i> Private Office Space
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-user-tie"></i> Dedicated Office Space
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-building"></i> Office Floor Space
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-handshake"></i> Meeting Office Space
                                </h2>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-slider-item">
                                <h2 class="title">
                                    <i class="fa-solid fa-calendar-days"></i> Event Office Space
                                </h2>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- /text slider area end -->
    </section> --}}

    <section class="aboutus-section-main py-lg-5 py-5 pt-0">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-4 align-items-center">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="aboutus-main">
                        <div class="section-content">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h2 class="section-title font-instrumentsans-medium word-anim">
                                        Perfect Workspace in Birmingham, Tailored for You
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="para word-anim">
                            <p>
                                At Quay Space, we offer more than just desks and Wi-Fi. Nestled on Birmingham’s iconic Broad Street with stunning canal views, our spaces are designed to inspire productivity, creativity, and connection.
                            </p>
                            <p class="d-block d-lg-block d-md-none">
                                Our flexible workspaces cater to everyone, whether you’re a freelancer needing a hot desk, a growing start-up looking for private offices, or an established company in search of a professional base.
                            </p>
                            <p class="d-block d-lg-block d-md-none">
                                Here, you’ll find a welcoming community, clean and modern facilities, and a location that puts you right at the centre of Birmingham’s thriving business district.
                            </p>
                        </div>
                        <div class="all-btn-wrapper fade-anim">
                            <a href="{{{route('aboutus')}}}" class="rr-btn hover-bg-theme">
                                <span class="btn-wrap">
                                        <span class="text-one">View More</span>
                                <span class="text-two">View More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 order-lg-1 order-md-1 order-0">
                    <div class="five-imgs-main fade-anim">
                        <div class="left-white-space"></div>
                        <div class="right-white-space"></div>
                        <div class="first-two-images fade-anim">
                            <div class="first">
                                <img src="{{url('frontend/assets/imgs/about/first.webp')}}" alt="">
                            </div>
                            <div class="second">
                                <img src="{{url('frontend/assets/imgs/about/second.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="third fade-anim">
                            <img src="{{url('frontend/assets/imgs/about/third.webp')}}" alt="">
                        </div>
                        <div class="second-two-images fade-anim">
                            <div class="fourth">
                                <img src="{{url('frontend/assets/imgs/about/fourth.webp')}}" alt="">
                            </div>
                            <div class="five">
                                <img src="{{url('frontend/assets/imgs/about/five.webp')}}" alt="">
                            </div>
                        </div>
                        <div class="bottomleft-white-space"></div>
                        <div class="bottomright-white-space"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- video-box  start -->
    <div class="video-box">
        <div class="black-shade"></div>
        <video class="video-area" loop muted autoplay playsinline>
            <source
                src="https://rrdevs.net/project-video/group-meeting.mp4"
                type="video/mp4">
        </video>
    </div>
    <!--s video-box  end -->


    <!-- work area start  -->
    <section class="work-area custom-work-section py-lg-5 py-3">
        <div class="container large">
            <div class="work-area-inner">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Space to Work & Room to Grow
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="works-wrapper-box">
                    <div class="works-wrapper-1 fade-anim">
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/co-working.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Co
                                            working Space</a></h3>
                            </div>
                        </div>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/dedicated.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Dedicated
                                            office</a></h3>
                            </div>
                        </div>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/floor.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Office
                                            Floor</a></h3>
                            </div>
                        </div>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/event.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Event
                                            Space</a></h3>
                            </div>
                        </div>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/office-space.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Office
                                            Space</a></h3>
                            </div>
                        </div>
                        <div class="work-box">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="view more">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/meeting.jpg')}}" alt="image">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title"><a href="#">Meeting
                                            Space</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-btn-wrapper fade-anim">
                    <a href="#" class="rr-btn hover-bg-theme">
                        <span class="btn-wrap">
                                <span class="text-one">View
                                    All</span>
                        <span class="text-two">View
                                    All</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- work area end  -->

    <section class="services-section pt-lg-5 pt-3">
        <div class="container large">
            <div class="work-area-inner">
                <div class="section-content mb-md-5 mb-3">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Co-Working Spaces in Birmingham
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="d-flex flex-column gap-md-5 gap-3">
                    <div class="service-banner-div">
                        <div class="service-banner-forms order-lg-0 order-1">
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
                            <span class="section-title service-title word-anim">
                                The Quay Mailing Advantage
                            </span>
                            <div class="price py-lg-2">
                                <strong>&pound;100</strong>
                                <div class="price-month-para">
                                    <h4>Included with Membership</h4>
                                    <p>10% offer to buy now.</p>
                                </div>
                            </div>
                            <ul class="features-list">
                                <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        Professional business address in the heart of Birmingham
                                    </p>
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        Secure handling of your mail and packages
                                    </p>
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        Mail forwarding, scanning, and personalised services
                                    </p>
                                </li>
                                <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        Perfect for freelancers, start-ups, or businesses without a physical office
                                    </p>
                                </li>
                                  <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        Enhance your company’s image with a prestigious location
                                    </p>
                                </li>
                                  <li><i class="fas fa-check-circle"></i>
                                    <p>
                                        CTA Button (Red): Book Your Address
                                    </p>
                                </li>
                            </ul>
                            <div class="all-btn-wrapper fade-anim">
                                <button class="rr-btn hover-bg-theme btn" id="openModal">
                                    <span class="btn-wrap">
                                        <span
                                            class="text-one">Discover Lifestyle</span>
                                        <span
                                            class="text-two">Discover Lifestyle</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="service-banner-img px-lg-4 order-lg-1 order-0">
                            <div class="service-img image-wrapper image scale position-relative">
                                <img src="{{url('frontend/assets/imgs/mailing/mailing.webp')}}" alt>
                            </div>
                        </div>
                    </div>
                    <div class="border-line"></div>
                    <div class="service-banner-div">
                        <div class="service-banner-img px-lg-4">
                            <div class="service-img image-wrapper image scale position-relative">
                                <img src="{{url('frontend/assets/imgs/mailing/waterfront.webp')}}" alt>
                            </div>
                        </div>
                        <div class="service-banner-forms">
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
                            <span class="section-title service-title word-anim">
                                The Quay Waterfront Advantage
                            </span>
                            <div class="price py-lg-2">
                                <strong>&pound;100</strong>
                                <div class="price-month-para">
                                    <h4>Included with Membership</h4>
                                    <p>10% offer to buy now.</p>
                                </div>
                            </div>
                            <ul class="features-list">
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <p>
                                        Inspiring canal-side views across Birmingham
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <p>
                                        Arrive by boat or enjoy the waterside atmosphere
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <p>
                                        Exclusive networking events & socials
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <p>
                                        Premium backdrop for client meetings & team photos
                                    </p>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle"></i>
                                    <p>
                                        A workspace designed for wellbeing & productivity
                                    </p>
                                </li>
                            </ul>
                            <div class="all-btn-wrapper fade-anim">
                                <button class="rr-btn hover-bg-theme btn" id="openModal">
                                        <span class="btn-wrap">
                                            <span
                                                class="text-one">Discover Lifestyle</span>
                                            <span
                                                class="text-two">Discover Lifestyle</span>
                                        </span>
                                    </button>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work area end  -->

    <!-- project-bg-area  -->
    <section class="actually-area overflow-hidden">
        <div class="actually-area-inner section-spacing">
            <div class="container">
                <div class="bg-area"></div>
                <h2 class="section-title font-sequelsans-romanbody t_line">
                    Explore Our <br> Spaces, Imagine<br> Your Future
                </h2>
            </div>
        </div>
    </section>

    <section class="overflow-hidden project-section-3__area pin-area-3 project-section-3 section-bg-3 section-space-bottom-160">
        <div class="container large">
            <!-- rr-container-1630 -->
            <!-- <div class="section-3__title-wrapper pin-element_3 pb-75 pb-md-50 pb-sm-40 pb-xs-40"> -->
            <div>
                <h2 class="section-3__title-wrapper-title text-center">
                    Our Gallery
                </h2>
            </div>
            <div class="project-section-3__wrapper row">
                <div class="row">
                    <div class="col-lg-6 col-md-6 custom-padding pb-3">
                        <div class="gallery-images one-gallery">
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                                    <div class='btn2'>
                                    <span>View</span>
                                    <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                                    </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/1.jpg')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pb-lg-3 px-md-0">
                        <div class="row">
                            <div class="custom-4-images">
                                <div class="project-section-3__item">
                                    <div class="project-section-3__thumb" data-cursor-text="
                                        <div class='btn2'>
                                        <span>View</span>
                                        <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                                        </div>" data-cursor-class="-big">
                                        <a href="#">
                                            <div class="black-shade"></div>
                                            <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/2.jpg')}}" alt="image not found">
                                            <ul class="project-section-3__tag">
                                                <li>Gallery Space Name
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-section-3__item">
                                    <div class="project-section-3__thumb" data-cursor-text="
                                    <div class='btn2'>
                                    <span>View</span>
                                    <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                                    </div>" data-cursor-class="-big">
                                        <a href="#">
                                            <div class="black-shade"></div>
                                            <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/3.jpg')}}" alt="image not found">
                                            <ul class="project-section-3__tag">
                                                <li>Gallery Space Name
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-section-3__item">
                                    <div class="project-section-3__thumb" data-cursor-text="
                                <div class='btn2'>
                                <span>View</span>
                                <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                            </div>" data-cursor-class="-big">
                                        <a href="#">
                                            <div class="black-shade"></div>
                                            <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/4.jpg')}}" alt="image not found">
                                            <ul class="project-section-3__tag">
                                                <li>Gallery Space Name
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="project-section-3__item">
                                    <div class="project-section-3__thumb" data-cursor-text="
                            <div class='btn2'>
                                <span>View</span>
                            <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                            </div>" data-cursor-class="-big">
                                        <a href="#">
                                            <div class="black-shade"></div>
                                            <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/5.jpg')}}" alt="image not found">
                                            <ul class="project-section-3__tag">
                                                <li>Gallery Space Name
                                                </li>
                                            </ul>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 pe-lg-3 py-md-0 px-0 py-3">
                        <div class="custom-4-images">
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                                    <div class='btn2'>
                                    <span>View</span>
                                    <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                                    </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/9.webp')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                        <div class='btn2'>
                            <span>View</span>
                        <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                        </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/10.webp')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                        <div class='btn2'>
                            <span>View</span>
                        <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                        </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/11.webp')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                        <div class='btn2'>
                            <span>View</span>
                        <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                        </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/12.webp')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 px-0">
                        <div class="gallery-images one-gallery">
                            <div class="project-section-3__item">
                                <div class="project-section-3__thumb" data-cursor-text="
                                    <div class='btn2'>
                                    <span>View</span>
                                    <div class='arrow'><i class='fa fa-solid fa-arrow-right'></i></div>
                                    </div>" data-cursor-class="-big">
                                    <a href="#">
                                        <div class="black-shade"></div>
                                        <img data-fancybox="gallery" src="{{url('frontend/assets/imgs/gallery/13.webp')}}" alt="image not found">
                                        <ul class="project-section-3__tag">
                                            <li>Gallery Space Name
                                            </li>
                                        </ul>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-12">
                    <div class="project-section-3__item">
                        <div class="project-section-3__btn">
                            <a href="#">View Gallery <span><svg
                                            width="21"
                                            height="17"
                                            viewBox="0 0 21 17"
                                            fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M1 8.59961L20 8.59961"
                                                stroke="white"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M12.4004 1L20.0004 8.6L12.4004 16.2"
                                                stroke="white"
                                                stroke-width="1.5"
                                                stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg>
                                    </span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- funfact area start  -->
    <section class="funfact-area fade-anim">
        <div class="container large">
            <div class="funfact-area-inner pin-area">
                <div class="section-header section-spacing-top pin-element">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim">Perfect
                                <br> —activity
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="funfact-wrapper-box section-spacing">
                    <span class="line-1"></span>
                    <span class="line-2"></span>
                    <span class="line-3"></span>
                    <span class="line-4"></span>
                    <div class="funfact-wrapper">
                        <div class="funfact-item go-visible">
                            <span class="number">1.8M</span>
                            <p class="text">We helped to get companies with &pound;200M+ funding.
                            </p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">260+</span>
                            <p class="text">Crafted responsive, user-centered website & app.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">12+</span>
                            <p class="text">We have had quite a run in our 12+ years of working.
                            </p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">80+</span>
                            <p class="text">Professional skilled designers and developers.
                            </p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">99%</span>
                            <p class="text">Average 99% clients satisfaction with expertise.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact area end  -->

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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.umd.js"></script>
    <script>
        document.querySelectorAll(".icon-content").forEach(card => {
            card.addEventListener("mousemove", function(e) {
                let rect = this.getBoundingClientRect();
                let x = e.clientX - rect.left; // mouse X inside card
                let y = e.clientY - rect.top;  // mouse Y inside card

                let centerX = rect.width / 2;
                let centerY = rect.height / 2;

                // calculate rotation
                let rotateX = ((y - centerY) / centerY) * 10; // max 10deg
                let rotateY = ((x - centerX) / centerX) * -10;

                this.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale(1.03)`;
                this.style.boxShadow = `${-rotateY}px ${rotateX}px 20px rgba(0,0,0,0.3)`;
            });

            card.addEventListener("mouseleave", function() {
                this.style.transform = `rotateX(0deg) rotateY(0deg) scale(1)`;
                this.style.boxShadow = "0 5px 15px rgba(0,0,0,0.2)";
            });
        });

    </script>
    <script>
        Fancybox.bind("[data-fancybox]", {
        });
    </script>
@stop 