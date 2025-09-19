<!doctype html>
<html lang="en" class="layout-wide customizer-hide" dir="ltr" data-skin="default" data-assets-path="../../assets/" data-template="vertical-menu-template" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="noindex, nofollow">
    <title>Reset Password - MMO & Partner</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="{{ url('backend/assets/img/favicon/favicon.ico') }}" />
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
</head><body>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner py-6">
                <div class="card">
                    <div class="card-body">
                        <div class="app-brand justify-content-center mb-6">
                            <a href="index.html" class="app-brand-link">
                                <span class="app-brand-logo demo">
                                    <a href="{{ route('login') }}" class="app-brand-link">
                                        <img src="{{ url('backend/assets/img/extras/logos/mmo-and-partners-landscape-spaced.png') }}" alt="MMO & Partners" class="img-fluid sidebar-logo">
                                    </a>
                                </span>
                            </a>
                        </div>
                        <!-- /Logo -->
                        <h4 class="mb-1">Reset Password 🔒</h4>
                        <p class="mb-6">
                            <span class="fw-medium">Your new password must be different from previously used passwords</span>
                        </p>
                        <form id="formAuthentication" method="POST" action="{{ route('password.update') }}">
                            @csrf
                            <input type="hidden" id="token" name="token"  value="{{ $token }}">
                            <input type="hidden" id="email" name="email"  value="{{ request()->query('email') }}">

                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password">New password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control"
                                        name="password" placeholder="••••••••" autocomplete="new-password">
                                    <span class="input-group-text cursor-pointer toggle-pwd">
                                        <i class="icon-base ti tabler-eye-off"></i>
                                    </span>
                                </div>
                            </div>

                            <div class="mb-6 form-password-toggle">
                                <label class="form-label" for="password_confirmation">Confirm password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password_confirmation" class="form-control"
                                        name="password_confirmation" placeholder="••••••••" autocomplete="new-password">
                                    <span class="input-group-text cursor-pointer toggle-pwd">
                                        <i class="icon-base ti tabler-eye-off"></i>
                                    </span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary d-grid w-100 mb-6" type="submit">
                                Set new password
                            </button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
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
    <script src="{{ url('backend/assets/vendor/libs/@form-validation/bootstrap5.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/@form-validation/auto-focus.js') }}"></script>
    <script src="{{ url('backend/assets/js/main.js') }}"></script>
    <script src="{{ url('backend/assets/js/pages-auth.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const toggles = document.querySelectorAll('.toggle-pwd');

            toggles.forEach(toggle => {
                toggle.addEventListener('click', function () {
                    const input = this.previousElementSibling;
                    const icon = this.querySelector('i');

                    if (input.type === 'password') {
                        input.type = 'text';
                        icon.classList.remove('tabler-eye-off');
                        icon.classList.add('tabler-eye');
                    } else {
                        input.type = 'password';
                        icon.classList.remove('tabler-eye');
                        icon.classList.add('tabler-eye-off');
                    }
                });
            });
        });

        $(document).ready(function () {
            const $form   = $('#formAuthentication');
            const $pwd    = $('#password');
            const $pwd2   = $('#password_confirmation');
            const $errs   = $('<div class="alert alert-danger d-none" id="formErrors"></div>').insertBefore($form);
            const $btn    = $form.find('button[type="submit"]');
            const originalBtnHtml = $btn.html();

            function showErrors(list) {
                $errs.removeClass('d-none alert-success').addClass('alert-danger')
                    .html(list.map(e => `<div>${e}</div>`).join(''));
            }

            function showSuccess(message) {
                $errs.removeClass('d-none alert-danger').addClass('alert-success')
                    .html(`<div>${message}</div>`);
            }

            function setLoading(isLoading) {
                if (isLoading) {
                    $btn.prop('disabled', true).html(
                        `<i class="fa-regular fa-spinner-third fa-spin me-1" role="status"></i> Processing...`
                    );
                } else {
                    $btn.prop('disabled', false).html(originalBtnHtml);
                }
            }

            $form.on('submit', function (e) {
                e.preventDefault();
                $errs.addClass('d-none').empty();
                setLoading(true);

                const password  = $pwd.val().trim();
                const password2 = $pwd2.val().trim();
                const token     = $('#token').val();
                const email     = $('#email').val();

                const errs = [];
                if (password.length < 8)
                    errs.push('Password must be at least 8 characters.');
                if (password !== password2)
                    errs.push('Passwords do not match.');
                if (!token || !email)
                    errs.push('Invalid or expired reset link.');

                if (errs.length) {
                    setLoading(false);
                    return showErrors(errs);
                }

                $.post({
                    url : "{{ route('password.update') }}",
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        token, email, password, password_confirmation: password2
                    }
                })
                .done(res => {
                    showSuccess('Password has been reset successfully. Redirecting to login page...');
                    setTimeout(() => {
                        window.location.href = "{{ route('login') }}";
                    }, 2500);
                })
                .fail(xhr => {
                    if (xhr.status === 422 && xhr.responseJSON?.errors) {
                        showErrors(Object.values(xhr.responseJSON.errors).flat());
                    } else {
                        showErrors(['Unexpected error, please try again.']);
                    }
                })
                .always(() => {
                    setLoading(false);
                });
            });

            $('.toggle-pwd').on('click', function () {
                const $input = $(this).siblings('input');
                const type   = $input.attr('type') === 'password' ? 'text' : 'password';
                $input.attr('type', type);
                $(this).find('i').toggleClass('tabler-eye-off tabler-eye');
            });
        });
    </script>


</body>
</html>