@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | 360 view
@stop

@section('css')
<style>
    #ggpkg_container_0_241, 
    #ggpkg_container_0_241 #viewport, 
    #ggpkg_container_0_241 #viewer {
        width: 100%;
        height: 600px; /* apni zaroorat k mutabiq set karein */
        position: relative;
    }
</style>
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area faq-banner" style="background-image: url('frontend/assets/imgs/banner/faq.webp');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">360 View</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <section class="threesixty-view-main py-lg-5"> 
        <div class="container large">
            <div class="fthreesixty-view-card">
                <iframe 
                    src="https://seeyourselfonline.com/wordpress/wp-content/uploads/2025/05/2nd_flr_tour_wp/index.html" 
                    height="600" 
                    width="100%"
                    frameborder="0" 
                    allowfullscreen>
                </iframe>
            </div>
        </div>
        {{-- <div id="container" class="container large"> 
            <div class="entry-content"> 
                <div id="ggpkg_container_0_241"> 
                </div> 
            </div> 
        </div>  --}}
    </section>

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

<script>
    $(document).ready(function () {
        // Jab accordion open ho
        $("#accordionExample").on("show.bs.collapse", function (e) {
            // Sab se active hatao
            $(".accordion-item").removeClass("active");
            // Jo open ho rha hai uske parent ko active do
            $(e.target).closest(".accordion-item").addClass("active");
        });

        // Jab accordion band ho (optional, agar band pe bhi active remove karna ho)
        $("#accordionExample").on("hide.bs.collapse", function (e) {
            $(e.target).closest(".accordion-item").removeClass("active");
        });
    });
</script>
@stop 