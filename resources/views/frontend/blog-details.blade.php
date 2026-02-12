@extends('frontend/layouts/master')

@section('metas')
    <meta name="title" content="{{ $blogdetails->meta_title }}">
    <meta name="description" content="{{ $blogdetails->meta_description }}">
    <meta property="og:title" content="{{ $blogdetails->meta_title }}">
    <meta property="og:description" content="{{ $blogdetails->meta_description }}">
    <meta name="twitter:title" content="{{ $blogdetails->meta_title }}">
    <meta name="twitter:description" content="{{ $blogdetails->meta_description }}">,
    <meta name="twitter:domain" content="{{ env("APP_URL") }}">
@stop

@section('title')
    {{ $blogdetails->meta_title }}
@stop

@section('css')
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area faq-banner" style="background-image: url({{ url('storage/' . str_replace('\\', '/', $blogdetails->detail_banner)) }});">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    {{-- <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">{{ ucwords(implode(' ', array_slice(explode(' ', $blogdetails->title), 0, 3))) }}</h2> --}}
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">{{ ucwords(implode(' ', array_slice(explode(' ', $blogdetails->title), 0, 5))) }}</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

     <section class="services-section blog-detail-main py-lg-5 py-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-details-main">
                        <!-- Blog Post 1 -->
                        <div class="blog-details-card">
                            <div class="blog-details-content">
                                @php
                                    $createdat = $blogdetails->created_at;
                                    $timeformat = \Carbon\Carbon::parse($createdat)->format('d - F - Y');
                                @endphp
                                <div class="blog-details-meta">
                                    <span class="blog-details-date">{{ $timeformat }}</span>
                                    <span class="blog-details-category">Office Space</span>
                                </div>
                            </div>

                            
                            {!! $blogdetails->description !!}
                        </div>
                    </div>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4 pin-area">
                    <div class="blog-sidebar blog-sticky">
                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Posts</h3>
                            <ul class="recent-posts">
                                @foreach ($popularblogs as $blog)
                                <a href="{{ route('blogdetails', $blog->slug) }}">
                                    <li class="recent-post">
                                        <div class="recent-post-image">
                                            <img src="{{ url('storage/' . $blog->home_card_img) }}" alt="Travel">
                                        </div>
                                        <div class="recent-post-content">
                                                @php
                                                $createdat = $blog->created_at;
                                                $timeformat = \Carbon\Carbon::parse($createdat)->format('d - F - Y');
                                            @endphp
                                            <div class="recent-post-content">
                                                <h4>
                                                    {{ ucwords(implode(' ', array_slice(explode(' ', $blog->title), 0, 10))) }}...
                                                </h4>
                                                <div class="d-flex gap-2 justify-content-end">
                                                    <i class="fa-regular fa-calendar"></i>
                                                    <span class="post-date">{{ $timeformat }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Tags Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Share Page</h3>
                            <div class="tags-list">

                                <!-- WhatsApp -->
                                <a href="https://api.whatsapp.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>

                                <!-- Facebook -->
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>

                                <!-- Instagram (Direct sharing NOT supported by URL) -->
                                <a href="https://www.instagram.com/?url={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@stop

@section('js')
 <script>
        // Simple animation for page title
        document.addEventListener('DOMContentLoaded', function() {
            const title = document.querySelector('.page-title');
            title.style.opacity = '0';
            title.style.transform = 'translateY(20px)';
            
            setTimeout(() => {
                title.style.transition = 'all 0.8s ease';
                title.style.opacity = '1';
                title.style.transform = 'translateY(0)';
            }, 300);
        });
    </script>
@stop 