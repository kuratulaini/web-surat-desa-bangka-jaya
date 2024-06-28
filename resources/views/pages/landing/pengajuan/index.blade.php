@extends('layouts.front')

@section('title', 'pengajuan surat')
    
@section('content')
    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-12">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Tambah Layanan Yang Diajukan
                    </h2>
                    <p class="text-sm text-gray-400">
                        isi dengan data yang sebenar-benarnya
                    </p>
                </div>
            </div>
        </div>

        <section class="container px-6 mx-auto mt-1">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-2 py-2 mt-2 bg-white rounded-xl">
                        <form action="{{ route('store.pengajuan') }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                        
                            <div class="">
                                <div class="px-4 py-5 sm:p-6">
                                    <div class="grid grid-cols-6 gap-6">
                                        <div class="col-span-6">
                                            <label for="layanan" class="block mb-3 font-medium text-gray-700 text-md">Pilih Layanan</label>
                                            <input id="layanan" name="layanan" autocomplete="layanan" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$layanan->nama_layanan}}" disabled>
                                            <input id="layanan_id" name="layanan_id" autocomplete="layanan_id" type="hidden" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{$layanan->id}}" >

                                            {{-- <select id="layanan" name="layanan" autocomplete="layanan" class="block w-full px-3 py-3 pr-10 mt-1 bg-white border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                                @foreach ($layanan as $item)
                                                    @if ($item->id == $id_layanan)
                                                        <option value="{{ $item->id }}" selected>{{ $item->nama_layanan }}</option>
                                                    @else
                                                        <option>{{ $item->nama_layanan }}</option>
                                                    @endif
                                                @endforeach
                                            </select> --}}
                                        </div>
                                        <div class="col-span-6">
                                            <label for="nama" class="block mb-3 font-medium text-gray-700 text-md">Nama Penerima Layanan</label>
                                            <input placeholder="Tuliskan nama penerima" type="text" name="nama" id="nama" autocomplete="nama" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" value="{{ auth()->user()->name}}">
                                        </div>

                                        <div class="col-span-6">
                                            <label for="berkas" class="block mb-3 font-medium text-gray-700 text-md">Berkas Persyaratan</label>

                                            @foreach ($persyaratan as $item)
                                                <label for="berkas" class="block font-medium mt-2 text-gray-400 text-md">{{ $item->nama_syarat }}</label>
                                                <input placeholder="berkas" type="file" name="berkas[]" id="berkas" autocomplete="berkas" class="block w-full py-3 pl-5 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">
                                            @endforeach
                                        
                                            <div id="newThumbnailRow"></div>
                                        </div> 
                                    </div>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <a href="/" type="button" class="inline-flex justify-center px-4 py-2 mr-4 text-sm font-medium text-gray-700 bg-white border border-gray-600 rounded-lg shadow-sm hover:bg-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-300">
                                        Batal
                                    </a>
                                    <button type="submit" class="inline-flex justify-center px-4 py-2 text-sm font-medium text-white bg-green-600 border border-transparent rounded-lg shadow-sm hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                        Selesai
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </section>
    </main>
@endsection

@push('after-script')
    <script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js') }}"></script>
    <script type="text/javascript">
        // add row
        $("#addAdvantagesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="advantages[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newAdvantagesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeAdvantagesRow', function() {
            $(this).closest('#inputFormAdvantagesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addServicesRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="services[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newServicesRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeServicesRow', function() {
            $(this).closest('#inputFormServicesRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addTaglineRow").click(function() {
            var html = '';
            html += '<input placeholder="Keunggulan" type="text" name="tagline[]" id="service-name" autocomplete="service-name" class="block w-full py-3 mt-1 border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newTaglineRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeTaglineRow', function() {
            $(this).closest('#inputFormTaglineRow').remove();
        });
    </script>
    <script type="text/javascript">
        // add row
        $("#addThumbnailRow").click(function() {
            var html = '';
            html += '<input placeholder="berkas 3" type="file" name="berkas[]" id="berkas" autocomplete="berkas" class="block w-full py-3 pl-5 mt-1 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm">';

            $('#newThumbnailRow').append(html);
        });

        // remove row
        $(document).on('click', '#removeThumbnailRow', function() {
            $(this).closest('#inputFormThumbnailRow').remove();
        });
    </script>
@endpush