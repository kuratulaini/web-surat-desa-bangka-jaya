<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('includes.landing.meta')

    <title>@yield('title') | Desa Bangka Jaya</title>

    @stack('before-style')

    @include('includes.landing.style')

    @stack('after-style')
</head>
<body class="antialised">

    <div class="relative">
        
        @include('includes.landing.header')

            @include('sweetalert::alert')

            <?php Session::forget('sweet_alert'); ?>

            @yield('content')
        
        @include('includes.landing.footer')

        @stack('before-script')

        @include('includes.landing.script')
    
        @stack('after-script')

        {{-- modal --}}
        @include('components.modal.login')
        @include('components.modal.register')
        @include('components.modal.register-success')

    </div>
    
</body>
</html>