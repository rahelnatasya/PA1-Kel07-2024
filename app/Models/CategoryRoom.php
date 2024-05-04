<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryRoom extends Model
{
    use HasFactory;
    protected $table = 'category_room';

    public function galery()
    {
        return $this->belongsTo(GaleriRuang::class, 'id');
    }
}
