@extends('frontend/layouts/master')

@section('metas')
@stop

@section('title')
Quay Space | Contact Us
@stop

@section('css')
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
@stop

@section('content')

    <!-- page title area start  -->
    <section class="page-title-area contact-banner" style="background-image: url('frontend/assets/imgs/banner/contact-us.webp');">
        <div class="container large">
            <div class="page-title-area-inner section-spacing-top">
                <div class="page-title-wrapper">
                    <h2 class="page-title fade-anim colored-text-layer" id="colorful-title">Contact Quay Space</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- page title area end  -->

    <!-- contact area start  -->
    <section class="contact-area-contact-page py-lg-5 py-3">
        <div class="container">
            <div class="contact-area-contact-page-inner">
                <div class="section-header fade-anim">
                    <div class="section-title-wrapper">
                        <div class="title-wrapper">
                            <h2 class="section-title text-center font-sequelsans-romanbody">
                                Get in touch
                            </h2>
                            <p class="text text-black py-3">
                                At Quay Space, we’re always excited to hear from you. Whether you’re curious about our coworking spaces, private offices, meeting rooms, or virtual office services, our team is here to help.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="section-content-wrapper fade-anim">
                    <div class="section-content order-md-0 order-1">
                        <div class="contact-mail">
                            <!-- <p class="title">Get in touch</p> -->
                            <p class="text">
                                Let’s start something special together.
                            </p>
                            <div class="contact-information my-lg-4 my-4">
                                @if(setting('site.phone'))
                                <div class="icon">
                                    <i class="fa-solid fa-phone"></i>
                                    <div class="title-info">
                                        <a href="tel:{{setting('site.phone')}}">
                                            <h6 class="text-black">Phone</h6>
                                            <span>{{setting('site.phone')}}</span>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @if(setting('site.gmail'))
                                <div class="icon">
                                    <i class="fa-solid fa-envelope"></i>
                                    <div class="title-info">
                                        <a href="mailto:{{setting('site.gmail')}}">
                                            <h6 class="text-black">Email</h6>
                                            <span>{{setting('site.gmail')}}</span>
                                        </a>
                                    </div>
                                </div>
                                @endif
                                @if(setting('site.address'))
                                <div class="icon">
                                    <i class="fa-solid fa-location-dot"></i>
                                    <div class="title-info">
                                        <a href="tel:{{setting('site.address')}}">
                                            <h6 class="text-black">Visit Us</h6>
                                            <span>{{(setting('site.address'))}}</span>
                                        </a>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="contact-social">
                            <p class="title">Stay connected with us:</p>
                            <div class="offset-widget-box">
                                <div class="crp-footer-social header-menu">
                                    @if(setting('site.facebook'))
                                      <a href="{{setting('site.facebook')}}"><i class="fa-brands fa-facebook-f"></i></a>
                                    @endif
                                    @if(setting('site.instagram'))
                                        <a href="{{setting('site.instagram')}}"><i class="fa-brands fa-instagram"></i></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contact-wrap order-md-1 order-0">
                        <div class="section-content mb-lg-4 mb-3 order-md-0 order-1">
                            <div class="contact-mail">
                                <p class="text mt-lg-0 mt-0">
                                    Send us a message
                                </p>
                                <p class="form-para"> Fill out the form, and our team will respond within 24 hours.</p>
                            </div>
                        </div>
                        <form id="contact_form">
                            <div class="contact-formwrap">
                                <div class="d-flex w-100 gap-lg-3 gap-0">
                                    <div class="contact-formfield w-100">
                                        <input type="text" id="contactname" placeholder="Name*">
                                    </div>
                                    <div class="contact-formfield w-100">
                                        <input type="text" id="contactemail" placeholder="Email*">
                                    </div>
                                </div>
                                <div class="contact-formfield">
                                    <input type="text" id="contactphone" placeholder="Phone*">
                                </div>
                                <div class="contact-formfield message">
                                    <input type="text" id="contactmessage" placeholder="Message*">
                                </div>
                            </div>
                            <div class="submit-btn">
                                <button type="button" id="contactsubmit" class="rr-btn">
                                    <span class="btn-wrap">
                                        <span class="text-one">Send Message</span>
                                        <span class="text-two">Send Message</span>
                                    </span>
                                </button>
                            </div>
                            <div id="response-message"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact area end  -->

    <!-- Map start -->
    <section class="contact-area-contact-page pt-lg-5 pt-3">
        <div class="container-full">
            <div class="row">
                <div class="col-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2430.1155143344577!2d-1.9160331062963472!3d52.47704416734863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4870bcf430d07e51%3A0xd0764aebab9e49cd!2sQuayside%20Tower%2C%20Broad%20St%2C%20Birmingham%20B1%202HF%2C%20UK!5e0!3m2!1sen!2s!4v1756272315978!5m2!1sen!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map end -->

@stop

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{url('frontend/assets/vendor/jquery-3.7.1.min.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
   
    <script>
        $("#contactphone").mask('99999-999999');
        $(document).ready(function(){
            $("#contactsubmit").click(function(){
                var name = $("#contactname").val();
                var email = $("#contactemail").val();
                var phone = $("#contactphone").val();
                var message = $("#contactmessage").val();

                // Regular expression for email validation
                var emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                
                if(name !=""){
                    if(email !=""){
                        if(phone !=""){
                            if(message !=""){
                                if(emailPattern.test(email)){
                                    if(phone.length == 12){
                                        $(this).html("Please Wait &nbsp;<i class='fa fa-spinner fa-spin'></i>");
                                        $(this).attr("disabled","disabled");
                                        $.ajax({
                                            url:"/contact/submit",
                                            type:"POST",
                                            data:{
                                                name:name,
                                                email:email,
                                                phone:phone,
                                                message:message,
                                                '_token': '{{ csrf_token() }}',
                                            },
                                            success:function(response){
                                                if(response['status']=="success"){
                                                    Swal.fire({
                                                        position:'center',
                                                        icon:'success',
                                                        title:response['message'],
                                                        showConfirmButton:false,
                                                        timer:2000,
                                                    });
                                                    $("#name").val("");
                                                    $("#email").val("");
                                                    $("#phone").val("");
                                                    $("#message").val("");
                                                    $("#submit").html("submit");
                                                    $("#submit").removeAttr("disabled");
                                                    setTimeout(function(){
                                                        window.location.href = response['redirect'];
                                                    },2000);
                                                }else{
                                                    if(response['status']=="warning")
                                                        Swal.fire({
                                                        position:'center',
                                                        icon:'warning',
                                                        title:response['message'],
                                                        showConfirmButton:false,
                                                        timer:1500,
                                                        });
                                                    $("#submit").html("submit");
                                                    $("#submit").removeAttr("disabled");
                                                }
                                            }
                                        });
                                    }
                                    else{
                                        $("#contactphone").focus();
                                        Swal.fire({
                                            position:'center',
                                            icon:'warning',
                                            title:'Enter 12 Digits Number',
                                            showConfirmButton:false,
                                            timer:1500,
                                        });
                                    }
                                }
                                else{
                                    $("#contactemail").focus();
                                    Swal.fire({
                                        position:'center',
                                        icon:'warning',
                                        title:'Enter a Valid Email',
                                        showConfirmButton:false,
                                        timer:1500,
                                    });
                                }
                            }
                            else{
                                $("#contactmessage").focus();
                                Swal.fire({
                                    position:'center',
                                    icon:'warning',
                                    title:'Enter Message',
                                    showConfirmButton:false,
                                    timer:1500,
                                });
                            }
                        }
                        else{
                            $("#contactphone").focus();
                            Swal.fire({
                                position:'center',
                                icon:'warning',
                                title:'Enter Phone Number',
                                showConfirmButton:false,
                                timer:1500,
                            });
                        }
                    }
                    else{
                        $("#contactemail").focus();
                        Swal.fire({
                            position:'center',
                            icon:'warning',
                            title:'Enter Your Email',
                            showConfirmButton:false,
                            timer:1500,
                        });
                    }
                }
                else{
                    $("#contactname").focus();
                    Swal.fire({
                        position:'center',
                        icon:'warning',
                        title:'Enter Your Name',
                        showConfirmButton:false,
                        timer:1500,
                    });
                }
            });
        });
    </script>
@stop 