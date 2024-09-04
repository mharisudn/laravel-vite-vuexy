<nav class="layout-navbar container-fluid navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
     id="layout-navbar" style="z-index: 999 !important">
    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
            <i class="ti ti-menu-2 ti-sm"></i>
        </a>
    </div>

    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
        <div class="navbar-nav align-items-center">
            <div class="h5 mb-0">@yield('title')</div>
        </div>

        <ul class="navbar-nav flex-row align-items-center ms-auto">

{{--            <x-lang-switcher />--}}
{{--            <x-theme-switcher />--}}

            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                        <img src="{{ asset('theme/assets/img/avatars/1.png') }}" alt="avatar" class="rounded-circle avatar-initial">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a class="dropdown-item" href="#">
                            <div class="d-flex">
                                <div class="flex-shrink-0 me-3">
                                    <div class="avatar avatar-online">
                                        <span class="avatar-initial rounded-circle bg-label-primary bg-glow">
{{--                                            {{ myInitial() }}--}}
                                        </span>
                                    </div>
                                </div>
                                <div class="flex-grow-1">
                                    <span class="fw-semibold d-block">{{ ucwords(auth()->user()->name) }}</span>
                                    <small class="text-muted">Admin</small>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>
                        <a class="dropdown-item" href="{{ route('profile') }}" wire:navigate>
                            <i class="ti ti-settings me-2 ti-sm"></i>
                            <span class="align-middle">Account</span>
                        </a>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                    </li>
                    <li>

                        <button wire:click="logout" class="dropdown-item">
                            <i class="ti ti-logout me-2 ti-sm"></i>
                            <span class="align-middle">{{ __('Log Out') }}</span>
                        </button>
{{--                        <form id="logout-form" action="{{ route('logout') }}" method="POST">--}}
{{--                            @csrf--}}
{{--                            <button type="submit" class="dropdown-item">--}}
{{--                                <i class="ti ti-logout me-2 ti-sm"></i>--}}
{{--                                <span class="align-middle">Log Out</span>--}}
{{--                            </button>--}}
{{--                        </form>--}}
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
