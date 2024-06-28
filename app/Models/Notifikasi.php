<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Notifikasi extends Model
{
    // use HasFactory;
    use SoftDeletes;

    public $table = 'notifikasi';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'user_id',
        'pesan', 
        'link_file',
        'is_read',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to many
    public function user(){
        return $this->belongsTo('App\Models\User','id');
    }

}
