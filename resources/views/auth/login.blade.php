<!doctype html>
<html lang="en" class="layout-wide customizer-hide" dir="ltr" data-skin="default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>Login - Quay Space</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/iconify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/@form-validation/form-validation.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/pages/page-auth.css') }}" />
    <script src="{{ url('backend/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('backend/assets/js/config.js') }}"></script>
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/animate-css/animate.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />

</head>
<body>
    <!-- Content -->
    <div class="authentication-wrapper authentication-cover">
    <!-- Logo -->
        <div class="image-on-video auth-cover-brand">
            <a href="index.html" class="app-brand">
                <img src="{{url('storage')}}/{{setting('site.backend-logo')}}" alt="Quay Space" class="img-fluid landing-logo">
            </a>
        </div>
    <!-- /Logo -->
        <div class="authentication-inner row m-0">
        <!-- /Left Text -->
            <div class="login-video-main d-flex d-xl-flex col-xl-8 p-0">
                <video class="login-video" id="dynamicVideo" muted="" autoplay="" playsinline="" loop="">
                    <source id="videoSource" src="{{url('backend/assets/video/login-video.mp4')}}" type="video/mp4">
                </video>
            </div>
            <!-- /Left Text -->
            <!-- Login -->
            <div class="d-flex col-12 col-xl-4 align-items-center authentication-bg p-6">
                <div class="login-form w-px-500">
                    <h4 class="mb-1 text-white">Welcome to {{ ucwords(config('app.name')) }}! 👋</h4>
                    <p class="mb-6 text-white">Please sign-in to your account and start the adventure</p>
                    <div id="formSuccess" class="alert alert-success d-none" role="alert"></div>
                    <div id="formErrors" class="alert alert-danger d-none" role="alert"></div>
                    <form id="formAuthentication" class="mb-6" method="POST">
                        @csrf
                        <div class="mb-6 form-control-validation">
                            <label for="email" class="text-white form-label">Email or Username</label>
                            <input type="text" class="text-white form-control" id="email" name="email" placeholder="Enter your email or username" autofocus />
                        </div>
                        <div class="mb-6 form-password-toggle form-control-validation">
                            <label class="text-white form-label" for="password">Password</label>
                            <div class="input-group input-group-merge">
                                <input type="password" id="password" class="text-white form-control" name="password" aria-describedby="password" />
                                <span class="input-group-text cursor-pointer toggle-pwd">
                                    <i class="icon-base ti tabler-eye-off text-white"></i>
                                </span>
                            </div>
                        </div>

                        <div class="my-8">
                            <div class="d-flex justify-content-between">
                                <div class="form-check mb-0 ms-2">
                                    <input class="form-check-input" type="checkbox" id="remember-me" />
                                    <label class="text-white form-check-label" for="remember-me"> Remember Me </label>
                                </div>
                                <a href="javascript:void(0);" onclick="forgotPasswordAlert();"><p class="mb-0 text-white">Forgot Password?</p></a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary signin-btn-design d-grid w-100">Sign in</button>
                    </form>
                </div>
            </div>
        <!-- /Login -->
        </div>
    </div>
    <!-- / Content -->
    <!-- Core JS -->
    <script src="{{ url('backend/assets/vendor/libs/jquery/jquery.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/popper/popper.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/js/bootstrap.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/node-waves/node-waves.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/@algolia/autocomplete-js.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/pickr/pickr.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/hammer/hammer.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/i18n/i18n.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/js/menu.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/@form-validation/popular.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ url('backend/assets/js/main.js') }}"></script>
    <script src="{{ url('backend/assets/js/pages-auth.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ url('backend/assets/js/extended-ui-sweetalert2.js') }}"></script>
    <script>
        const box = document.querySelector('.rotating-gradient');
        box.style.animationPlayState = 'paused'; // or 'running'
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const togglePassword = document.getElementById('toggle-password');
            const icon = togglePassword.querySelector('i');

            togglePassword.addEventListener('click', function () {
                const isPassword = passwordInput.type === 'password';
                passwordInput.type = isPassword ? 'text' : 'password';
                icon.classList.toggle('tabler-eye-off', !isPassword);
                icon.classList.toggle('tabler-eye', isPassword);
            });
        });

        $(document).ready(function () {
            const $form    = $('#formAuthentication');
            const $email   = $('#email');
            const $pwd     = $('#password');
            const $btn     = $form.find('button[type="button"]');
            const btnHtml  = $btn.html();
            const $errors  = $('#formErrors');
            const $success = $('#formSuccess');

            const showError = (message) => {
                $success.addClass('d-none').html('');
                $errors.removeClass('d-none').html(message);
            };

            const showSuccess = (message) => {
                $errors.addClass('d-none').html('');
                $success.removeClass('d-none').html(message);
            };

            const hideMessages = () => {
                $errors.addClass('d-none').html('');
                $success.addClass('d-none').html('');
            };

            const setLoading = on => {
                $btn.prop('disabled', on).html(on
                    ? `<span class="spinner-border spinner-border-sm me-1" role="status" aria-hidden="true"></span>`
                    : btnHtml
                );
            };

            $btn.on('click', function () {
                hideMessages();

                const email    = $email.val().trim();
                const pwd      = $pwd.val().trim();
                const remember = $('#remember-me').is(':checked');

                if (!email || pwd.length < 6) {
                    return showError('Please enter a valid email and password (min 6 characters).');
                }

                setLoading(true);

                $.ajax({
                    type: 'POST',
                    url: "{{ route('login.ajax') }}",
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                        'Accept': 'application/json'
                    },
                    data: {
                        email: email,
                        password: pwd,
                        remember: remember
                    }
                })
                .done(function (res) {
                    if (res.redirect) {
                        showSuccess('Login successful. Redirecting...');
                        setTimeout(() => {
                            window.location.href = res.redirect;
                        }, 1500);
                    } else {
                        showError(res.message || 'Unexpected response. Please contact support.');
                    }
                })
                .fail(function (xhr) {
                    if (xhr.status === 401) {
                        showError('The provided credentials are incorrect.');
                    } else if (xhr.status === 419) {
                        showError('Session expired. Please refresh the page and try again.');
                    } else if (xhr.responseJSON && xhr.responseJSON.message) {
                        showError(xhr.responseJSON.message);
                    } else {
                        showError('An error occurred. Please try again later.');
                    }
                })
                .always(function () {
                    setLoading(false);
                });
            });
        });

        function forgotPasswordAlert() {
            Swal.fire({
                title: 'Forgot password?',
                input: 'email',
                inputLabel: 'Enter your registered e-mail',
                inputPlaceholder: 'you@example.com',
                confirmButtonText: 'Send reset link',
                cancelButtonText: 'Cancel',
                showCancelButton: true,
                showLoaderOnConfirm: true,
                reverseButtons: true,
                preConfirm: (email) => {
                    return fetch("{{ route('password.email') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                        },
                        body: JSON.stringify({email})
                    })
                    .then(async response => {
                        const data = await response.json();
                        if (!response.ok) {
                            throw new Error(data.message || 'Something went wrong');
                        }
                        return data;
                    })
                    .catch(error => {
                        Swal.showValidationMessage(error.message);
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then(result => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Check your inbox',
                        text : 'We just sent you a password-reset link.',
                    });
                }
            });
        }
    </script>
</body>
</html>
