<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Persyaratan extends Model
{
    // use HasFactory;

    use SoftDeletes;

    public $table = 'persyaratan';

    protected $dates = [
        'updated_at',
        'created_at',
        'deleted_at'
    ];

    protected $fillable = [
        'nama_syarat',
        'deleted_at',
        'created_at',
        'updated_at'
    ];

    //one to many
    public function layanan(){
        return $this->belongsTo('App\Models\Layanan', 'id');
    }
}
