 <!-- footer area start  -->
    <footer class="footer-main section-spacing pt-lg-5 pt-4 pb-0">
        <div class="container">
            <div class="row">
                <!-- Column 1 -->
                <div class="col-12 col-lg-4 col-md-6 footer-widget">
                    <div class="footer-logo">
                        <a href>
                            <img src="{{url('storage')}}/{{setting('site.footer-logo')}}" alt="Footer Logo" />
                        </a>
                    </div>
                    <p>
                        Quay Space – Birmingham’s flexible workspace hub. Join hundreds of professionals already enjoying coworking, private offices, and event spaces designed to help businesses grow.
                    </p>
                </div>

                <!-- Column 2 -->
                <div class="col-6 col-lg-2 col-md-6 mb-lg-0 mb-md-3 mb-4">
                    <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-2">Company</h4>
                    <div class="crp-footer-widget-menu">
                        <ul>
                            <li><a class="@if(Route::currentRouteName() === 'index') active @endif" href="{{route('index')}}">Home</a></li>
                            <li><a class="@if(Route::currentRouteName() === 'aboutus') active @endif" href="{{route('aboutus')}}">About
                                        Us</a></li>
                            <li><a href="our-{{route('ourteam')}}">Our
                                        Team</a></li>
                            <li><a href="{{route('faqs')}}">Faq's</a></li>
                            <li><a href="{{route('contactus')}}">Contact
                                        Us</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Column 2 -->
                <div class="col-6 col-lg-2 col-md-6 mb-lg-0 mb-md-3 mb-4">
                    <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-2">Support</h4>
                    <div class="crp-footer-widget-menu mb-lg-3 mb-md-3 mb-3">
                        <ul>
                            @foreach ($contentpagesget as $content)
                            <li><a class="{{request()->route('slug') === $content->slug ? 'active': ''}}" href="{{route('contentpages', $content->slug )}}">{{ ucwords($content->title) }}</a></li>   
                            @endforeach
                        </ul>
                    </div>
                    <div class="footer-follow-us d-block d-lg-block d-md-none">
                        <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-3">Follow Us</h4>
                        <div class="crp-footer-social">
                            @if(setting('site.facebook'))
                                <a href="{{setting('site.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                            @endif
                            @if(setting('site.instagram'))
                                <a href="{{setting('site.instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-2 col-md-6 mb-lg-0 mb-md-3 mb-4 d-none d-lg-none d-md-block">
                    <div class="footer-follow-us">
                        <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-2">Follow Us</h4>
                        <div class="crp-footer-social">
                            @if(setting('site.facebook'))
                                <a href="{{setting('site.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                            @endif
                            @if(setting('site.instagram'))
                                <a href="{{setting('site.instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                            @endif
                        </div>
                    </div>
                </div>

                <!-- Column 3 -->
                <div class="col-12 col-lg-4 col-md-6 tablet-flex">
                    <div class="footer-contact-location mb-lg-4 mb-4">
                        <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-3">Location</h4>
                        <a href="https://maps.app.goo.gl/mRAnRGSL1hZJZEj2A" target="_blank">
                            {{setting('site.address')}}
                        </a>
                    </div>

                    <div class="footer-contact-location">
                        <h4 class="crp-footer-widget-title mb-lg-4 mb-md-4 mb-3">Contact Us
                        </h4>
                        <p>
                            <div class="footer-contactus-icon">
                                <label>Email :</label>
                                <a href="mailto:{{setting('site.gmail')}}">
                                    {{setting('site.gmail')}}
                                </a>
                            </div>
                            <div class="footer-contactus-icon">
                                <label>Phone :</label>
                                <a href="tel:{{setting('site.phone')}}">
                                    {{setting('site.phone')}}
                                </a>
                            </div>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Let's Discuss Button -->
            <div class="crp-footer-big-text-wrap">
                <a class="crp-footer-big-text" href="{{route('contactus')}}">
                    <span>
                            <span class="text-1">Let's Discuss</span>
                    <span class="text-2">Let's Discuss</span>
                    </span>
                    <i>
                            <svg width="81" height="81"
                                viewBox="0 0 81 81" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M77.4231 0.5H3.57692C1.87846 0.5 0.5 1.87846 0.5 3.57692C0.5 5.27538 1.87846 6.65385 3.57692 6.65385H69.9939L1.40154 75.2477C0.2 76.4492 0.2 78.3969 1.40154 79.5985C2.00308 80.2 2.78923 80.5 3.57692 80.5C4.36462 80.5 5.15231 80.2 5.75231 79.5985L74.3462 11.0046V77.4231C74.3462 79.1215 75.7246 80.5 77.4231 80.5C79.1215 80.5 80.5 79.1215 80.5 77.4231V3.57692C80.5 1.87846 79.1215 0.5 77.4231 0.5Z"
                                    fill="#ffffff"></path>
                            </svg>
                        </i>
                </a>
            </div>

            <!-- Copyright -->
        </div>
        <div class="footer-bottom-content">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="copy-right">
                            <p>© <span id="currentYear"></span> <a href="#"> Quay Space
                                    </a>. All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="designed">
                            Designed by
                            <a href="https://www.ssftech.co.uk/" target="_blank">
                                    SSF Tech
                                </a> - Under the Provision of SSF Group
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
<!-- footer area end  -->