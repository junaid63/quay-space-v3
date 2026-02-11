@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta name="description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
    <meta property="og:title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta property="og:description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
    <meta name="twitter:title" content="Garden Granny Annexe UK Contact | ANX Builds Today">
    <meta name="twitter:description" content="Garden granny annexe UK experts at ANX Builds. Contact our team for pricing, advice or a free consultation. Speak to us today and start your project with confidence.">
@endsection

@section('title')
@endsection

@section('page_logo', setting('site.black-logo'))

@section('css')
    <style>
        .header-p-inline-60 {
            background: white;
        }
        .rr-btn.transperent-button {
            background: var(--secondary);
        }
        .header__navicon .side-toggle {
            color: black!important;
        }
        .menu-icon .line {
            background-color: black!important;
        }
    </style>
@endsection

@section('content')

    <!-- core-services-start -->
    <section class="thankyou-main">
        <div class="container">
            <div class="col-lg-12">
                <div class="thankyou-title-desc-icon">
                    <div class="icon">
                        <i class="fa-solid fa-check"></i>
                    </div>
                    <div class="title">
                        <h1 class="bs-hero-4-title bs-h-4 wa-split-y cd-headline clip mb-0" data-split-delay="1s">
                            Thank you!
                        </h1>
                    </div>
                    <div class="desc">
                        <p class="bs-p-4 bs-hero-4-disc text-center  wa-split-y" data-split-delay="1.6s">
                           Your message has been received. A member of our team will be in touch shortly. In the meantime, please feel free to explore our services or book a free consultation.
                        </p>
                    </div>
                    <div class="redirect-button">
                        <div class="btn-wrap wa-fadeInUp">
                            <a href="{{ route('index') }}" aria-label="name" class="bs-pr-btn-2">
                                <span class="text" data-back="Back to Home" data-front="Back to Home"></span>
                                <span class="line-1" ></span>
                                <span class="line-2" ></span>
                                <span class="box box-1" ></span>
                                <span class="box box-2" ></span>
                                <span class="box box-3" ></span>
                                <span class="box box-4" ></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="time-duration">
            <p>Redirecting in <span id="counter">20</span> seconds...</p>
        </div>
    </section>
    <!-- core-services-end -->    

@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script>
        $(function () {
            let seconds = 20;

            let timer = setInterval(function () {
                seconds--;
                $('#counter').text(seconds);

                if (seconds <= 0) {
                    clearInterval(timer);
                    window.location.href = "/";
                }
            }, 1000);
        });
    </script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }

        window.onpopstate = function () {
            window.location.href = "{{ route('index') }}"; 
        };
    </script>

@endsection