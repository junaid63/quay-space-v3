<!-- client area start  -->
    <section class="client-area">
        <div class="container large">
            <div class="client-area-inner section-spacing-top">
                <div class="section-content">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-instrumentsans-medium word-anim">Amenities</h2>
                        </div>
                    </div>
                </div>
                <div class="client-capsule-wrapper-box" data-t-throwable-scene="true">
                    <div class="client-capsule-wrapper">
                        @foreach ($amenitiesget as $amenity)
                        <p data-t-throwable-el>
                            <span class="client-box">
                                {{ ucwords($amenity->name) }}
                            </span>
                        </p>
                        @endforeach
                    </div>
                </div>
                <div class="lines-wrapper">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </section>
    <!-- client area end  -->