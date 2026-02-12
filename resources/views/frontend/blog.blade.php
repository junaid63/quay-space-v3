@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Blog
@stop

@section('css')
 
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area faq-banner" style="background-image: url('frontend/assets/imgs/banner/faqs.jpg');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">Blogs</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

     <section class="services-section blog-detail-main py-lg-5 py-md-4 py-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog-grid">
                        <!-- Blog Post 1 -->
                        @foreach ($blogs as $blog)
                            <div class="blog-card">
                                <a href="{{ route('blogdetails', $blog->slug ) }}">
                                    <div class="blog-image">
                                        <img src="{{ url('storage/' . $blog->detail_banner) }}" alt="">
                                    </div>
                                    <div class="blog-content">
                                        <div class="blog-meta">
                                            @php
                                                $createdat = $blog->created_at;
                                                $timeformat = \Carbon\Carbon::parse($createdat)->format('d - F - Y');
                                            @endphp
                                            <span class="blog-date">{{ $timeformat }}</span>
                                            <span class="blog-category">{{ ucwords($blog->sub_title) }}</span>
                                        </div>
                                        <h3 class="blog-title">
                                            <a href="{{ route('blogdetails', $blog->slug ) }}">
                                                {{ ucwords($blog->title) }}
                                            </a>
                                        </h3>
                                        <p class="blog-excerpt">
                                            {{ $blog->short_description }}
                                        </p>
                                        <div class="all-btn-wrapper fade-anim">
                                            <a href="{{ route('blogdetails', $blog->slug ) }}" class="rr-btn hover-bg-theme animated-btn">
                                                <i class="fa-jelly fa-regular fa-arrow-right"></i>
                                            </a>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    
                </div>
                
                <!-- Sidebar -->
                <div class="col-lg-4 pin-area">
                    <div class="blog-sidebar blog-sticky">
                        <!-- Recent Posts Widget -->
                        <div class="sidebar-widget">
                            <h3 class="widget-title">Popular Posts</h3>
                            <ul class="recent-posts">
                                @foreach ($blogs as $blog)
                                <a href="{{ route('blogdetails', $blog->slug) }}" class="text-ellipsis-2">
                                    <li class="recent-post">
                                        <div class="recent-post-image">
                                            <img src="{{ url('storage/' . $blog->home_card_img) }}" alt="Travel">
                                        </div>
                                        <div class="recent-post-content">
                                            <h4>
                                                {{ ucwords(implode(' ', array_slice(explode(' ', $blog->title), 0, 10))) }}...
                                            </h4>
                                            @php
                                                $createdat = $blog->created_at;
                                                $timeformat = \Carbon\Carbon::parse($createdat)->format('d - F - Y');
                                            @endphp
                                            <div class="d-flex gap-2 justify-content-end">
                                                <i class="fa-regular fa-calendar"></i>
                                                <span class="post-date">{{ $timeformat }}</span>
                                            </div>
                                        </div>
                                    </li>
                                </a>
                                @endforeach
                            </ul>
                        </div>
                        
                        <!-- Tags Widget -->
                        {{-- <div class="sidebar-widget">
                            <h3 class="widget-title">Share Page</h3>
                            <div class="tags-list">
                                <a href="https://api.whatsapp.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                                <a href="https://www.facebook.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                                <a href="https://www.instagram.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-instagram"></i>
                                </a>
                                <a href="https://www.tiktok.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-tiktok"></i>
                                </a>
                                <a href="https://www.messenger.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-facebook-messenger"></i>
                                </a>
                                <a href="https://www.youtube.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                                <a href="https://www.linkedin.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-linkedin"></i>
                                </a>
                                <a href="https://www.x.com/send?text={{ urlencode(route('blogdetails', $blog->slug)) }}" target="_blank">
                                    <i class="fa-brands fa-x-twitter"></i>
                                </a>
                            </div>
                        </div> --}}
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