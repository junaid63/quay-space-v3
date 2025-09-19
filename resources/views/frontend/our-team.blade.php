@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Our Team
@stop

@section('css')
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area about-banner" style="background-image: url('frontend/assets/imgs/banner/about-us.webp');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">Our Team
                        <h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- team details area start  -->
    <section class="team-details-area section-spacing-top pb-lg-5 pb-3">
        <div class="container">
            <div class="team-details-cards">
               @foreach($ourteams as $index => $team)
                    <div class="section-content-wrapper fade-anim d-flex flex-column flex-md-row align-items-center {{ $index % 2 == 0 ? '' : 'flex-md-row-reverse' }}">
                        
                        {{-- Content --}}
                        <div class="section-content p-4 flex-fill">
                            <div class="section-title-wrapper">
                                <div class="title-wrapper">
                                    <h2 class="section-title font-sequelsans-romanbody">
                                        {{ ucwords($team->title) }}
                                    </h2>
                                </div>
                                <div class="subtitle-wrapper">
                                    <span class="section-subtitle">{{ ucwords($team->designation)}}</span>
                                </div>
                            </div>
                            <div class="text-wrapper">
                                {!! $team->paraghraph !!}
                            </div>
                            <div class="social-icons-links py-lg-4 py-3 d-flex gap-3">
                                <div class="icons">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div class="icons">
                                    <i class="fa-solid fa-envelope"></i>
                                </div>
                            </div>
                        </div>

                        {{-- Image --}}
                        <div class="team-thumb p-lg-4 p-0 flex-fill">
                            <img src="{{ url('storage/' . $team->details_img) }}" alt="{{ $team->title }}" class="img-fluid rounded">
                        </div>
                    </div>

                    {{-- Border line after each card --}}
                    <div class="border-line my-4"></div>
                @endforeach


                {{-- <div class="section-content-wrapper fade-anim">
                    <div class="team-thumb order-lg-0 order-1">
                        <img src="https://www.quay-space.co.uk/frontend/assets/images/team/SkyeBrowne.webp" alt="">
                    </div>
                    <div class="section-content order-lg-1 order-0">
                        <div class="section-title-wrapper">
                            <div class="title-wrapper">
                                <h2 class="section-title font-sequelsans-romanbody">
                                    Skye Browne
                                </h2>
                            </div>
                            <div class="subtitle-wrapper">
                                <span class="section-subtitle">Coordinator</span>
                            </div>
                        </div>
                        <div class="text-wrapper">
                            <p class="text">
                                I’m leading experts in disciplines ranging from data science and neural networks to low-level devices, software engineering, and architecture.
                            </p>
                            <p class="text">
                                By combining our strong experience in AI-enriched technology areas and product development mindset, we provide unique smart products co-creation services enabling cities, industries, and people to make their way into a new era of the digital efficiently
                                and securely.
                            </p>
                        </div>
                        <div class="social-icons-links py-lg-5 py-3">
                            <div class="icons">
                                <i class="fa-solid fa-phone"></i>
                            </div>
                            <div class="icons">
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <!-- team details area end  -->

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
@stop 