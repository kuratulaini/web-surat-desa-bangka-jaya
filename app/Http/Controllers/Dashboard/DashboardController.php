<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illumninate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\PengajuanSurat;
use App\Models\DetailUser;
class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan_surat_diproses = PengajuanSurat::where('status', 1);
        $pengajuan_surat_selesai = PengajuanSurat::where('status', 2);
        $jumlah_warga = DetailUser::where('role', 2);

        $pengajuan_surat_table = DB::table('users')
        ->join('detail_user', 'users.id', '=', 'detail_user.user_id')
        ->join('pengajuan_surat','users.id', '=', 'pengajuan_surat.user_id')
        ->join('layanan', 'pengajuan_surat.id', '=', 'layanan.id')
        ->where('pengajuan_surat.status', 1)->get();

        $staff_user = DB::table('users')
        ->join('detail_user', 'users.id', '=','detail_user.user_id')
        ->where('detail_user.role', 1)->get();

        return view('pages.dashboard.index', compact('pengajuan_surat_diproses',
        'pengajuan_surat_selesai','jumlah_warga','pengajuan_surat_table','staff_user'));
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
}
