<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use App\Http\Requests\Landing\PengajuanSurat\StorePengajuanSuratRequest;
use App\Http\Requests\Landing\BerkasPengajuan\StoreBerkasRequest;
use App\Http\Requests\Landing\PengajuanSurat\StoreLayananSuratRequest;

use Illumninate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use File;
use Auth;

use App\Models\Layanan;
use App\Models\Persyaratan;
use App\Models\PengajuanSurat;
use App\Models\BerkasPendukung;
use App\Models\Notifikasi;

class LandingController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $layanan = Layanan::all();
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
            ->where('is_read', 0)
            ->count();
        }

        return view('pages.landing.index', compact('layanan','notif_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function explore()
    {
        $layanan = Layanan::all();
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
        ->where('is_read', 0)
        ->count();
        }

        return view('pages.landing.explore', compact('layanan','notif_count'));
    }

    public function pengajuan_surat($id)
    {
        $id_layanan = $id;
        $layanan = Layanan::where('id',$id)->first();
        $persyaratan = Persyaratan::where('layanan_id', $id)->get();
       
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
        ->where('is_read', 0)
        ->count();
        }

        return view('pages.landing.pengajuan.index',compact('layanan','persyaratan','id_layanan','notif_count'));
    }

    public function notifikasi()
    {
        $notifikasi = Notifikasi::where('user_id', Auth::user()->id)->get();
        
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
        ->where('is_read', 0)
        ->count();
        }

        $notifikasis = Notifikasi::where('user_id', Auth::user()->id)
        ->where('is_read', 0)
        ->get();

        foreach ($notifikasis as $notif){
            $update_notif = notifikasi::find($notif->id);
            $update_notif->is_read = 1;
            $update_notif->save();
        }

        return view('pages.landing.notifikasi.index',compact('notifikasi','notif_count'));
    }

    public function about()
    {
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
        ->where('is_read', 0)
        ->count();
        }

        return view('pages.landing.about',compact('notif_count'));
    }

    public function store_pengajuan_surat(StorePengajuanSuratRequest $request)
    {
        $data_request = $request->all();

        //init requets needed
        $data_layanan = Layanan::where('id', $data_request['layanan_id'])->first();
        $data_request['user_id'] = Auth::user()->id;
        $data_request['layanan_id'] = $data_layanan->id;
        $data_request['tanggal_pengajuan'] = Date('Y-m-d');
        $data_request['status'] = 1;

        //save request pengajuan
        $save_pengajuan = PengajuanSurat::create($data_request);

        //save berkas pengajuan
        if ($request->hasfile('berkas')) 
        {
            $file_number = 1;

            foreach ($request->file('berkas') as $file) 
            {
                $path = $file->store(
                    'assets/berkas', 'public'
                );

                $berkas_pendukung = new BerkasPendukung;
                $berkas_pendukung->nama_berkas = "Berkas $file_number";
                $berkas_pendukung->id_pengajuan_surat = $save_pengajuan['id'];
                $berkas_pendukung->url_berkas = $path;
                $berkas_pendukung->save();

                $file_number++;
            }
        }

        toast()->success('Berhasil ajukan pelayanan');
        return back();

    }
}
