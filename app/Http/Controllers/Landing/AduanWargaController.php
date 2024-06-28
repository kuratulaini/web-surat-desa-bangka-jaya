<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;

use App\Http\Requests\Landing\Aduan\StoreAduanRequest;

use Illumninate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Auth;

use Symfony\Component\HttpFoundation\Response;

use App\Models\Aduan;
use App\Models\Notifikasi;

class AduanWargaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notif_count = 0;
        if(Auth::check()){
            $notif_count = Notifikasi::where('user_id', Auth::user()->id)
            ->where('is_read', 0)
            ->count();
        }
        return view('pages.landing.aduan.index',compact('notif_count'));
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
    public function store(StoreAduanRequest $request_aduan)
    {
        //get data from request
        $data_aduan = $request_aduan->all();

        //add to database
        $aduan = Aduan::create($data_aduan);
        
        toast()->success('Aduan berhasil dikirim');
        return back();
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
    public function update()
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
}
