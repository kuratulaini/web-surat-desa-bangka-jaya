@extends('layouts.app')

@section('title', 'Pengajuan')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Detail Layanan Yang Diajukan
                    </h2>
                    <p class="text-sm text-gray-400">
                        Periksa Data Secara Benar Dan Hati-Hati
                    </p>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-1">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        <form action="{{ route('member.approve.pengajuan_surat', $berkas_pendukung[0]->id_pengajuan_surat)}}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                        
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label for="layanan" class="block mb-3 font-medium text-gray-700 text-md">Pilih Layanan</label>
                                            <input placeholder="Tuliskan nama layanan" type="text" name="layanan" id="layanan" autocomplete="layanan" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="{{ $pengajuan_surat->nama_layanan }}" disabled>
                                        </div>
                                        <div class="col-span-6">
                                            <label for="nama" class="block mb-3 font-medium text-gray-700 text-md">Nama Penerima Layanan</label>
                                            <input placeholder="Tuliskan nama penerima" type="text" name="nama" id="nama" autocomplete="nama" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="{{ $pengajuan_surat->name }}" disabled>
                                        </div>
                                        
                                        <div class="col-span-6">
                                            <label for="berkas" class="block mb-3 font-medium text-gray-700 text-md">Berkas Persyaratan</label>
                                            @foreach ($berkas_pendukung as $item)
                                                <div><a href="{{url(Storage::url($item->url_berkas))}}" class="text-sm text-gray-400">{{ $item->nama_berkas }}</a></div>
                                            @endforeach
                                        </div>

                                        @if ($pengajuan_surat->status != 2)
                                            <div class="col-span-6">
                                                <label for="berkas" class="block mb-3 font-medium text-gray-700 text-md">Upload Berkas Surat</label>
                                                <input placeholder="berkas" type="file" name="berkas[]" id="berkas" autocomplete="berkas" class="block w-full py-3 pl-5 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            </div>
                                        @endif
                                        
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    
                                    @if ($pengajuan_surat->status != 2)
                                    <a href="{{ route('member.reject.pengajuan_surat', $berkas_pendukung[0]->id_pengajuan_surat) }}" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                        Tolak
                                    </a>
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Selesai
                                    </button>

                                    @endif
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>
    </main>
    
@endsection