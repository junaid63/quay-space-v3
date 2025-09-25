@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | About Us
@stop

@section('css')
<!-- Demo styles -->
  <style>
    .swiper {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area about-banner" style="background-image: url('frontend/assets/imgs/banner/about-us.webp');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">About Quay Space</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- about area start  -->
    {{-- <section class="about-area about-area-details overflow-hidden py-lg-5 py-3">
        <div class="container large">
            <div class="section-content top-0">
                <div class="col-12 d-none d-lg-block d-md-block">
                    <div class="about-area-details-inner pb-lg-5 pb-0">
                        <div class="section-header fade-anim">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h2 class="section-title text-center font-sequelsans-romanbody">
                                        Who We Are
                                    </h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row position-relative">
                    <div class="background-image">
                        <img src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-dot-shape.webp" alt="">
                    </div>
                    <div class="col-lg-6 col-md-6 order-lg-0 order-md-0 order-1">
                        <div class="section-title-wrapper d-block d-lg-none d-md-none">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-sequelsans-romanbody">
                                    Who We Are
                                </h2>
                            </div>
                        </div>
                        <div class="about-content">
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
                            </div>

                            <!-- ✅ Services Icons Section -->
                            <div class="services-icons">
                                <div class="service-item fade-top">
                                    <i class="fa-solid fa-people-group"></i>
                                    <p>Flexible co-working desks to collaborate and grow with other professionals.</p>
                                </div>

                                <div class="service-item fade-top">
                                    <i class="fa-solid fa-briefcase"></i>
                                    <p>Private furnished spaces designed for focus and team productivity.</p>
                                </div>

                                <div class="service-item fade-top">
                                    <i class="fa-solid fa-calendar-days"></i>
                                    <p>Modern event venues ideal for workshops, meetings, and networking.</p>
                                </div>

                                <div class="service-item fade-top">
                                    <i class="fa-solid fa-building"></i>
                                    <p>Customizable floors built to match your company’s unique needs.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 order-lg-1 order-md-1 order-0">
                        <div class="about-images">
                            <div class="first-img about-img reveal">
                                <img class="img-2" src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-img-1.webp" alt="">
                            </div>
                            <div class="second-img about-img reveal">
                                <img class="img-1" src="https://html.ravextheme.com/redox/light/assets/imgs/web-design/about-img.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="border-top"></div>
            <div class="row">
                <div class="banefits-main-div">
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/1.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Cost Savings and Flexibility</span>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/2.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Networking & Community Events</span>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/3.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Perks With The Space</span>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/4.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Central Location For Clients</span>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/5.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Enhanced Company Productivity</span>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/6.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Bring Structure to Your Day</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <section class="aboutus-section-main about-details py-lg-5 py-5">
        <div class="container large">
            <div class="row gap-lg-0 gap-md-0 gap-4  mb-lg-5 mb-4 align-items-center">
                <div class="col-12 col-md-12 col-lg-6 order-lg-0 order-md-0 order-1">
                    <div class="aboutus-main">
                        <div class="section-content">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h2 class="section-title font-instrumentsans-medium word-anim">
                                        Who We Are
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="para word-anim">
                            <p>
                                At Quay Space, we believe a workspace should be more than four walls and a desk — it should be a community that inspires growth, collaboration, and innovation.
                            </p>
                            <p>
                                Based on Birmingham’s iconic Broad Street with stunning canal-side views, our spaces combine modern facilities with a welcoming environment designed to suit freelancers, entrepreneurs, start-ups, and established businesses alike.
                            </p>
                            <p>
                                Whether you need a hot desk for a day, a fully serviced private office, or an event venue for your team, Quay Space gives you flexibility without compromise.
                            </p>
                            <p>
                                Our mission is simple: to create spaces that help businesses flourish while making work feel inspiring, productive, and connected.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-6 order-lg-1 order-md-1 order-0 d-block d-lg-block d-md-none">
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
            <div class="d-lg-flex d-flex about-tilte-icon-para pt-lg-5 py-4">
                <div class="about-item fade-top">
                    <i class="fa-solid fa-people-group"></i>
                    <span>Flexible coworking desks</span>
                    <p>
                        Collaborate and network with other professionals.
                    </p>
                </div>

                <div class="about-item fade-top">
                    <i class="fa-solid fa-briefcase"></i>
                    <span>Private offices</span>
                    <p>
                        Furnished spaces built for focus and productivity.
                    </p>
                </div>

                <div class="about-item fade-top">
                    <i class="fa-solid fa-calendar-days"></i>
                    <span>Event-ready venues</span>
                    <p>
                        Modern setups for workshops, meetings, and networking.
                    </p>
                </div>

                <div class="about-item fade-top">
                    <i class="fa-solid fa-building"></i>
                    <span>Customisable floors</span>
                    <p>
                        Tailored solutions for growing teams and SMEs.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about area end  -->

    <section class="about-area about-area-details overflow-hidden py-lg-5 py-3 d-none d-md-none d-lg-flex">
        <div class="container large">
            <div class="row">
                <div class="col-12 col-lg-lg col-md-12">
                    <div class="section-content py-lg-5 py-3">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper text-center">
                                <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                    Why Choose Us
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banefits-main-div">
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/1.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Cost Savings & Flexibility</span>
                            <p class="para">
                                Pay only for what you need, scale as you grow.
                            </p>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/2.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Networking & Community Events</span>
                            <p class="para">
                                Meet like-minded professionals and grow your network.
                            </p>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/3.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Perks With The Space</span>
                            <p class="para">
                                From Wi-Fi to kitchen facilities, everything is covered.
                            </p>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/4.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Central Birmingham Location</span>
                            <p class="para">
                                Easy access for you, your team, and your clients
                            </p>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/5.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Boost Productivity</span>
                            <p class="para">
                                Designed to inspire focus, energy, and collaboration.
                            </p>
                        </div>
                    </div>
                    <div class="icon-content">
                        <div class="icon">
                            <img src="{{url('frontend/assets/imgs/about/about-icons/6.png.png')}}" alt="">
                        </div>
                        <div class="content">
                            <span>Bring Structure To Your Day</span>
                            <p class="para">
                                Separate work from home life with a professional base.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about-area about-area-details overflow-hidden d-flex d-md-flex d-lg-none">
        <div class="container large">
            <div class="row">
                <div class="col-12 col-lg-lg col-md-12">
                    <div class="section-content">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper text-center">
                                <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                    Why Choose Us
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Swiper -->
                <div class="swiper WhyChooseCards">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/1.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Cost Savings & Flexibility</span>
                                        <p class="para">
                                            Pay only for what you need, scale as you grow.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/2.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Networking & Community Events</span>
                                        <p class="para">
                                            Meet like-minded professionals and grow your network.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/3.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Perks With The Space</span>
                                        <p class="para">
                                            From Wi-Fi to kitchen facilities, everything is covered.
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/4.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Central Birmingham Location</span>
                                        <p class="para">
                                            Easy access for you, your team, and your clients
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/5.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Boost Productivity</span>
                                        <p class="para">
                                            Designed to inspire focus, energy, and collaboration.
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="banefits-main-div">
                                <div class="icon-content">
                                    <div class="icon">
                                        <img src="{{url('frontend/assets/imgs/about/about-icons/6.png.png')}}" alt="">
                                    </div>
                                    <div class="content">
                                        <span>Bring Structure To Your Day</span>
                                        <p class="para">
                                            Separate work from home life with a professional base.
                                        </p>
                                    </div>
                                </div>                                
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
                            <p class="text">We helped to get companies with &pound;200M+ funding.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">260+</span>
                            <p class="text">Crafted responsive, user-centered website & app.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">12+</span>
                            <p class="text">We have had quite a run in our 12+ years of working.</p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">80+</span>
                            <p class="text">Professional skilled designers and developers.
                            </p>
                        </div>
                        <div class="funfact-item go-visible">
                            <span class="number">99%</span>
                            <p class="text">Average 99% clients satisfaction with expertise.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- funfact area end  -->

    <!-- team area start  -->
    <section class="team-area-about-page py-lg-1 py-3">
        <div class="team-area-about-page-inner">
            <div class="container large">
                <div class="row">
                    <div class="col-12">
                        <div class="title-wrapper py-lg-5 py-3">
                            <h2 class="section-title text-center font-sequelsans-romanbody">
                                Our Team
                            </h2>
                        </div>
                    </div>
                    @foreach($ourteams as $team)
                    <div class="col-12 col-md-6 col-lg-6">
                        {{-- <div class="our-teams-cards position-relative">
                            <div class="white-border"></div>
                            <div class="image">
                                <img src="https://www.quay-space.co.uk/frontend/assets/images/team/AnnieDurrant.jpg" alt="">
                            </div>
                            <div class="content fade-anim">
                                <div class="name">
                                    <h2>Annie Durrant</h2>
                                </div>
                                <div class="designation">
                                    <p>Manager</p>
                                </div>
                            </div>
                        </div> --}}
                        <div class="ourteam-cards">
                            <a href="{{route('ourteam')}}">
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
                                <div class="img">
                                    <img src="{{url('storage/' . $team->card_img )}}" alt="">
                                </div>
                                <div class="information-details">
                                    <div class="name">
                                        <h2>{{ ucwords($team->title ) }}</h2>
                                    </div>
                                    <div class="designation">
                                        <p>{{ $team->designation }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- team area end  -->

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
 <script src="https://www.inspirefm.org/frontend/assets/js/swiper-bundle.min.js"></script>
    <script>
        var WhyChooseCards = new Swiper('.WhyChooseCards', {
            slidesPerView: 1,
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
                510: {
                    slidesPerView: 1
                },
                820: {
                    slidesPerView: 2
                },
            }
        });
    </script>
@stop 