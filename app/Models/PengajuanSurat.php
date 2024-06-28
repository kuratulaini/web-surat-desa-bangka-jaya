<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PengajuanSurat extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'pengajuan_surat';

    protected $dates = [
        'tanggal_pengajuan',
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'layanan_id', 
        'tanggal_pengajuan',
        'tanggal_selesai',
        'status',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to one
    public function antrian(){
        return $this->hasOne('App\Models\Antrian','id_pengajuan_surat');
    }

    //one to many
    public function berkas_pendukung(){
        return $this->hasMany('App\Models\BerkasPendukung','id_pengajuan_surat');
    }

    public function user(){
        return $this->belongsTo('App\Models\User','id');
    }

    public function layanan(){
        return $this->belongsTo('App\Models\Layanan','id');
    }
}
