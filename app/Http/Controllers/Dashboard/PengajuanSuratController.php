<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use PDF;

use App\Models\PengajuanSurat;
use App\Models\BerkasPendukung;
use App\Models\Notifikasi;
use App\Models\Layanan;

class PengajuanSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pengajuan_surat_table = DB::table('users')
        ->select('users.*','layanan.*', 'pengajuan_surat.id as id_pengajuan_surat',
        'pengajuan_surat.tanggal_selesai','pengajuan_surat.status','pengajuan_surat.tanggal_pengajuan')
        ->join('detail_user', 'users.id', '=', 'detail_user.user_id')
        ->join('pengajuan_surat','users.id', '=', 'pengajuan_surat.user_id')
        ->join('layanan', 'pengajuan_surat.id', '=', 'layanan.id')->get();

        return view('pages.dashboard.pengajuan.index',compact('pengajuan_surat_table'));
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

    public function detail($id)
    {
        $berkas_pendukung = BerkasPendukung::where('id_pengajuan_surat', $id)->get();

        $pengajuan_surat = DB::table('users')
        ->select('users.*','layanan.*', 'pengajuan_surat.id as id_pengajuan_surat',
        'pengajuan_surat.tanggal_selesai','pengajuan_surat.status','pengajuan_surat.tanggal_pengajuan')
        ->join('detail_user', 'users.id', '=', 'detail_user.user_id')
        ->join('pengajuan_surat','users.id', '=', 'pengajuan_surat.user_id')
        ->join('layanan', 'pengajuan_surat.id', '=', 'layanan.id')
        ->where('pengajuan_surat.id', $id)->first();     

        return view('pages.dashboard.pengajuan.edit',compact('berkas_pendukung','pengajuan_surat'));
    }

    public function approve($id, Request $request)
    {
        $update_pengajuan_surat = PengajuanSurat::find($id);
        $update_pengajuan_surat->status = 2;
        $update_pengajuan_surat->tanggal_selesai = Date('Y-m-d');
        $update_pengajuan_surat->save();

        $layanan = Layanan::where('id', $update_pengajuan_surat->layanan_id)->first();

        //save berkas pengajuan dan buat notifikasi
        if ($request->hasfile('berkas')) 
        {
            $file_number = 1;

            foreach ($request->file('berkas') as $file) 
            {
                $path = $file->store(
                    'assets/berkas', 'public'
                );

                $notifikasi = Notifikasi::create([
                    "user_id" => $update_pengajuan_surat->user_id,
                    "pesan" => "Pengajuan $layanan->nama_layanan anda telah selesai, silahkan ambil di kantor desa bangka jaya atau download di link yang ada di bawah. Terima Kasih",
                    "link_file" => $path,
                    "is_read" => 0,
                ]);

                $file_number++;
            }
        }

        toast()->success('Berhasil menerima pengajuan');
        return redirect()->route('member.pengajuan_surat.index');
    }

    public function reject($id)
    {
        $update_pengajuan_surat = PengajuanSurat::find($id);
        $update_pengajuan_surat->status = 3;
        $update_pengajuan_surat->save();

        $layanan = Layanan::where('id', $update_pengajuan_surat->layanan_id)->first();

        $notifikasi = Notifikasi::create([
            "user_id" => $update_pengajuan_surat->user_id,
            "pesan" => "Pengajuan $layanan->nama_layanan anda ditolak",
            "link_file" => "",
            "is_read" => 0,
        ]);

        toast()->success('Berhasil tolak pengajuan');
        return redirect()->route('member.pengajuan_surat.index');
    }

    public function reporting() {
        $pengajuan_surat = DB::table('users')
        ->select('users.*','layanan.*', 'pengajuan_surat.id as id_pengajuan_surat',
        'pengajuan_surat.tanggal_selesai','pengajuan_surat.status','pengajuan_surat.tanggal_pengajuan')
        ->join('detail_user', 'users.id', '=', 'detail_user.user_id')
        ->join('pengajuan_surat','users.id', '=', 'pengajuan_surat.user_id')
        ->join('layanan', 'pengajuan_surat.id', '=', 'layanan.id')->get();

        // Build the HTML content
        $html = '<html>
        <head>
            <style>
                body { font-family: Arial, sans-serif; }
                h1 { text-align: center; }
                table { width: 100%; border-collapse: collapse; }
                th, td { border: 1px solid black; padding: 8px; text-align: left; }
                th { background-color: #f2f2f2; }
            </style>
        </head>
        <body>
            <h1>Data Report Pengajuan Surat</h1>
            <table>
                <thead>
                    <tr>
                        <th>ID Pengajuan</th>
                        <th>Nama Layanan</th>
                        <th>Nama Penerima Layanan</th>
                        <th>Tanggal Pengajuan</th>
                        <th>Tanggal Selesai</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>';
        
        foreach ($pengajuan_surat as $item) {
            if ($item->status == 1){
                $html .= '<tr>
                <td>' . $item->id . '</td>
                <td>' . $item->nama_layanan . '</td>
                <td>' . $item->name . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_selesai)->format('Y-m-d') . '</td>
                <td> Diproses </td>
              </tr>';
            }else if($item->status == 2){
                $html .= '<tr>
                <td>' . $item->id . '</td>
                <td>' . $item->nama_layanan . '</td>
                <td>' . $item->name . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_selesai)->format('Y-m-d') . '</td>
                <td> Selesai </td>
              </tr>';
            }else {
                $html .= '<tr>
                <td>' . $item->id . '</td>
                <td>' . $item->nama_layanan . '</td>
                <td>' . $item->name . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_pengajuan)->format('Y-m-d') . '</td>
                <td>' . \Carbon\Carbon::parse($item->tanggal_selesai)->format('Y-m-d') . '</td>
                <td> Ditolak </td>
              </tr>';
            }
            
        }

        $html .= '</tbody></table>';

        $pdf = PDF::loadHTML($html);

        return $pdf->download('report_pengajuan_surat.pdf');
    }
}
