@extends('layouts.app')

@section('title', 'Pengajuan')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Pengajuan Surat
                    </h2>
                    <p class="text-sm text-gray-400">
                        {{ $pengajuan_surat_table->count() }} Total Pengajuan
                    </p>
                </div>
            </div>
        </div>
        @if (Auth::user()->id == '3')
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="text-right">
                        <a href="{{ route('member.reporting.pengajuan_surat') }}" class="px-4 py-2 mt-2 mb-2 text-left text-white rounded-xl bg-serv-button">Export to PDF</a>
                    </div>
                    <div class="px-6 py-2 mt-4 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Nama Layanan</th>
                                    <th class="py-4" scope="">Nama Penerima Layanan</th>
                                    <th class="py-4" scope="">Tanggal Pengajuan</th>
                                    <th class="py-4" scope="">Tanggal Selesai</th>
                                    <th class="py-4" scope="">Status</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($pengajuan_surat_table as $item)
                                    <tr class="text-gray-700 border-b">
                                        <td class="w-1/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <a href="#" class="font-medium text-black">
                                                        {{ $item->nama_layanan }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            @if ($item->tanggal_selesai == NULL)
                                                -
                                            @else
                                                {{ \Carbon\Carbon::parse($item->tanggal_selesai)->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td class="px-1 py-5 text-sm text-green-500 text-md">
                                            @if ($item->status == 1)
                                                Dalam Proses
                                            @else
                                                @if ($item->status == 2)
                                                    Selesai
                                                @else
                                                    Ditolak
                                                @endif
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
        @else
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="text-right">
                        <a href="{{ route('member.reporting.pengajuan_surat') }}" class="px-4 py-2 mt-2 mb-2 text-left text-white rounded-xl bg-serv-button">Export to PDF</a>
                    </div>
                    <div class="px-6 py-2 mt-4 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">Nama Layanan</th>
                                    <th class="py-4" scope="">Nama Penerima Layanan</th>
                                    <th class="py-4" scope="">Tanggal Pengajuan</th>
                                    <th class="py-4" scope="">Tanggal Selesai</th>
                                    <th class="py-4" scope="">Status</th>
                                    <th class="py-4" scope="">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($pengajuan_surat_table as $item)
                                    <tr class="text-gray-700 border-b">
                                        <td class="w-1/6 px-1 py-5">
                                            <div class="flex items-center text-sm">
                                                <div>
                                                    <a href="#" class="font-medium text-black">
                                                        {{ $item->nama_layanan }}
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ $item->name }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            {{ \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') }}
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            @if ($item->tanggal_selesai == NULL)
                                                -
                                            @else
                                                {{ \Carbon\Carbon::parse($item->tanggal_selesai)->format('Y-m-d') }}
                                            @endif
                                        </td>
                                        <td class="px-1 py-5 text-sm text-green-500 text-md">
                                            @if ($item->status == 1)
                                                Dalam Proses
                                            @else
                                                @if ($item->status == 2)
                                                    Selesai
                                                @else
                                                    Ditolak
                                                @endif
                                            @endif
                                        </td>
                                        <td class="px-1 py-5 text-sm">
                                            <a href="{{ route('member.detail.pengajuan_surat', $item->id_pengajuan_surat) }}" class="px-4 py-2 mt-2 text-left text-white rounded-xl bg-serv-email">
                                                Detail
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
        @endif
    </main>
    
@endsection