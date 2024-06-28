@extends('layouts.app')

@section('title', 'Pengajuan')

@section('content')

    <main class="h-full overflow-y-auto">
        <div class="container mx-auto">
            <div class="grid w-full gap-5 px-10 mx-auto md:grid-cols-12">
                <div class="col-span-8">
                    <h2 class="mt-8 mb-1 text-2xl font-semibold text-gray-700">
                        Aduan
                    </h2>
                    <p class="text-sm text-gray-400">
                        {{ $aduan->count() }} Total Aduan
                    </p>
                </div>
            </div>
        </div>
        <section class="container px-6 mx-auto mt-5">
            <div class="grid gap-5 md:grid-cols-12">
                <main class="col-span-12 p-4 md:pt-0">
                    <div class="px-6 py-2 mt-2 bg-white rounded-xl">
                        <table class="w-full" aria-label="Table">
                            <thead>
                                <tr class="text-sm font-normal text-left text-gray-900 border-b border-b-gray-600">
                                    <th class="py-4" scope="">No</th>
                                    <th class="py-4" scope=""></th>
                                    <th class="py-4" scope="">Pesan Aduan</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white">
                                @foreach ($aduan as $key => $value)
                                <tr class="text-gray-700 border-b">
                                    <td class="w-1/6 px-1 py-5">
                                        {{ $key + 1 }}
                                    </td>
                                    <td class="w-1/6 px-1 py-5">
                                    </td>
                                    <td class="px-1 py-5 text-sm">
                                        {{ $value->pesan_aduan }}
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </main>
            </div>
        </section>
    </main>
    
@endsection