@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Calendly
@stop

@section('css')
@stop

@section('content')

  <!-- page title area start  -->
    <section class="page-title-area faq-banner" style="background-image: url('frontend/assets/imgs/banner/faq.webp');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">Book A Meeting</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <div class="container">
        <!-- Calendly Inline Widget -->
        <div class="calendly-inline-widget"
            data-url="https://calendly.com/quayspace/30min"
            style="min-width:320px; height:700px;">
        </div>
    </div>

    {{-- <section class="contact-area-contact-page pb-lg-5 pb-3">
        <div class="container">
            <div class="contact-area-contact-page-inner">
                <div class="section-header fade-anim"
                    style="translate: none; rotate: none; scale: none; transform: translate(0px, 0px); opacity: 1;">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2
                                class="section-title text-center font-sequelsans-romanbody">
                                Get in touch
                            </h2>
                            <p class="text text-black py-3">
                                At Quay Space, we’re always excited to hear from
                                you. Whether you’re curious about our coworking
                                spaces, private offices, meeting rooms, or virtual
                                office services,&nbsp;our team is here to help.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content order-md-0 order-1">
                    <div class="contact-mail">
                        <!-- <p class="title">Get in touch</p> -->

                        <div class="contact-information calendly-get-touch mt-lg-4 mt-2">
                            <div class="icon">
                                <i class="fa-solid fa-phone"></i>
                                <div class="title-info">
                                    <a href="tel:+44 121 269 3637">
                                        <h6 class="text-black">Phone</h6>
                                        <span>+44 121 269 3637</span>
                                    </a>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-envelope"></i>
                                <div class="title-info">
                                    <a href="mailto:info@quay-space.co.uk">
                                        <h6 class="text-black">Email</h6>
                                        <span>info@quay-space.co.uk</span>
                                    </a>
                                </div>
                            </div>
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                                <div class="title-info">
                                    <a
                                        href="https://maps.app.goo.gl/mRAnRGSL1hZJZEj2A">
                                        <h6 class="text-black">Visit Us</h6>
                                        <span>252 – 260, Quayside Tower, Broad
                                            Street, Birmingham, B1 2HF</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}

@stop

@section('js')
    <!-- Calendly Script -->
    <script src="https://assets.calendly.com/assets/external/widget.js" type="text/javascript" async></script>
@stop
