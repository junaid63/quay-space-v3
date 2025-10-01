@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | 360 view
@stop

@section('css')
<style>
    .three-sixty-wrapper {
    position: relative;
    width: 100%;
    height: 600px; /* apne iframe ki height adjust karo */
    overflow: hidden;
    border-radius: 20px; /* optional round corners */
    -webkit-clip-path: inset(0 0 150px 0); /* upar/neeche se crop */
    clip-path: inset(0 0 150px 0);
}

.three-sixty-wrapper iframe {
    width: 100%;
    height: 100%;
    border: none;
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
            <div class="row">
                <div class="col-lg-3">
                    <a href="{{route('threesixty_detail')}}">
                        <div class="threesixty-view-card">
                            <div class="title-wrapper">
                                <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                    Second Floor 360 View
                                </h2>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3">
                    <div class="threesixty-view-card">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Third Floor 360 View
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="threesixty-view-card">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Seven Floor 360 View
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="threesixty-view-card">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">
                                Eight Floor 360 View
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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