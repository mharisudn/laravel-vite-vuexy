<!DOCTYPE html>

<html {{ str_replace('_', '-', app()->getLocale()) }} class="light-style layout-navbar-fixed layout-menu-fixed" dir="ltr" data-theme="theme-default"
      data-assets-path="{{ asset('theme/assets/') }}/" data-template="vertical-menu-template">

<head>
    <meta charset="utf-8"/>
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"/>

    <title></title>

    <meta name="description" content=""/>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <link rel="icon" type="image/x-icon" href="{{ asset('theme/favicon.ico') }}"/>

    <meta name="theme-color" content="#7367f0"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.png') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
        href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet"/>

    <!-- Vite assets -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @stack('style')

    {{-- @livewireStyles --}}
</head>


<body>
{{--@include('sweetalert::alert')--}}

<div class="layout-wrapper layout-content-navbar">
    <div class="layout-container">
        @include('layouts.admin.sidebar')

        <div class="layout-page">
            @include('layouts.admin.navbar')

            <div class="content-wrapper">

                <div class="container-fluid flex-grow-1 container-p-y">
                    {{ $slot }}
                </div>

                @include('layouts.admin.footer')

                <div class="content-backdrop fade"></div>
            </div>
        </div>
    </div>

    <!-- Overlay -->
    <div class="layout-overlay layout-menu-toggle"></div>

    <!-- Drag Target Area To SlideIn Menu On Small Screens -->
    <div class="drag-target"></div>
</div>

{{-- <script src="{{ asset('/sw.js') }}"></script>
<script>
    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").then(function (reg) {
            console.log("Service worker has been registered for scope: " + reg.scope);
        });
    }
</script> --}}

@stack('vendor-script')

<!-- Page JS -->
{{-- @livewireScripts --}}
@stack('script')
</body>

</html>
