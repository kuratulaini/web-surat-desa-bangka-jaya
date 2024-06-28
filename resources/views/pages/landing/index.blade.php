@extends('layouts.front')

@section('title', 'home')

@section('content')
    {{-- top --}}

    {{-- hero --}}
    <div class="hero-bg">
        <!-- hero -->
        <div class="hero">
            <div class="mx-auto flex pt-16 pb-16 lg:pb-20 lg:px-24 md:px-16 sm:px-8 px-8 lg:flex-row flex-col">
                <!-- Left Column -->
                <div
                    class="lg:flex-grow lg:w-1/2 flex flex-col lg:items-start lg:text-left mb-3 md:mb-12 lg:mb-0 items-center text-center">
                    <h1
                        class="text-black-1 lg:leading-normal sm:text-4xl lg:text-5xl text-3xl mb-5 font-semibold lg:mt-20">
                        Buat Surat Secara Online <br class="lg:block hidden">
                        Tanpa Harus Ke Kantor Desa
                    </h1>
                    <p class="text-lg leading-relaxed text-serv-text font-light tracking-wide mb-10 lg:mb-18 ">
                        Buat surat tanpa harus ngantri dan menunggu <br class="lg:block hidden">
                        setelah jadi langsung ambil di<br class="lg:block hidden">
                        Desa Bangka Jaya.
                    </p>
                    <div
                        class="md:flex contents items-center mx-auto lg:mx-0 lg:flex justify-center lg:space-x-8 md:space-x-2 space-x-0">
                        @auth
                            {{-- <a href="{{ route('explore.pengajuan') }}" type="button" class="bg-serv-button text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg">
                                Mulai
                            </a> --}}
                        @endauth

                        @guest
                            <button class="bg-serv-button text-white text-lg font-semibold py-4 px-12 my-2 rounded-lg" onclick="toggleModal('registerModal')">
                                Mulai
                            </button>
                        @endguest
                       
                    </div>
                </div>
                <!-- Right Column -->
                <div class="w-full lg:w-1/2 text-center lg:justify-start justify-center flex pr-0">
                    <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75 rounded-xl"
                        src="{{ url('https://firebasestorage.googleapis.com/v0/b/lbsaccidentprone.appspot.com/o/logo%20web%20surat.jpg?alt=media&token=b2215ac4-2644-4920-b066-2254a9c47950') }}" alt="" />

                    {{-- <img class="bottom-0 lg:block lg:right-24 md:right-16 sm:right-8 right-8 w-75"
                        src="{{ asset('/assets/hero-image.png') }}" alt="" /> --}}
                </div>
            </div>
            <div class="lg:mb-20 mb-10 flex sm:space-x-4 space-x-1">
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('images/brand-logo/netflix.svg')}}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('images/brand-logo/amazon.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('images/brand-logo/uber.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('images/brand-logo/grab.svg') }}" alt="">
                </div>
                <div class="flex-1 flex items-center justify-center py-3 px-6">
                    <img src="{{ asset('images/brand-logo/google.svg') }}" alt="">
                </div>
            </div>
        </div>
    </div>

    {{-- content --}}
    <div class="content">
        <!-- services -->
        <div class="bg-serv-services-bg overflow-hidden">
            <div class="pt-16 pb-16 lg:pb-20 lg:pl-24 md:pl-16 sm:pl-8 pl-8 mx-auto">
                <div class="flex flex-col w-full">
                    <h2 class="sm:text-2xl text-xl tracking-wider font-semibold mb-5 text-medium-black">
                        Bentuk Pelayanan Birokrasi </h2>
                </div>
                <div class="flex overflow-x-scroll pb-10 hide-scroll-bar dragscroll -mx-3">
                    <div class="flex flex-nowrap">
                        @foreach ($layanan as $item)
                            @include('components.landing.layanan')
                        @endforeach
                    </div>

                </div>
            </div>
        </div>

        <!-- call to action -->
        <div class="py-10 lg:py-24 flex lg:flex-row flex-col items-center cta-bg">
            <!-- Left Column -->
            <div class="w-full lg:w-1/2 text-center justify-center flex lg:mb-0 mb-12">
                <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" data-lity>
                    <img id="hero" src="{{ asset('/assets/images/video-placeholder.png') }}" alt="" class="p-5" />
                </a>
            </div>
            <!-- Right Column -->
            <div class="lg:w-1/2 w-full flex flex-col lg:items-start items-center lg:text-left text-center">
                <h2 class="md:text-4xl text-3xl font-semibold mb-10 lg:leading-normal text-medium-black">
                    Tingkatkan produktivitas <br>
                    Hemat waktu dalam mengurus birokrasi Pemerintah.
                </h2>
                <a
                    href="explore.php"
                    class="bg-serv-button px-10 py-4 text-base text-white font-semibold rounded-xl cursor-pointer focus:outline-none tracking-wide">
                    Pelajari
                </a>
            </div>
        </div>
    </div>
@endsection