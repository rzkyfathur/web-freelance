<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
<head>

    @include('includes.Landing.meta')

    <title>@yield('title') | Serve</title>

    @stack('before-style')

    @include('includes.Landing.style')

    @stack('after-style')
</head>
<body class="antialiased">
    <div class="relative">

        @include('includes.Landing.header')
                @include('sweetalert::alert')
                @yield('content')

        @include('includes.landing.footer')

        @stack('before-script')

        @include('includes.landing.script')

        @stack('after-script')

        {{-- modals --}}
        @include('components.modal.login')
        @include('components.modal.register')
        @include('components.modal.register-success')

    </div>
</body>
</html>
