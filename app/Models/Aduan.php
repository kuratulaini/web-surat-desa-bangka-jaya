<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aduan extends Model
{
    // use HasFactory;

    public $table = 'aduan';

    protected $dates = [
        'updated_at',
        'created_at'
    ];

    protected $fillable = [
        'pesan_aduan',
        'created_at',
        'updated_at'
    ];
}
