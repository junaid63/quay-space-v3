@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ setting('site.title') }}">
    <meta name="description" content="{{ setting('site.description') }}">
    <meta property="og:title" content="{{ setting('site.title') }}">
    <meta property="og:description" content="{{ setting('site.description') }}">
    <meta name="twitter:title" content="{{ setting('site.title') }}">
    <meta name="twitter:description" content="{{ setting('site.description') }}">
@stop

@section('schema')
    <script type="application/ld+json">
        {
        "@context": "https://schema.org",
        "@type": "LocalBusiness",
        "name": "QUAY SPACE",
        "image": "https://www.quay-space.co.uk/storage/settings/December2023/2Jxkorg8HK0giszfQueN.png",
        "@id": "",
        "url": "https://www.quay-space.co.uk/",
        "telephone": "441212693637",
        "priceRange": "$$$",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Quayside Tower, Broad St,",
            "addressLocality": "Birmingham",
            "postalCode": "B1 2HF",
            "addressCountry": "GB"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 52.47704100000001,
            "longitude": -1.9111622
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
            "Monday",
            "Tuesday",
            "Wednesday",
            "Thursday",
            "Friday"
            ],
            "opens": "09:00",
            "closes": "17:00"
        } 
        }
    </script>
@endsection

@section('title')
{{ setting('site.title') }}
@stop

@section('gtag')
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-K12Z2DJ2P4"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
    
      gtag('config', 'G-K12Z2DJ2P4');
    </script>
    <!-- Google tag (gtag.js) -->
@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@6.0/dist/fancybox/fancybox.css" /> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
                                <div class="big-text-wrapper d-flex d-lg-flex d-md-flex">
                                    <h2 class="big-text">Quay Space</h2>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="award-wrapper order-lg-1 order-md-2 order-0 fade-anim" data-delay="0.90" data-direction="left" data-ease="back.out(4)">
                        <div class="circle-text-wrapper">
                            <div class="curve-text">
                                <div class="icon-box">
                                    <img src="https://www.quay-space.co.uk/frontend/assets/images/icons/icon-5.png" alt="">
                                </div>

                                <svg class="curved-circle rotate-me" viewBox="0 0 200 200">
                                    <path fill="#fff0" id="circlePath"
                                        d="M 100, 100
                                            m -75, 0
                                            a 75,75 0 1,1 150,0
                                            a 75,75 0 1,1 -150,0" />
                                    <text font-size="14" font-weight="700" text-transform="uppercase" letter-spacing="1px" fill="#ffffff">
                                    <textPath href="#circlePath">
                                        • The premium co-working space in Birmingham •
                                    </textPath>
                                    </text>
                                </svg>
                            </div>

                        </div>
                        
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- hero area end  -->

    <!-- about area start  -->
    <section class="about-area padding-top-large pb-0 pb-md-0 pt-md-3 pb-lg-5">
        <div class="container large">
            {{-- <div class="about-area-inner"> --}}
                <!-- Swiper -->
            <div class="swiper ServiceCards">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="hp-services-cards-main">
                            <!-- Meeting Room -->
                            <div class="icon-content word-anim" data-target="meeting-rooms">
                                <span class="subtitle">Professional Spaces</span>
                                <h2 class="title">
                                    MEETING ROOMS
                                </h2>
                                <span class="subtitle">Collaborate & Grow</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hp-services-cards-main">
                            <!-- Private Office -->
                            <div class="icon-content word-anim" data-target="private-office">
                                <span class="subtitle">Dedicated Workspace</span>
                                <h2 class="title">
                                    PRIVATE OFFICE
                                </h2>
                                <span class="subtitle">Focus & Productivity</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hp-services-cards-main">
                            <!-- Office Space -->
                            <div class="icon-content word-anim" data-target="custom-office">
                                <span class="subtitle">Customisable Offices</span>
                                <h2 class="title">CUSTOM OFFICE</h2>
                                <span class="subtitle">For Growing Teams</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hp-services-cards-main">
                            <!-- Event Space -->
                            <div class="icon-content word-anim" data-target="event-space">
                                <span class="subtitle">Modern Venue</span>
                                <h2 class="title">
                                    EVENT SPACE
                                </h2>
                                <span class="subtitle">Host with Style</span>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="hp-services-cards-main">
                            <!-- Virtual Office -->
                            <div class="icon-content word-anim" data-target="virtual-office">
                                <span class="subtitle">Business Address</span>
                                <h2 class="title">
                                    VIRTUAL OFFICE
                                </h2>
                                <span class="subtitle">Work from Anywhere</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
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

    <section class="aboutus-section-main pb-lg-5 pb-5">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-4 align-items-center">
                <div class="col-12 col-md-6 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="aboutus-main">
                        <div class="section-content">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h2 class="section-title font-instrumentsans-medium word-anim">
                                        Intro About Quay Space
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
                                        <span class="text-one">Read More</span>
                                <span class="text-two">Read More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 order-lg-1 order-md-1 order-0">
                    <div class="five-imgs-main fade-anim">
                        <div class="left-white-space"></div>
                        <div class="right-white-space"></div>
                        <div class="first-two-images">
                            <div class="first">
                                <img src="{{url('frontend/assets/imgs/about/new-first.png')}}" alt="About Img one">
                            </div>
                            <div class="second">
                                <img src="{{url('frontend/assets/imgs/about/new-second.png')}}" alt="About Img two">
                            </div>
                        </div>
                        <div class="third">
                            <img src="{{url('frontend/assets/imgs/about/new-third.png')}}" alt="About Img three">
                        </div>
                        <div class="second-two-images">
                            <div class="fourth">
                                <img src="{{url('frontend/assets/imgs/about/new-fourth.png')}}" alt="About Img four">
                            </div>
                            <div class="five">
                                <img src="{{url('frontend/assets/imgs/about/new-five.png')}}" alt="About Img five">
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
    {{-- <div class="video-box">
        <div class="black-shade"></div>
        <video class="video-area" loop muted autoplay playsinline>
            <source
                src="https://rrdevs.net/project-video/group-meeting.mp4"
                type="video/mp4">
        </video>
    </div> --}}
    <!--s video-box  end -->
    {{-- <section class="home-360-view py-lg-5"> 
        <div class="container large">
            <div class="row">
                <div class="section-header pb-lg-4 pb-4">
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title text-white text-center font-instrumentsans-medium word-anim">
                                    360° Virtual Tour
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="threesixty-view-main-card">
                    <div class="threesixty-button">
                        <button type="button" class="active" data-floor="second">
                            <i class="fa-regular fa-buildings"></i>
                            2nd Floor
                        </button>
                        <button type="button" data-floor="third">
                            <i class="fa-regular fa-buildings"></i>
                            3rd Floor
                        </button>
                        <button type="button" data-floor="seven">
                            <i class="fa-regular fa-buildings"></i>
                            7th Floor
                        </button>
                        <button type="button" data-floor="eight">
                            <i class="fa-regular fa-buildings"></i>
                            8th Floor
                        </button>
                    </div>
                    <div class="threesixty-view">
                        <div class="loading-indicator">Loading 360° View</div>
                        <iframe 
                            src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/05/2nd_flr_tour_wp/index.html" 
                            height="600" 
                            width="100%"
                            frameborder="0" 
                            allowfullscreen>
                        </iframe>
                        
                        <div class="floor-info show">
                            <h3>Second Floor</h3>
                            <p>This floor features our modern conference rooms, collaborative workspaces, and a comfortable lounge area for informal meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="home-360-view py-lg-5"> 
        <div class="container large">
            <div class="row">
                <!-- Section Header -->
                <div class="section-header pb-lg-4 pb-4">
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title text-white text-center font-instrumentsans-medium word-anim">
                                    360° Virtual Tour
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- 360° Viewer -->
                <div class="threesixty-view-main-card">
                    <!-- Floor Buttons -->
                    <div class="threesixty-button">
                        <button type="button" class="active" 
                            data-floor="second" 
                            data-src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/05/2nd_flr_tour_wp/index.html">
                            <i class="fa-regular fa-buildings"></i>
                            2nd Floor
                        </button>

                        <button type="button" 
                            data-floor="third" 
                            data-src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/06/3rd_front_quarter/index.html">
                            <i class="fa-regular fa-buildings"></i>
                            3rd Floor
                        </button>

                        <button type="button" 
                            data-floor="seven" 
                            data-src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/05/7th_flr_and_Conference_Room/index.html">
                            <i class="fa-regular fa-buildings"></i>
                            7th Floor
                        </button>

                        <button type="button" 
                            data-floor="eight" 
                            data-src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/08/8th_Floor/index.html">
                            <i class="fa-regular fa-buildings"></i>
                            8th Floor
                        </button>
                    </div>

                    <!-- Viewer & Floor Info -->
                    <div class="threesixty-view">
                        <div class="loading-indicator">Loading 360° View</div>
                        <iframe 
                            src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/05/2nd_flr_tour_wp/index.html" 
                            height="600" 
                            width="100%"
                            frameborder="0" 
                            allowfullscreen>
                        </iframe>

                        <div class="floor-info show">
                            <h3>Second Floor</h3>
                            <p>This floor features our modern conference rooms, collaborative workspaces, and a comfortable lounge area for informal meetings.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- work area start  -->
    <section class="work-area custom-work-section py-lg-5 py-3 d-none d-md-none d-lg-block">
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
                        <div class="work-box" data-target="co-working">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/co-working.jpg')}}" alt="Co-Working Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Co-Working Space
                                </h3>
                                <p>
                                    Flexible desks & inspiring community vibes.
                                </p>
                            </div>
                        </div>
                        <div class="work-box" data-target="private-office">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/private-office.jpg')}}" alt="Private Office Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Private Office
                                </h3>
                                <p>
                                    Private, secure offices for your growing team.
                                </p>
                            </div>
                        </div>
                        <div class="work-box" data-target="office-space">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/floor.jpg')}}" alt="Office Space Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Office Space
                                </h3>
                                <p>
                                    Fully equipped floors for larger businesses.
                                </p>
                            </div>
                        </div>
                        <div class="work-box" data-target="event-space">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/event.jpg')}}" alt="Event Space Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Event Space
                                </h3>
                                <p>
                                    Host workshops, networking & company events.
                                </p>
                            </div>
                        </div>
                        <div class="work-box" data-target="virtual-office">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/virtual-office.jpg')}}" alt="Virtual Office Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Virtual Office
                                </h3>
                                <p>
                                    Professional business address, no physical office needed.
                                </p>
                            </div>
                        </div>
                        <div class="work-box" data-target="meeting-rooms">
                            <div class="thumb">
                                <div class="image scale" data-cursor-text="View More">
                                    <a href="javscript:void(0);">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/office-space/meeting.jpg')}}" alt="Meeting Room Section Img">
                                    </a>
                                </div>
                            </div>
                            <div class="content">
                                <h3 class="title">
                                    Meeting Room
                                </h3>
                                <p>
                                    Professional rooms for pitches & client calls.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- work area end  -->


    <section class="features-section py-lg-5 py-3">
        <div class="container-fluid px-lg-5">
            <div class="section-header">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Why Choose Quay Space
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper WhyChooseCards">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <!-- Feature 1 -->
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Prime Location</h3>
                                <p>Quayspace is based on Birmingham's vibrant Broad Street, placing businesses in the heart of the city's professional and cultural hub. Enjoy easy access to transport, dining, and entertainment options.</p>
                                <div class="feature-stats">
                                    <i class="fas fa-users"></i>
                                    <span>500+ businesses in the area</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Feature 2 -->
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-building"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Flexible Workspaces</h3>
                                <p>We offer a mix of private rented offices and collaborative co-working spaces, ideal for startups, growing companies, and established businesses. Customize your workspace to fit your needs.</p>
                                <div class="feature-stats">
                                    <i class="fas fa-expand-arrows-alt"></i>
                                    <span>Spaces from 1 to 50 people</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Feature 3 -->
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-award"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Established and Trusted</h3>
                                <p>With three years in operation and over 30 years of combined customer service experience, our team provides exceptional support to every client. We're committed to your business success.</p>
                                <div class="feature-stats">
                                    <i class="fas fa-star"></i>
                                    <span>Rated 4.9/5 by our members</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Feature 4 -->
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-handshake"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Community-Focused Events</h3>
                                <p>We host monthly networking and community events to help our members connect, learn, and grow together. Supplying over 20,000 cups of coffee, we offer a welcoming, safe space for everyone.</p>
                                <div class="feature-stats">
                                    <i class="fas fa-coffee"></i>
                                    <span>20,000+ cups of coffee served</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <!-- Feature 5 -->
                        <div class="feature-card">
                            <div class="feature-icon">
                                <i class="fas fa-heart"></i>
                            </div>
                            <div class="feature-content">
                                <h3>Committed to Social Impact</h3>
                                <p>Quayspace actively partners with several local charities, supporting meaningful causes and strengthening ties with the wider Birmingham community. Your business becomes part of something bigger.</p>
                                <div class="feature-stats">
                                    <i class="fas fa-hand-holding-heart"></i>
                                    <span>Supporting 5+ local charities</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination d-flex justify-content-center"></div>
            </div>
            {{-- <div class="features-flex">
                <!-- Feature 1 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Prime Location</h3>
                        <p>Quayspace is based on Birmingham's vibrant Broad Street, placing businesses in the heart of the city's professional and cultural hub. Enjoy easy access to transport, dining, and entertainment options.</p>
                        <div class="feature-stats">
                            <i class="fas fa-users"></i>
                            <span>500+ businesses in the area</span>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 2 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Flexible Workspaces</h3>
                        <p>We offer a mix of private rented offices and collaborative co-working spaces, ideal for startups, growing companies, and established businesses. Customize your workspace to fit your needs.</p>
                        <div class="feature-stats">
                            <i class="fas fa-expand-arrows-alt"></i>
                            <span>Spaces from 1 to 50 people</span>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 3 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-award"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Established and Trusted</h3>
                        <p>With three years in operation and over 30 years of combined customer service experience, our team provides exceptional support to every client. We're committed to your business success.</p>
                        <div class="feature-stats">
                            <i class="fas fa-star"></i>
                            <span>Rated 4.9/5 by our members</span>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 4 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Community-Focused Events</h3>
                        <p>We host monthly networking and community events to help our members connect, learn, and grow together. Supplying over 20,000 cups of coffee, we offer a welcoming, safe space for everyone.</p>
                        <div class="feature-stats">
                            <i class="fas fa-coffee"></i>
                            <span>20,000+ cups of coffee served</span>
                        </div>
                    </div>
                </div>
                
                <!-- Feature 5 -->
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-heart"></i>
                    </div>
                    <div class="feature-content">
                        <h3>Committed to Social Impact</h3>
                        <p>Quayspace actively partners with several local charities, supporting meaningful causes and strengthening ties with the wider Birmingham community. Your business becomes part of something bigger.</p>
                        <div class="feature-stats">
                            <i class="fas fa-hand-holding-heart"></i>
                            <span>Supporting 5+ local charities</span>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- <div class="cta-section">
                <h3>Ready to Join Our Community?</h3>
                <p>Book a tour today and experience the Quayspace difference for yourself. Our team is ready to help you find the perfect workspace solution.</p>
                <a href="#" class="cta-button">Schedule a Visit</a>
            </div> --}}
        </div>
    </section>

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
                                {{-- <strong>&pound;100</strong> --}}
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
                            </ul>
                        </div>
                        <div class="service-banner-img px-lg-4 order-lg-1 order-0">
                            <div class="service-img image-wrapper image scale position-relative">
                                <img src="{{url('frontend/assets/imgs/mailing/mailing-new-01.webp')}}" alt="Mailing Advantage Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/1.jpg')}}"  data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/1.jpg')}}" alt="Gallery first Img">
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
                                        <a href="{{url('frontend/assets/imgs/gallery/2.jpg')}}" data-fancybox="gallery">
                                            <div class="black-shade"></div>
                                            <img src="{{url('frontend/assets/imgs/gallery/2.jpg')}}" alt="Gallery second Img">
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
                                        <a href="{{url('frontend/assets/imgs/gallery/3.jpg')}}" data-fancybox="gallery">
                                            <div class="black-shade"></div>
                                            <img src="{{url('frontend/assets/imgs/gallery/3.jpg')}}" alt="Gallery third Img">
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
                                        <a href="{{url('frontend/assets/imgs/gallery/4.jpg')}}" data-fancybox="gallery">
                                            <div class="black-shade"></div>
                                            <img src="{{url('frontend/assets/imgs/gallery/4.jpg')}}" alt="Gallery fourth Img">
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
                                        <a href="{{url('frontend/assets/imgs/gallery/5.jpg')}}" data-fancybox="gallery" >
                                            <div class="black-shade"></div>
                                            <img src="{{url('frontend/assets/imgs/gallery/5.jpg')}}" alt="Gallery five Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/1.png')}}" data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/1.png')}}" alt="Gallery six Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/2.png')}}" data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/2.png')}}" alt="Gallery seven Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/3.png')}}" data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/3.png')}}" alt="Gallery eight Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/4.png')}}" data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/4.png')}}" alt="Gallery nine Img">
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
                                    <a href="{{url('frontend/assets/imgs/gallery/5.png')}}" data-fancybox="gallery">
                                        <div class="black-shade"></div>
                                        <img src="{{url('frontend/assets/imgs/gallery/5.png')}}" alt="Gallery ten Img">
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
                
                {{-- <div class="col-lg-12">
                    <div class="project-section-3__item">
                        <div class="project-section-3__btn">
                            <a href="#">View Gallery 
                                <span>
                                    <svg
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
                                </span>
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- funfact area start  -->
    @include('frontend.inc.perfectactivities')
    <!-- funfact area end  -->

    <!-- client area start  -->
    @include('frontend.inc.amenities')
    <!-- client area end  -->
   
    <section class="services-section blog-home-main py-lg-5 py-4 mt-lg-5 mt-2">
        <div class="container large">
            <div class="work-area-inner">
                <div class="section-content mb-md-5 mb-3">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Explore Latest From Blog
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="swiper BlogsCards">
                    <div class="swiper-wrapper">
                        @foreach($blogs as $blog)
                        <div class="swiper-slide">
                            <div class="blog-home-content-img">
                                <a href="{{route('blogdetails', $blog->slug)}}">
                                    <div class="image">
                                        <img src="{{ url('storage/'. $blog->home_card_img ) }}" alt="{{ $blog->title }}">
                                    </div>  
                                    <div class="content p-3">
                                        <span class="subtitle">{{ ucwords($blog->sub_title) }}</span>
                                        <h4>
                                            {{ ucwords(implode(' ', array_slice(explode(' ', $blog->title), 0, 6))) }}...
                                        </h4>
                                        <p class="text-ellipsis-4">
                                            {{ $blog->short_description }}
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </section>


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
        document.addEventListener('DOMContentLoaded', function() {
            const floorButtons = document.querySelectorAll('.threesixty-button button');
            const iframe = document.querySelector('.threesixty-view iframe');
            const floorInfo = document.querySelector('.floor-info');
            const loadingIndicator = document.querySelector('.loading-indicator');

            // Floor info content
            const floorData = {
                second: {
                    title: "Second Floor",
                    description: "This floor features our modern conference rooms, collaborative workspaces, and a comfortable lounge area for informal meetings."
                },
                third: {
                    title: "Third Floor",
                    description: "Home to our executive offices, private meeting rooms, and a dedicated innovation lab for creative brainstorming sessions."
                },
                seven: {
                    title: "Seventh Floor",
                    description: "The seventh floor offers panoramic views of the city and houses our main auditorium, training center, and multimedia studio."
                },
                eight: {
                    title: "Eighth Floor",
                    description: "Our top floor features a rooftop garden, wellness center, and a premium dining area for employees and special guests."
                }
            };

            // Function to load floor
            function loadFloor(button) {
                const floor = button.getAttribute('data-floor');
                const src = button.getAttribute('data-src');

                if (!src) {
                    console.error('No valid src for floor:', floor);
                    return;
                }

                // Update active button
                floorButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');

                // Show loading indicator
                loadingIndicator.classList.add('show');
                iframe.style.opacity = '0';

                // Update iframe src
                iframe.src = src;

                // When iframe loads
                iframe.onload = function() {
                    loadingIndicator.classList.remove('show');
                    iframe.style.opacity = '1';

                    // Update floor info
                    if(floorData[floor]) {
                        floorInfo.querySelector('h3').textContent = floorData[floor].title;
                        floorInfo.querySelector('p').textContent = floorData[floor].description;
                    }

                    // Show floor info with animation
                    floorInfo.classList.remove('show');
                    setTimeout(() => floorInfo.classList.add('show'), 200);
                };
            }

            // Add click event
            floorButtons.forEach(button => {
                button.addEventListener('click', () => loadFloor(button));
            });

            // Auto-hide floor info after 5s
            setTimeout(() => floorInfo.classList.remove('show'), 5000);

            // Show info on iframe hover
            iframe.addEventListener('mouseenter', () => floorInfo.classList.add('show'));
            iframe.addEventListener('mouseleave', () => setTimeout(() => floorInfo.classList.remove('show'), 1000));
        });
    </script>
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
    <script>
        var ServiceCards = new Swiper('.BlogsCards', {
            spaceBetween: 20,
            // autoplay: {
            //     delay: 2000,
            //     disableOnInteraction: false,
            // },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    spaceBetween: 20,
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 4
                },
                1500: {
                    slidesPerView: 4
                }
            }
        });

        var ServiceCards = new Swiper('.ServiceCards', {
            spaceBetween: 10,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 2,
                },
                768: {
                    slidesPerView: 3
                },
                1200: {
                    slidesPerView: 5
                },
                1300: {
                    slidesPerView: 5
                }
            }
        });

        var ServiceCards = new Swiper('.WhyChooseCards', {
            spaceBetween: 30,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                0: {
                    slidesPerView: 1,
                },
                768: {
                    slidesPerView: 2
                },
                1200: {
                    slidesPerView: 3
                },
                1500: {
                    slidesPerView: 4
                },
                1600: {
                    slidesPerView: 5
                }
            }
        });

    </script>
    <script>
        $(document).ready(function () {
            // ---------- HOME PAGE ----------
            $(document).on("click", ".icon-content", function () {
                var target = $(this).data("target"); 
                if (target) {
                    window.location.href = "/services/" + target;
                }
            });
            $(document).on("click", ".work-box", function () {
                var target = $(this).data("target"); 
                if (target) {
                    window.location.href = "/services/" + target;
                }
            });

            // sirf services page py hi niche ka code run ho
            if (window.location.pathname.startsWith("/services")) {
                // ---------- SERVICE PAGE ----------
                let pathParts = window.location.pathname.split("/");
                let serviceFromPath = pathParts[2];
                let urlParams = new URLSearchParams(window.location.search);
                let serviceFromQuery = urlParams.get("service");

                let service = serviceFromPath || serviceFromQuery;

                if (service) {
                    activateService(service);
                } else if ($(".swiper-slide").length) {
                    let $firstService = $(".swiper-slide").first();
                    let defaultService = $firstService.data("target");

                    activateService(defaultService);

                    window.history.replaceState(null, "", "/services/" + defaultService);
                }

                $(".swiper-slide").on("click", function () {
                    let targetSlug = $(this).data("target");
                    activateService(targetSlug);
                    window.history.pushState(null, "", "/services/" + targetSlug);
                });

                function activateService(service) {
                    $(".services-navber-content").removeClass("active");
                    $(".services-section").removeClass("active");
                    $(".swiper-slide").removeClass("active");

                    $(`.swiper-slide[data-target="${service}"] .services-navber-content`).addClass("active");
                    $(`.swiper-slide[data-target="${service}"]`).addClass("active");
                    $(`.${service}`).addClass("active");
                }
            }
        });

    </script>
@stop 