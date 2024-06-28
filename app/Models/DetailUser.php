<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DetailUser extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'detail_user';

    protected $dates = [
        'tanggal_lahir', 
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'tanggal_lahir', 
        'alamat', 
        'jenis_kelamin',
        'nomor_telpon',
        'role',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to one
    public function user(){
        return $this->belongsTo('App\Models\User','id');
    }
}
