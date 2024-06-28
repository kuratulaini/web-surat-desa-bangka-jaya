@extends('layouts.front')

@section('title', 'notifikasi')
    
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Notifikasi
                    </h2>
                    <p class="text-sm text-gray-400">
                        Status dari pengajuan layanan kamu dapat di lihat disini
                    </p>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-1">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        @if ($notifikasi == null)
                        <div class="ml-4">
                            <p class="text-l text-gray-600">Tidak ada notifikasi</p>
                        </div>
                        @else
                            @foreach ($notifikasi as $item)
                            <!-- Notification Card -->
                            <div class="bg-white rounded-md p-4 shadow-md mb-4">
                                <div class="flex items-center">
                                    <div class="w-8 h-8 bg-blue-500 text-white flex items-center justify-center rounded-full">
                                        <img src="{{ url('https://static.vecteezy.com/system/resources/previews/010/366/210/original/bell-icon-transparent-notification-free-png.png') }}" alt="">
                                    </div>
                                    <div class="ml-4">
                                        <p class="text-l font-medium text-gray-800">{{ $item->created_at }}</p>
                                        <p class="text-l text-gray-600">{{ $item->pesan }}</p>
                                        @if ($item->link_file != "")
                                            <div>
                                                <a href="{{url(Storage::url($item->link_file))}}" class="text-sm text-red-700"><u>Download Berkas</u></a>
                                            </div>                                            
                                        @endif
                                        
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @endif
                    
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection