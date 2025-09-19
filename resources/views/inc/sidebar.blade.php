<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu">
    <div class="app-brand demo">
        <a href="" class="app-brand-link">
            {{-- <span class="app-brand-text demo menu-text fw-bold ms-3">MMO & Partners</span> --}}
            <img src="{{url('storage')}}/{{setting('site.backend-transperent-logo')}}" alt="Quay Space" class="img-fluid sidebar-logo">
        </a>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
            <i class="icon-base ti menu-toggle-icon d-none d-xl-block"></i>
            <i class="icon-base ti tabler-x d-block d-xl-none"></i>
        </a>
    </div>
    <div class="menu-inner-shadow"></div>
    <ul class="menu-inner py-1">
        @php
            $role = auth()->check() ? auth()->user()->role_id : null;

            $menu = collect(config('menu'))
                ->filter(function ($item) use ($role) {
                    return in_array($role, $item['roles'] ?? []) ||
                        (isset($item['submenu']) && collect($item['submenu'])->contains(fn($sub) => in_array($role, $sub['roles'] ?? [])));
                })
                ->map(function ($item) use ($role) {
                    if (isset($item['submenu'])) {
                        $item['submenu'] = collect($item['submenu'])
                            ->filter(fn($sub) => in_array($role, $sub['roles'] ?? []))
                            ->sortBy('sort')
                            ->values()
                            ->all();
                    }
                    return $item;
                })
                ->sortBy('sort')
                ->values();
        @endphp

        @foreach($menu as $item)
            @if(isset($item['submenu']) && count($item['submenu']))
                <li class="menu-item {{ request()->routeIs(...$item['active']) ? 'active open' : '' }}">
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon icon-base ti {{ $item['icon'] }}"></i>
                        <div>{{ $item['title'] }}</div>
                    </a>
                    <ul class="menu-sub">
                        @foreach($item['submenu'] as $sub)
                            <li class="menu-item {{ request()->routeIs($sub['active']) ? 'active' : '' }}">
                                <a href="{{ route($sub['route']) }}" class="menu-link">
                                    <div>{{ $sub['title'] }}</div>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </li>
            @else
                <li class="menu-item {{ request()->routeIs($item['active']) ? 'active' : '' }}">
                    <a href="{{ route($item['route']) }}" class="menu-link">
                        <i class="menu-icon icon-base ti {{ $item['icon'] }}"></i>
                        <div>{{ $item['title'] }}</div>
                    </a>
                </li>
            @endif
        @endforeach
    </ul>
</aside>
<div class="menu-mobile-toggler d-xl-none rounded-1">
    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large text-bg-secondary p-2 rounded-1">
        <i class="ti tabler-menu icon-base"></i>
        <i class="ti tabler-chevron-right icon-base"></i>
    </a>
</div>
