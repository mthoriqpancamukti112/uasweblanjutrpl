<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Halaman extends Model
{
    use HasFactory;

    protected $table = 'galeries';
    protected $fillable = [
        'image',
        'judul'
    ];
}
