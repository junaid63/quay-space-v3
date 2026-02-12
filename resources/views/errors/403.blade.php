<!-- End error section -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page Not Found</title>
    <link rel="stylesheet" href="{{ url('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/SSF-Global-icon.css') }}">
    <link rel="stylesheet" href="{{ url('frontend/assets/css/custom.css') }}?ref={{ setting('site.css') }}">

    <!--- Favicons Start--->
    <link rel="apple-touch-icon" sizes="57x57" href="{{url('frontend/assets/images/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{url('frontend/assets/images/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{url('frontend/assets/images/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{url('frontend/assets/images/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{url('frontend/assets/images/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{url('frontend/assets/images/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{url('frontend/assets/images/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{url('frontend/assets/images/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{url('frontend/assets/images/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192"  href="{{url('frontend/assets/images/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{url('frontend/assets/images/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{url('frontend/assets/images/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{url('frontend/assets/images/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{url('frontend/assets/img/favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#a47966">

    <style>
        body {
            background-color: var(--bs-secondary-color); 
            overflow: hidden;
            width: 100vw;
            height: 100vh;
        }
        .section--padding {
            padding-top: 200px;
        }
    </style>
</head>
<body>
    <!-- Start error section -->
    <section class="error__section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <div class="error-main-div py-md-4 py-2">
                        <div class="oops-heading">
                            <span>403</span>
                        </div>
                        <div class="error-message">
                            <span>Forbidden</span>
                        </div>
                        <div class="error-para">
                            <p>
                                Access to this resource on the server is denied!
                            </p>
                        </div>
                        <div class="slider-btn">
                            <a class="tj-primary-btn" href="{{ route('index') }}">
                                <span class="btn-text"><span>Back to Home</span></span>
                                <span class="btn-icon"><i class="tji-arrow-right-long"></i></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End error section -->


    <script src="{{url('frontend/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function(){
            setTimeout(() => {
                window.setTimeout(function() {
                    window.location.href = '/';
                },10000);
            },);
        });
    </script>
</body>
</html>
    
    