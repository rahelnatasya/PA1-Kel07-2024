<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurikulum extends Model
{
    use HasFactory;

    protected $table = 'kurikulums';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        'id',
        'semester',
        'kode_mk',
        'subject',
        'sks'
    ];
}
