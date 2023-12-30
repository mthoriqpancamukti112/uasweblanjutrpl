<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'gurus';
    protected $fillable = [
        'image',
        'nip',
        'nama_guru',
        'no_hp',
        'jk',
        'mata_pelajaran',
        'alamat',
        'username'
    ];

    public function mapel()
    {
        return $this->belongsTo(MataPelajaran::class, 'mata_pelajaran', 'id');
    }
}
