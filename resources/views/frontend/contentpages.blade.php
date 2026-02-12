@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ $contentPages->meta_title }}">
    <meta name="description" content="{{ $contentPages->meta_description }}">
    <meta property="og:title" content="{{ $contentPages->meta_title }}">
    <meta property="og:description" content="{{ $contentPages->meta_description }}">
    <meta name="twitter:title" content="{{ $contentPages->meta_title }}">
    <meta name="twitter:description" content="{{ $contentPages->meta_description }}">
@stop

@section('title')
    {{ $contentPages->meta_title }}
@stop

@section('css')

@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area contact-banner" style="background-image: url('{{url('frontend/assets/imgs/banner/contentpages-banner.jpg')}}');">
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
        <div class="container">
            <div class="content-page-main-title-para">
                {!! $contentPages->description !!}
            </div>
        </div>
    </section>


@stop

@section('js')
@stop 