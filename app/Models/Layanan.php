<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Layanan extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'layanan';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama_layanan',
        'perkiraan_selesai',
        'photos',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to many
    public function pengajuan_surat(){
        return $this->hasMany('App\Models\PengajuanSurat', 'layanan_id');
    }

    // one to many
    public function persyaratan(){
        return $this->hasMany('App\Models\Persyaratan','layanan_id');
    }
}
