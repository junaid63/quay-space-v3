<!doctype html>
<html lang="en" class="layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr" data-skin="default" data-template="vertical-menu-template" data-bs-theme="light">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />
    <meta name="robots" content="noindex, nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <meta name="description" content="" />
    <link rel="icon" type="image/x-icon" href="../../assets/img/favicon/favicon.ico" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&ampdisplay=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.4.0/css/all.css">
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/iconify-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/pickr/pickr-themes.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/core.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/css/demo.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/apex-charts/apex-charts.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/swiper/swiper.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/fonts/flag-icons.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/css/pages/cards-advance.css') }}" />
    <script src="{{ url('backend/assets/vendor/js/helpers.js') }}"></script>
    <script src="{{ url('backend/assets/js/config.js') }}"></script>
    <link rel="stylesheet" href="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.css') }}" />
    <link rel="stylesheet" href="{{ url('backend/assets/sass/custom.css') }}" />

    <style>
        .dt-container.dt-bootstrap5 {
            padding: 0px 10px;
        }
    </style>
    @yield('css')
</head>
<body>
    @include('inc.switch-account')
    <div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('inc.sidebar')
        <div class="layout-page">
            @include('inc.header')
            <div class="content-wrapper">
                @yield('content')
                @include('inc.footer')
                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>
        <div class="layout-overlay layout-menu-toggle"></div>
        <div class="drag-target"></div>
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
    <script src="{{ url('backend/assets/vendor/libs/apex-charts/apexcharts.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/swiper/swiper.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>
    <script src="{{ url('backend/assets/js/main.js') }}"></script>
    <script src="{{ url('backend/assets/js/dashboards-analytics.js') }}"></script>
    <script src="{{ url('backend/assets/vendor/libs/sweetalert2/sweetalert2.js') }}"></script>
    <script src="{{ url('backend/assets/js/extended-ui-sweetalert2.js') }}"></script>

    <script>
        window.currentAccount = "{{ auth()->user()->ref_key }}";
        document.getElementById('switch-account-btn').addEventListener('click', async () => {
            try {
                const res = await fetch('/ajax/accounts');
                if (!res.ok) throw new Error('Could not load accounts');
                const accounts = await res.json();

                const select = document.getElementById('accountSelect');
                select.innerHTML = '';

                const ph = document.createElement('option');
                ph.value = '';
                ph.disabled = true;
                ph.selected = true;
                ph.textContent = 'Select an account';
                select.appendChild(ph);

                accounts.forEach(account => {
                    const option   = document.createElement('option');
                    option.value   = account.ref_key;

                    const isCurrent = (
                        account.ref_key === window.currentAccount
                    );

                    option.textContent = isCurrent
                        ? `${account.name} (current)`
                        : account.name;
                    if (isCurrent) option.selected = true;
                    select.appendChild(option);
                });

                new bootstrap.Modal(document.getElementById('switchAccountModal')).show();

            } catch (err) {
                console.error(err);
                alert('Failed to load accounts.');
            }
        });

        document.getElementById('switchAccountForm').addEventListener('submit', async (e) => {
            e.preventDefault();

            const select = document.getElementById('accountSelect');
            const refKey = select.value;

            if (!refKey) {
                select.classList.add('is-invalid');
                return;
            }

            select.classList.remove('is-invalid');

            try {
                const res = await fetch('/switch-account', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                    },
                    body: JSON.stringify({ ref_key: refKey })
                });

                if (!res.ok) throw new Error('Switch failed');

                bootstrap.Modal.getInstance(document.getElementById('switchAccountModal')).hide();

                location.reload();
            } catch (err) {
                console.error(err);
                alert('Failed to switch account.');
            }
        });

        $(document).on('click', '.change-view', function() {
            localStorage.setItem('changeViewPreference', $(this).hasClass('clean') ? 'clean' : 'compact');
        });

        @php
            $menu = collect(config('menu'))->sortBy('sort');
            $menuForJs = $menu->values()->map(function($item) {
                return [
                    'label' => $item['title'] ?? 'Untitled',
                    'url' => isset($item['route']) ? route($item['route']) : '#',
                ];
            });
        @endphp

        // const menuItems = @json($menuForJs);
        // function initVeuxyAutocomplete() {
        //     autocomplete({
        //         container: '#autocomplete',
        //         placeholder: 'Search [CTRL + K]',
        //         openOnFocus: true,
        //         getSources() {
        //             return [
        //                 {
        //                     sourceId: 'dummy',
        //                     getItems({ query }) {
        //                         const items = menuItems;

        //                         return items.filter(item =>
        //                             item.label.toLowerCase().includes(query.toLowerCase())
        //                         );
        //                     },

        //                     templates: {
        //                         item({ item, createElement }) {
        //                             return createElement('a', {
        //                                 href: item.url,
        //                             }, item.label);
        //                         }
        //                     }
        //                 }
        //             ];
        //         }
        //     });
        // }

        $(document).ready(function () {
            // initVeuxyAutocomplete();

            // $(document).on('keydown', function(e) {
            //     if (e.ctrlKey && e.code === 'KeyI') {
            //         e.preventDefault();
            //         const $el = $('.csa-click').not('.disabled').first();
            //         if ($el.length) $el.trigger('click');
            //         $('.first-selector').trigger('focus');
            //     }

            //     if (e.key === 'Escape') {
            //         e.preventDefault();
            //         $('.remove-row').trigger('click');
            //     }

            //     if (e.ctrlKey && e.code === 'KeyS') {
            //         e.preventDefault();
            //         $('#saveFundingBtn').trigger('click');
            //     }
            // });

            $(document).on('click', '.change-view', function () {
                $('.change-view').removeClass('selected');
                $(this).addClass('selected');
            });

            $(document).on('click', '.change-view.compact', function () {
                $('.custom-table-style-1').removeClass('clean').addClass('compact');
            });

            $(document).on('click', '.change-view.clean', function () {
                $('.custom-table-style-1').removeClass('compact').addClass('clean');
            });
        });
    </script>
    @yield('js')
</body>
</html>
