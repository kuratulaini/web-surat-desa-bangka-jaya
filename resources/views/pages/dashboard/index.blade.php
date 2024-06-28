@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">

                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Dashboard
                    </h2>
                    <p class="text-sm text-gray-400">
                        Laporan Bulanan
                    </p>
                </div>

                <div class="col-span-4 text-right">
                    <div @click.away="open = false" class="relative z-10 hidden mt-5 lg:block" x-data="{ open: false }">
                        <button class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-white rounded-lg dark-mode:bg-transparent dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:focus:bg-gray-600 dark-mode:hover:bg-gray-600 md:w-auto md:inline md:mt-0 md:ml-4">
                        <img class="inline w-12 h-12 mr-3 rounded-full" src="{{ url(Storage::url(Auth::user()->profile_photo_path)) }}" alt="">
                            Halo, {{ Auth::user()->name }}
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="p-4 lg:col-span-7 md:col-span-12 md:pt-0">
                    <div class="sm:grid sm:h-32 sm:grid-flow-row sm:gap-4 sm:grid-cols-3">
                        <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/services-progress-icon.svg') }}" alt="" class="w-8 h-8">
                                </div>
                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $pengajuan_surat_diproses->count() }}</p>
                                <p class="text-sm text-left text-gray-500">
                                    Pengajuan Surat<br class="hidden lg:block">
                                    Dalam Proses
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/services-completed-icon.svg') }}" alt="" class="w-8 h-8">
                                </div>
                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $pengajuan_surat_selesai->count() }}</p>
                                <p class="text-sm text-left text-gray-500">
                                    Pengajuan Surat <br class="hidden lg:block">
                                    Selesai
                                </p>
                            </div>
                        </div>

                        <div class="flex flex-col justify-center px-4 py-4 mb-4 bg-white rounded-xl">
                            <div>
                                <div>
                                    <img src="{{ asset('/assets/images/new-freelancer-icon.svg') }}" alt="" class="w-8 h-8">
                                </div>
                                <p class="mt-2 text-2xl font-semibold text-left text-gray-800">{{ $jumlah_warga->count() }}</p>
                                <p class="text-sm text-left text-gray-500">
                                    Jumlah Warga <br class="hidden lg:block">
                                    Terdaftar
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-6 mt-8 bg-white rounded-xl">
                        <div>
                            <h2 class="mb-1 text-xl font-semibold">
                                Pengajuan Terakhir
                            </h2>
                            <p class="text-sm text-gray-400">
                                {{ $pengajuan_surat_diproses->count() }} Total Pengajuan Dalam Proses
                            </p>
                        </div>

                        <table class="w-full mt-4" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Nama</th>
                                    <th class="py-4" scope="">Layanan</th>
                                    <th class="py-4" scope="">Diajukan</th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">
                                @foreach ($pengajuan_surat_table as $item)
                                    <tr class="text-gray-700">
                                        <td class="w-1/3 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="{{ $item->profile_photo_path }}" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">{{ $item->name }}</p>
                                                    <p class="text-sm text-yellow-400">Dalam Proses</p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="w-2/4 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <p class="font-medium text-black">
                                                        {{ $item->nama_layanan }}
                                                    </p>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="px-1 py-5 text-xs text-red-500">
                                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline mb-1">
                                                <path d="M7.0002 12.8332C10.2219 12.8332 12.8335 10.2215 12.8335 6.99984C12.8335 3.77818 10.2219 1.1665 7.0002 1.1665C3.77854 1.1665 1.16687 3.77818 1.16687 6.99984C1.16687 10.2215 3.77854 12.8332 7.0002 12.8332Z" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M7 3.5V7L9.33333 8.16667" stroke="#F26E6E" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            {{ \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') }}
                                        </td>

                                    </tr>
                                @endforeach
                            
                            </tbody>
                        </table>
                    </div>
                </main>

                <aside class="p-4 lg:col-span-5 md:col-span-12 md:pt-0">
                    <div class="p-6 bg-white rounded-xl">
                        <div>
                            <h2 class="mb-1 text-xl font-semibold">
                                Staff Desa
                            </h2>
                            <p class="text-sm text-gray-400">
                                {{ $staff_user->count() }} Total Staff
                            </p>
                        </div>

                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope=""></th>
                                    <th class="py-4" scope=""></th>
                                </tr>
                            </thead>

                            <tbody class="bg-white">

                                @foreach ($staff_user as $item)
                                    <tr class="text-gray-700">
                                        <td class="w-1/2 px-1 py-2">
                                            <div class="flex items-center text-sm">
                                                <div class="relative w-10 h-10 mr-3 rounded-full md:block">
                                                    <img class="object-cover w-full h-full rounded-full" src="{{ url(Storage::url($item->profile_photo_path)) ?? "" }}" alt="" loading="lazy" />
                                                    <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                                                </div>
                                                <div>
                                                    <p class="font-medium text-black">{{ $item->name }}</p>
                                                    <p class="text-sm text-gray-400">{{ \Carbon\Carbon::parse($item->created_at)->format('Y-m-d') }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="w-1/2 px-1 py-5 text-xs text-right text-red-500">
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </aside>
            </div>
        </section>
    </main>    
@endsection