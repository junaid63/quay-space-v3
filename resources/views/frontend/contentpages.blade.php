@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Privacy Policy
@stop

@section('css')

@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area contact-banner" style="background-image: url('{{url('frontend/assets/imgs/banner/contact-us.webp')}}');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">{{ ucwords($contentPages->title) }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <section class="content-pages-main py-lg-5 py-3">
        <div class="container large">
            <div class="content-page-main-title-para">
                {!! $contentPages->description !!}

                {{-- <div class="date">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title font-instrumentsans-medium word-anim">
                                Last updated: 18 September 2023
                            </h2>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>


@stop

@section('js')
@stop 