<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class BerkasPendukung extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'berkas_pendukung';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama_berkas',
        'id_pengajuan_surat',
        'url_berkas',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to many
    public function pengajuan_surat(){
        return $this->belongsTo('App\Models\PengajuanSurat', 'id');
    }
}
