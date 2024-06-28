@extends('layouts.front')

@section('title', 'layanan')
    
@section('content')
    <div class="max-w-lg mx-auto bg-white p-6 rounded-md shadow-md ml-20 mr-20">

        <!-- About Section with Image -->
        <div class="mb-6">
            <img src="{{ url('https://firebasestorage.googleapis.com/v0/b/lbsaccidentprone.appspot.com/o/struktur%20desa%20bangka%20jaya.png?alt=media&token=c94b4fde-8c48-4c78-998d-badc34c504ec') }}" 
            alt="About Us" class="mx-auto rounded-md">
        </div>

        <!-- About Information -->
        <div>
            <h2 class="text-2xl font-bold mb-4">Bangka Jaya</h2>

            <!-- List with Tailwind Styling -->
            <ul class="list-disc pl-4 mb-4">
                <li class="mb-2">Gampong : Bangka Jaya</li>
                <li class="mb-2">Kecamatan : Dewantara</li>
                <li class="mb-2">Kota / Kab : Aceh Utara</li>
                <li class="mb-2">Provinsi : Aceh</li>
                <li class="mb-2">Jumlah Penduduk : 4569 Jiwa</li>
                <li class="mb-2">Batas Utara : Bersebelahan dengan selat melaka</li>
                <li class="mb-2">Batas Selatan : Bersebelahan dengan Gampong Uteun geulinggang</li>
                <li class="mb-2">Batas Barat : Bersebelahan dengan Gampong Bluka teubai</li>
                <li class="mb-2">Batas Timur : Bersebelahan dengan Gampong keude Krueng Geukeuh</li>
            </ul>
        </div>

    </div>
@endsection